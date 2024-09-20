<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::query()->create([
            'name' => 'John Doe',
            'position' => 'Manager',
            'address' => 'Jln. Jakarta No. 123',
            'phone_number' => 235342523,
            'job_description' => 'Software Developer',
            'active_status' => 1,
        ]);
    }
}
