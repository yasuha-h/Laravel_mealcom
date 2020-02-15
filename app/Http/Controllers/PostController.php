<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost() {
        if( Auth::check() )
        {
            $user = Auth::user();
            return view('post', ['user' => $user]);
        }
        else
        {
            return redirect('/login');
        }
    }
}
