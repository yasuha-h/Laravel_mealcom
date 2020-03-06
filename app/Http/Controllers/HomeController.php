<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index(){
        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)
                        ->select('img_1', 'content')
                        ->get();
        return view('index', [
          'user' => $user,
          'posts' => $posts
        ]);
    }
}
