<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('setting')->insert(array(
            [
                'nama_perusahaan' => 'Local-Mart',
                'alamat' => 'jl. Kadu Manis, Jatiuwung, Tangerang',
                'telepon' => '08215361523',
                'logo' => 'logo.png',
                'kartu_member' => 'card.png',
                'diskon_member' => '10',
                'tipe_nota' => '0'
            ]
            ));
    }
}
