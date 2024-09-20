<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            TeacherSeeder::class,
            VillagerSeeder::class,
            DataKematianSeeder::class,
            FamilyCardSeeder::class,
            ContactSeeder::class,
            PendapatanSeeder::class,
            ProductSeeder::class,
            StudentSeeder::class,
            MapelSeeder::class,
            NewsSeeder::class,
            GalerySeeder::class,
            SuggestSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
