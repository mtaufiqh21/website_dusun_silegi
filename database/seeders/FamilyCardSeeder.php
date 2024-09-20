<?php

namespace Database\Seeders;

use App\Models\FamilyCard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class FamilyCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FamilyCard::query()->create([
            'no_kk' => '3578901234567890',
            'name' => 'Alfred',
            'address' => 'Jln. Gunung Agung No. 23',
            'phone_number' => 235235325,
            'family_card_identity' => 'images/noimage.jpg',
            'wilayah' => 'silegi',
            'rw' => 1,
            'rt' => 1,
            'active_status' => 1,
        ]);
    }
}
