<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::factory()->create(['id' => 1, 'active_status' => 1, 'type' => 'longtext', 'key' => 'visi-misi', 'value' => 'Lorem Ipsum']);
        Setting::factory()->create(['id' => 2, 'active_status' => 1, 'type' => 'text', 'key' => 'address', 'value' => 'Silegi, Lebakwangi, Banjarnegara']);
        Setting::factory()->create(['id' => 3, 'active_status' => 1, 'type' => 'text', 'key' => 'phone', 'value' => '085']);
        Setting::factory()->create(['id' => 4, 'active_status' => 1, 'type' => 'text', 'key' => 'email', 'value' => 'compro@email.com']);
        Setting::factory()->create(['id' => 5, 'active_status' => 1, 'type' => 'text', 'key' => 'socmed-facebook', 'value' => 'http://google.com']);
        Setting::factory()->create(['id' => 6, 'active_status' => 1, 'type' => 'text', 'key' => 'socmed-instagram', 'value' => 'http://google.com']);
        Setting::factory()->create(['id' => 7, 'active_status' => 1, 'type' => 'longtext', 'key' => 'sejarah', 'value' => 'Lorem Ipsum']);
        Setting::factory()->create(['id' => 8, 'active_status' => 1, 'type' => 'text', 'key' => 'kepsek-desc', 'value' => 'Lorem Ipsum']);
    }
}
