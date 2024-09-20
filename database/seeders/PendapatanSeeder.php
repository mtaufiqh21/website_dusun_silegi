<?php

namespace Database\Seeders;

use App\Models\Pendapatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendapatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pendapatan::query()->create([
            'nominal_pendapatan' => "5000000",
            'tahun' => 2024,
            'active_status' => 1,
        ]);
    }
}
