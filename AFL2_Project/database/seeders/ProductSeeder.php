<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            'product_picture' => 'shampoo_autogleam.jpg',
            'product_name' => 'Shampoo Autogleam',
            'description' => 'Shampoo Autogleam adalah shampoo mobil dengan wax technology dan efek daun talas yang membuat mobil tampak clean dan cool',
            'price' => 35000,
        ]);
    }
}
