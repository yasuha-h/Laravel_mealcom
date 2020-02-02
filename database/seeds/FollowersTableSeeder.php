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
              'target_id' => 2,
              'created_at' => now(),
              'updated_at' => now(),
            ],
            [
              'user_id' => 4,
              'target_id' => 1,
              'created_at' => now(),
              'updated_at' => now(),
            ]
          ]
        );
    }
}
