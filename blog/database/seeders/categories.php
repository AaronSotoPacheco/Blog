<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categorias")->insert([
            "name" => 'Arboles',
            "img"=> "default.jpg",
            'created_at'=>date('Y-m-d h:m;s')
        ]);
        DB::table("categorias")->insert([
            "name" => 'Arbustos',
            "img"=> "default.jpg",
            'created_at'=>date('Y-m-d h:m;s')
        ]);
    }
}
