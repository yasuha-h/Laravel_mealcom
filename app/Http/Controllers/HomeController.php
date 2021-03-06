<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use App\Follower;
use App\Nice;

class HomeController extends Controller
{
    public function index(Nice $nice)
    {
        $user = Auth::user();
        $posts = Post::whereIn('user_id', 
                    Follower::where('following_id', $user->id)
                        ->select('followed_id')
                        ->get()
                        ->push($user->id)
                 )->select('id', 'user_id', 'img_1', 'content', 'nice_count')
                 ->orderBy('id', 'desc')->get();
        return view('index', [
          'nice' => $nice,
          'user' => $user,
          'posts' => $posts
        ]);
    }
}
