<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Following;
use App\User;

class FollowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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