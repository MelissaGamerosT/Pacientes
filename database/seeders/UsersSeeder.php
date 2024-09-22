<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Juanita Pérez',
            'email'=>'JuanitaP@gmail.com',
            'password'=>Hash::make('1234'),
        ]);

        DB::table('users')->insert([
            'name'=>'Ramiro Suárez',
            'email'=>'RamiroS@gmail.com',
            'password'=>Hash::make('1112'),
        ]);

        DB::table('users')->insert([
            'name'=>'Saúl Giménez',
            'email'=>'SaúlG@gmail.com',
            'password'=>Hash::make('1113'),
        ]);
    }
}
