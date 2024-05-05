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
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Teszt Eszter',
             'email' => 'eszter@teszt.com',
         ]);

         for ($i = 0; $i < 10; $i++) {
            \App\Models\User::factory()->create([
                'name' => fake()->name(),
                'email' => fake()->email(),
            ]);
        }

         $this->call(NewsSeeder::class);
    }
}
