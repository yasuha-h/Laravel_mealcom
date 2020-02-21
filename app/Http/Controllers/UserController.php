<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Following;
use App\Follower;

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
    
    public function showFollowing(int $id)
    {
        // フォローしているユーザーを取得
        $following_users = User::whereIn('id',
                              Following::where('user_id', $id)
                                ->select('target_id')
                                ->get()        
                          )->get();

        return view('user.following', [
            'user' => User::findOrFail($id),
            'following_users' => $following_users,
        ]);
    }
    
    public function showFollowers(int $id)
    {
        // フォローされているユーザーの取得
        $followed_users = User::whereIn('id',
                            Follower::where('user_id', $id)
                              ->select('target_id')
                              ->get()
                          )->get();
        return view('user.followers', [
            'user' => User::findOrFail($id),
            'followed_users' => $followed_users,
        ]);
    }


}
