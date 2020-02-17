<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth')
           ->except(['createPost']);
    }
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
     * @param Request $request
     * @return Response
     */
    public function post(Request $request) 
    {
        // Postバリデーション
        $request->validate([
          'post_img' => [
              'required', 
              'file',
              'image',
              'mimes:jpeg,png,jpg',
              'max:2048',
          ],
          'content' => ['max:140'],
        ]);

        // Postレコード作成
        $post = new Post;
        $post->user_id = Auth::id();
        $post->content = $request->post_content;
        $post->img_1 = $request->post_img;
        $post->created_at = now();
        $post->updated_at = now();
        $post->save();
        return view('user.profile', [
            'user' => Auth::user(),
            'post' => Post::all()->where()
        ]);
    }



}
