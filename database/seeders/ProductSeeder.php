<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::query()->create([
            'owner' => 'John Doe',
            'title' => 'Product 1',
            'short_description' => 'Short Description 1',
            'price' => 100000,
            'phone_number' => 235235325,
            'image' => 'images/noimage.jpg',
            'active_status' => 1,
        ]);
    }
}
