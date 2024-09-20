<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $user = User::query()->first();

        Teacher::query()->create([
            "email" => "olan@gmail.com",
            "name" => "olan",
            "nip" => 12345,
            "gender" => "Pria",
            "image" => "images/noimage.jpg",
            "position_category" => "Guru",
            "position" => "Bahasa Inggris",
            "active_status" => 1,
        ]);
    }
}
