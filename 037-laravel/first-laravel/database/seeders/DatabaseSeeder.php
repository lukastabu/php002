<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        $fcolor=collect();
        do {
            $fcolor->push($faker->safeColorName);
            $fcolor = $fcolor->unique();
        } while ($fcolor->count() < 15);

        foreach ($fcolor as $value) {
            DB::table('colors')->insert([
                'color' => $value,
                'name' => $value,
            ]);
        }
    }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
}
