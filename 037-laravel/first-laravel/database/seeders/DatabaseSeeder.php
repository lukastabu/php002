<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

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

        $animals = ['cat', 'dog', 'mouse', 'sheep', 'deer', 'shark', 'bear', 'cow', 'pig', 'bull', 'elephant'];
            
        foreach (range(1, 99) as $_) {
            DB::table('animals')->insert([
                'name' => $animals[rand(0, count($animals)-1)],
                'height' => rand(20, 300),
                'color_id' => rand(1, 15),
            ]);
        }

        DB::table('users')->insert([
            'name' => 'algis',
            'email' => 'algis'.'@gmail.com',
            'password' => Hash::make('algis'), 
        ]);

        DB::table('users')->insert([
            'name' => 'bronius',
            'email' => 'bronius'.'@gmail.com',
            'password' => Hash::make('bronius'),
            'role' => 5,
        ]);

    }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
}