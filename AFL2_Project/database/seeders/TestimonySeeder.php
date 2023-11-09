<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("testimonies")->insert([
            'customer_id' => 1,
            'product_id' => 1,
            'testimony' => 'Mobil kinclong, harga murah dan aman dipakai kepada cat dan coating mobil',
        ]);
        DB::table("testimonies")->insert([
            'customer_id' => 2,
            'product_id' => 1,
            'testimony' => 'Produk memuaskan, harga terjangkau, cocok buat mobil yang sudah dicoating',
        ]);
        DB::table("testimonies")->insert([
            'customer_id' => 3,
            'product_id' => 1,
            'testimony' => 'Packaging pas untuk digunakan sebagai shampo cuci mobil sehari-hari',
        ]);
    }
}
