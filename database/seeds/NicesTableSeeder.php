<?php

use Illuminate\Database\Seeder;

class NicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nices')->truncate();
        DB::table('nices')->insert(
          [
            [
              'user_id' => 1,
              'post_id' => 2,
              'created_at' => now(),
              'updated_at' => now(), 
            ],
            [
              'user_id' => 1,
              'post_id' => 3,
              'created_at' => now(),
              'updated_at' => now(),   
            ],
            [
              'user_id' => 2,
              'post_id' => 1,
              'created_at' => now(),
              'updated_at' => now(),
            ],
            [
              'user_id' => 2,
              'post_id' => 4,
              'created_at' => now(),
              'updated_at' => now(),
            ]
          ]
        );
    }
}
