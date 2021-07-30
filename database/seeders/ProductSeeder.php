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
            'name' => 'VIVO Mobile',
            'price' => '10000',
            'category' =>'mobile',
            'description' =>'8gb RAM, 20MP Front Camera',
            'gallery' =>'public/mob2.jpg',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
