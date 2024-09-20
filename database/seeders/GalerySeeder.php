<?php

namespace Database\Seeders;

use App\Models\Galery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Galery::query()->create([
            "image_name" => "test nama galeri",
            "image" => "images/noimage.jpg",
            "description" => "Test Galeri Deskripsi",
            "active_status" => 1,
        ]);
    }
}
