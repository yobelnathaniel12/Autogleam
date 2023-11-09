<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("customers")->insert([
            'customer_name' => 'Thiendry',
            'description' => 'Pemilik Mobil Toyota 86',
            'profile_picture' => 'Thiendry.jpg',
        ]);
        DB::table("customers")->insert([
            'customer_name' => 'Billy Tanjung',
            'description' => 'Pemilik Mobil Wuling Almaz',
            'profile_picture' => 'Billy_Tanjung.jpg',
        ]);
        DB::table("customers")->insert([
            'customer_name' => 'Jovan Angelo',
            'description' => 'Pemilik Mobil Toyota Kijang Innova',
            'profile_picture' => 'Jovan_Angelo.jpg',
        ]);
    }
}
