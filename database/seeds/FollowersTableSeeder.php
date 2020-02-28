<?php

use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('followers')->truncate();
        DB::table('followers')->insert(
          [
            [
              'following_id' => 1,
              'followed_id' => 2,
            ],
            [
              'following_id' => 2,
              'followed_id' => 3,
            ],
            [
              'following_id' => 2,
              'followed_id' => 1,
            ],
            [
              'following_id' => 3,
              'followed_id' => 4,
            ],
            [
              'following_id' => 2,
              'followed_id' => 4,
            ],
            [
              'following_id' => 4,
              'followed_id' => 1,
            ],
          ]
        );
    }
}
