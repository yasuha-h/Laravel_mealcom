<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class UserController extends Controller
{
    // ユーザープロフィール
    public function showProfile(int $id)
    {
        return view('user.profile', [
          'user' => User::findOrFail($id),
          'posts' => Post::where('user_id', $id)->get(),
        ]);
    }
    
    public function showFollowing()
    {
        return view('user.following');
    }
    // フォロワー表示
    public function showFollowers()
    {
        return view('user.followers');
    }



}
