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
      // DB::table('users')->insert([
      //   'name' => Str::random(10),
      //   'email' => Str::random(10).'@gmail.com', 
      //   'mealcom_id' => Str::random(10),
      //   'password' => Hash::make('test_password'),
      //   'sex_code' => 2,
      //   'profile' => Str::random(10),
      //   'thumbnail' => Str::random(10),
      //   'header_img' => Str::random(10),
      //   'created_at' => now(),
      //   'updated_at' => now(),
      // ]);
    }
}
