<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        
        $this->call(users__seed::class);
        $this->call(categories_seed::class);
        $this->call(PostSeeder::class);
    }
}