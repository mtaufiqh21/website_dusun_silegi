<?php

namespace Database\Seeders;

use App\Models\Suggest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuggestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Suggest::query()->create([
            "name" => "test saran",
            "email" => "saran@gmail.com",
            "phone_number" => "12512515",
            "suggestion" => "Lorem Ipsum Saran Test",
            "active_status" => 1,
        ]);
    }
}
