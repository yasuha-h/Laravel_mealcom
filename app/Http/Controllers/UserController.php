<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nice;
use App\Post;
use App\User;
use App\Following;
use App\Follower;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // ユーザープロフィール表示
    public function showProfile(int $id)
    {
        return view('user.share', [
            'user' => User::findOrFail($id),
            'posts' => Post::where('user_id', $id)->get(),
        ]);
    }
    
    // フォローしているユーザーを表示
    public function showFollowing(int $id)
    {
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
    
    // フォローされているユーザーを表示
    public function showFollowers(int $id)
    {
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

    // ユーザーがいいねしたポストの表示
    public function showNices(int $id)
    {
        $post_nices = Post::whereIn('id',
                    Nice::where('user_id', $id)
                      ->select('post_id')
                      ->get()   
                 )->get();
        return view('user.nices', [
          'user' => User::findOrFail($id),
          'posts' => $post_nices,
        ]);
    }

    public function follow(User $user)
    {
      $follower = auth()->user();
      // フォローしているか
      $is_following = $follower->isFollowing($user->id);
      if(!$is_following) {
          // フォローしていなければフォローする
          $follower->follow($user->id);
          return back();
      }
    }
    public function unfollow(User $user)
    {
      $follower = auth()->user();
      // フォローしているか
      $is_following = $follower->isFollowing($user->id);
      if($is_following) {
          // フォローしていればフォローを解除する
          $follower->unfollow($user->id);
          return back();
      }
    }

}
