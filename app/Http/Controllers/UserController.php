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
        // フォローしているユーザーのIDを取得
        $followings = Following::where('user_id', $id)
                              ->select('target_id')
                              ->get();

        foreach($followings as $following){
            $target_id = $following->target_id;
            $following_users = User::where('id', $target_id)
                                  ->get();
        }
        return view('user.following', [
            'user' => User::findOrFail($id),
            'followings' => $followings,
            'following_users' => $following_users,
        ]);
    }
    // フォロワー表示
    public function showFollowers()
    {
        return view('user.followers');
    }



}
