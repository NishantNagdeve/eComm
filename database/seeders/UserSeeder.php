<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Lokesh',
            'email' => 'lokesh@admin.com',
            'password' => Hash::make('lokesh@admin.com'),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
