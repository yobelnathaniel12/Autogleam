<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("owners")->insert([
            'name' => 'Richard Hermawan',
            'role' => 'Chief Executive Officer (CEO)',
            'image' => 'Richard Hermawan.PNG'
        ]);
        DB::table("owners")->insert([
            'name' => 'Angga Saputra Wibowo',
            'role' => 'Chief Operating Officer (COO)',
            'image' => 'Angga.PNG'
        ]);
        DB::table("owners")->insert([
            'name' => 'Vincent Anggriawan',
            'role' => 'Chief Marketing Officer (CMO)',
            'image' => 'Vincent.jpg'
        ]);
        DB::table("owners")->insert([
            'name' => 'Vita Tiania Pattiwel',
            'role' => 'Chief Technology Officer (CTO)',
            'image' => 'Vita.jpg'
        ]);

    }
}
