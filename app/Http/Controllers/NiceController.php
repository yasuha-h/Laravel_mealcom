<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Nice;
use App\Post;
use App\User;


class NiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // いいねのカウント
        // $post_count = Post::where('post_id', $post_id)->select('nice_count')->first();
    }

    public function nice(Nice $nice, Post $post, int $post_id)
    {
        $user = Auth::user();
        $is_nice = $nice->isNice($user->id, $post_id);
        if(!$is_nice)
        {
            // NiceしていなければNiceする
            $nice->nice($user->id, $post_id);
            $post->niceCount($post_id);
            return back();
        }
    }
    public function unNice(Nice $nice, Post $post, int $post_id)
    {
        $user = Auth::user();
        $is_nice = $nice->isNice($user->id, $post_id);
        if($is_nice)
        {
            // NiceしていればNiceを解除する
            $nice->unNice($user->id, $post_id);
            $post->niceDiscount($post_id);
            return back();
        }
    }
}
