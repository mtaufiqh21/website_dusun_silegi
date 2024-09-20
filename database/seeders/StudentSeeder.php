<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Student::query()->create([
            "email" => "student@gmail.com",
            "name" => "Student",
            "nis" => 12345,
            "class" => 10,
            "phone_number" => 123456,
            "address" => "alamat student",
            "gender" => "Laki-Laki",
            "date_of_birth" => "1990-01-01",
            "active_status" => 1,
            "teacher_id" => 1,
        ]);
    }
}
