<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
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
    public function createPost() 
    {
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
        // レコード数のカウント+1
        $post_count = (string) Post::count() + 1;
        // Postレコード作成
        $post = new Post;
        $post->user_id = Auth::id();
        $post->content = $request->post_content;
        $file_ex = $request->file('post_img')->getClientOriginalExtension();
        $path = Storage::disk('s3')->putFileAs('/post', $request->file('post_img'), $post_count.'.'.$file_ex, 'public');
        $post->img_1 = Storage::disk('s3')->url($path);
        $post->nice_count = 0;
        $post->created_at = now();
        $post->updated_at = now();
        $post->save();
        
        return redirect()->action(
            'UserController@showProfile', [
                'id' => Auth::id(),
        ]);
    }

    // レコード削除
    public function delete(int $id)
    {
        $post = Post::destroy($id);

        return redirect()->action(
          'UserController@showProfile', [
              'id' => Auth::id(),
      ]);
    }
}
