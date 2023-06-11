<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert(array(
            [
                'name' => 'Daffa\' Shidqi',
                'email' => 'daffa@gmail.com',
                'password' => bcrypt('daffashidqi'),
                'foto' => 'user.png',
                'level' => 1
            ],
            [
                'name' => 'Annisa Nabil',
                'email' => 'annisa@gmail.com',
                'password' => bcrypt('annisanabil'),
                'foto' => 'user.png',
                'level' => 2
            ]
            ));
    }
}
