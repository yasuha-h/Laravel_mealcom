<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Following;
use App\User;

class FollowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function follow(Request $request, int $id)
    {
        $following = new Following;
        $following->user_id = Auth::id();
        $following->target_id = $id;
        $following->created_at = now();
        $following->updated_at = now();
        $following->save();
    }
}
