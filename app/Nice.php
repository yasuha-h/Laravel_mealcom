<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nice extends Model
{
    public function isNice(int $user_id, int $post_id)
    {
        return (boolean) $this->where('user_id', $user_id)
                              ->where('post_id', $post_id)
                              ->first();
    }
    public function nice(int $user_id, int $post_id)
    {
        $nice = new Nice;
        $nice->user_id = $user_id;
        $nice->post_id = $post_id;
        $nice->save();
    }
    public function unNice(int $user_id, int $post_id)
    {
        return $this->where('user_id', $user_id)->where('post_id', $post_id)->delete();
    }
}
