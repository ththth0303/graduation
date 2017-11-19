<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ngô Trung Thắng',
            'email' => 'admin@gmail.com',
            'gender' => '1',
            'level' => '1',
            'password' => bcrypt('123456'),
        ]);
    }
}
