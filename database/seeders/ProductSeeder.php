<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'product 1',
            'description' => 'lorem ipsum 1',
            'price' => 2000,
        ]);
        Product::create([
            'title' => 'product 2',
            'description' => 'lorem ipsum 2',
            'price' => 4000,
        ]);

    }
}
