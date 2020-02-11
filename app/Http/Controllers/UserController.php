<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    // ユーザープロフィール
    public function showProfile(Request $request, $id){
      $user = User::find($id);
      return view('user', [
        'user' => $user,
      ]);
    }
    
    public function showFollowing(){
      return view('user.following');
    }
    // フォロワー表示
    public function showFollowers(){
      return view('user.followers');
    }



}
