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
    }
}
