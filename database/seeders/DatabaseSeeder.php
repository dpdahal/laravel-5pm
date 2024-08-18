<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        News::factory(50)->create();

        $this->call([
            UserTableSeeder::class,
            CategoryTableSeeder::class,
        ]);
    }
}
