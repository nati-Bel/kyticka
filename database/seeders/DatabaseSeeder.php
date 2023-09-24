<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\GallerySeeder;
use Database\Seeders\PhotoSeeder;
use Database\Seeders\RoleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GallerySeeder::class,
            PhotoSeeder::class,
            RoleSeeder::class,
        ]);
    }
}
