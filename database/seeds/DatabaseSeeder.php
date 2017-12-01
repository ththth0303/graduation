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

        DB::table('select_options')->insert([
            'display_name' => 'Tiến sĩ',
            'name' => 'Ts',
            'value' => '1',
            'type' => 'degree',
        ]);
        DB::table('select_options')->insert([
            'display_name' => 'Thạc sĩ',
            'name' => 'Ths',
            'value' => '2',
            'type' => 'degree',
        ]);
        DB::table('select_options')->insert([
            'display_name' => 'Kỹ sư',
            'name' => 'Ks',
            'value' => '3',
            'type' => 'degree',
        ]);
        DB::table('select_options')->insert([
            'display_name' => 'Giáo sư',
            'name' => 'Gs',
            'value' => '4',
            'type' => 'degree',
        ]);
    }
}
