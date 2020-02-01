<?php

use Illuminate\Database\Seeder;

class FollowingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('followings')->truncate();
      DB::table('followings')->insert(
        [
          [
            'user_id' => 1,
            'target_id' => 2,
            'created_at' => now(),
            'updated_at' => now(), 
          ],
          [
            'user_id' => 1,
            'target_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),   
          ],
          [
            'user_id' => 2,
            'target_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
          ],
          [
            'user_id' => 3,
            'target_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
          ]
        ]
      );
    }
}
