<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->truncate();
      DB::table('users')->insert([
        [
          'name' => 'testuser1',
          'email' => 'user1@gmail.com', 
          'mealcom_id' => Str::random(8),
          'password' => Hash::make('testtest1'),
          'sex_code' => 2,
          'profile' => Str::random(10),
          'thumbnail' => Str::random(10),
          'header_img' => Str::random(10),
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'name' => 'testuser2',
          'email' => 'user2@gmail.com', 
          'mealcom_id' => Str::random(8),
          'password' => Hash::make('testtest2'),
          'sex_code' => 2,
          'profile' => Str::random(10),
          'thumbnail' => Str::random(10),
          'header_img' => Str::random(10),
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'name' => 'testuser3',
          'email' => 'user3@gmail.com', 
          'mealcom_id' => Str::random(8),
          'password' => Hash::make('testtest3'),
          'sex_code' => 2,
          'profile' => Str::random(10),
          'thumbnail' => Str::random(10),
          'header_img' => Str::random(10),
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'name' => 'testuser4',
          'email' => 'user4@gmail.com', 
          'mealcom_id' => Str::random(8),
          'password' => Hash::make('testtest4'),
          'sex_code' => 2,
          'profile' => Str::random(10),
          'thumbnail' => Str::random(10),
          'header_img' => Str::random(10),
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'name' => 'testuser5',
          'email' => 'user5@gmail.com', 
          'mealcom_id' => Str::random(8),
          'password' => Hash::make('testtest5'),
          'sex_code' => 2,
          'profile' => Str::random(10),
          'thumbnail' => Str::random(10),
          'header_img' => Str::random(10),
          'created_at' => now(),
          'updated_at' => now(),
        ],
      ]);
    }
}
