<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function niceCount(int $post_id)
    {
        $post = Post::find($post_id);
        $post->nice_count++;
        $post->save();
    }
    public function niceDiscount(int $post_id)
    {
        $post = Post::find($post_id);
        $post->nice_count--;
        $post->save();
    }
}
