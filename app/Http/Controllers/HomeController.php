<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use App\Follower;

class HomeController extends Controller
{
    public function index(){
        $user = Auth::user();
        $posts = Post::whereIn('user_id', 
                    Follower::where('following_id', $user->id)
                        ->select('followed_id')
                        ->get()
                        ->push($user->id)
                 )->select('img_1', 'content')->get();
        return view('index', [
          'user' => $user,
          'posts' => $posts
        ]);
    }
}
