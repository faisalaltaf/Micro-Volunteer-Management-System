<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'Faisal ',
        //     'last_name' => ' Altaf',
        //     'email' => '180408585@gmail.com',
        //     'phone_number'=>'03069309614',
        //     'password' => Hash::make('password'),
        //     'password_confirm' => Hash::make('password'),
        //     'status' => 0,
        // ]);
        DB::table('admins')->insert([
            'name' => 'Faisal ',
            'email' => '180408585@admin.com',
            'phone'=>'03069309614',
            'password' => Hash::make('password'),
        ]);
    }
}
