<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        // DB::table('tm_user')->insert([
        //     'user_id' => 'B002',
        //     'user_nama' => 'bunga',
        //     'user_pass' => Hash::make('biru'), // Hash password
        //     'user_hak' => 'SU',
        //     'user_sts' => '1'
        // ],
        // [
        //     'user_id' => '1',
        //     'user_nama' => 'pink',
        //     'user_pass' => Hash::make('warna'),
        //     'user_hak' => 'op',
        //     'user_sts' => '1',
        // ],
        // [
        //     'user_id' => '2',
        //     'user_nama' => 'ungu',
        //     'user_pass' => Hash::make('benda'),
        //     'user_hak' => 'ad',
        //     'user_sts' => '1',
        // ],
    // );

    }
}
