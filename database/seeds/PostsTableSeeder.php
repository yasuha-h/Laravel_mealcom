<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert(
        [
        'user_id' => 1,
        'img_1' => Str::random(10),
        'content' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now()
        ],
        [
          'user_id' => 1,
          'img_1' => Str::random(10),
          'content' => Str::random(10),
          'created_at' => now(),
          'updated_at' => now()
        ]
    );
    }
}
