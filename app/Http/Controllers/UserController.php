<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Nice;
use App\Post;
use App\User;
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
    public function showEdit()
    {   
        return view('user.edit', [
            'auth' => Auth::user()
        ]);
    }
    public function editProfile(Request $request)
    {
        $user = User::where('id', Auth::id())->first();
        $user->name = $request->name;
        $user->mealcom_id = $request->mealcom_id;
        $user->email = $request->email;
        $user->profile = $request->profile;
        // $post->updated_at = now();
        $user->save();

        return redirect()->action(
          'UserController@showProfile', [
              'id' => Auth::id(),
      ]);
    }
    
    // フォローしているユーザーを表示
    public function showFollowing(int $id)
    {
        $following_users = User::whereIn('id',
                              Follower::where('following_id', $id)
                                ->select('followed_id')
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
                            Follower::where('followed_id', $id)
                              ->select('following_id')
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

    public function follow(int $id)
    {
        $follower = auth()->user();
        // フォローしているか
        $is_following = $follower->isFollowing($id);
        if(!$is_following)
        {
            // フォローしていなければフォローする
            $follower->follow($id);
            return back();
        }
    }
    public function unfollow(int $id)
    {
        $follower = auth()->user();
        // フォローしているか
        $is_following = $follower->isFollowing($id);
        if($is_following) 
        {
            // フォローしていればフォローを解除する
            $follower->unfollow($id);
            return back();
        }
    }

}
