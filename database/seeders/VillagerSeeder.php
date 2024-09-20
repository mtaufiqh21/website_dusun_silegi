<?php

namespace Database\Seeders;

use App\Models\Villager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class VillagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Villager::query()->create([
            "nik" => 1234567890,
            "name" => "John Doe",
            "email" => "john.doe@gmail.com",
            "phone_number" => 123456789,
            "address" => "Jakarta",
            "gender" => "Male",
            "identity_card" => "images/noimage.jpg",
            "active_status" => 1,
        ]);
    }
}
