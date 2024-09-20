<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::query()->create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("admin"),
            "active_status" => 1,
            "role_id" => 1
        ]);

        // User::query()->create([
        //     "name" => "Teacher",
        //     "email" => "teacher@gmail.com",
        //     "password" => Hash::make("teacher"),
        //     "active_status" => 1,
        //     "role_id" => 2
        // ]);

        // User::query()->create([
        //     "name" => "Student",
        //     "email" => "student@gmail.com",
        //     "password" => Hash::make("student"),
        //     "active_status" => 1,
        //     "role_id" => 3
        // ]);

    }
}
