<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tm_user')->insert(
        // [
        //     'user_id' => '0',
        //     'user_nama' => 'biru',
        //     'user_pass' => bcrypt('bunga'),
        //     'user_hak' => 'su',
        //     'user_sts' => '1',
        // ],
        [
            'user_id' => '1',
            'user_nama' => 'pink',
            'user_pass' => bcrypt('warna'),
            'user_hak' => 'op',
            'user_sts' => '1',
        ],
        [
            'user_id' => '2',
            'user_nama' => 'ungu',
            'user_pass' => bcrypt('benda'),
            'user_hak' => 'ad',
            'user_sts' => '1',
        ],
);
    }
}
