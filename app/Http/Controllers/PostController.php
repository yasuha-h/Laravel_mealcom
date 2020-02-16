<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    // シェア投稿ページ表示
    public function createPost() {
        if( Auth::check() )
        {
            $user = Auth::user();
            return view('post', ['user' => $user]);
        }
        else
        {
            return redirect('/login');
        }
    }

    /**
     * シェアの投稿
     * 
     * @param PostRequest $request
     * @return Response
     */
    public function post(Request $request) 
    {
        $post = new Post;
        $post->user_id = Auth::id();
        $post->content = $request->post_content;
        $post->img_1 = $request->post_img;
        $post->created_at = now();
        $post->updated_at = now();
        $post->save();
        return view('user.profile', ['user' => Auth::user()]);
    }



}
