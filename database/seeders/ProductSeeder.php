<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'Samsung Mobile',
            'price' => '10000',
            'category' =>'mobile',
            'description' =>'4gb RAM, 12MP Front AI Camera',
            'gallery' =>'public/mob2.jpg',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
