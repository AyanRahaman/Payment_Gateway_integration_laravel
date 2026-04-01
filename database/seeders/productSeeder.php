<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "name" => "Gold",
            "price" => 500,
        ]);
        Product::create([
            "name" => "Silver",
            "price" => 400,
        ]);
        Product::create([
            "name" => "Platinum",
            "price" => 250,
        ]);
    }
}
