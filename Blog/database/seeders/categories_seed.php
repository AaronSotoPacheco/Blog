<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categories_seed extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            "nombre" => 'Plantas',
            "img" => "default.jpg",
            'created_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('categories')->insert([
            "nombre" => 'Arbustos',
            "img" => "default.jpg",
            'created_at' => date('Y-m-d H:m:s')
        ]);
    }
}