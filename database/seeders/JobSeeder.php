<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            $userIds = [1, 2, 3];
            $tag = ['PHP', 'Laravel', 'wordpress', 'Shopify', 'Joomla'];
            $type = [1, 2];
            $randomValues = Arr::random($tag, '3');
            DB::table('jobs')->insert([
                'user_id' => $faker->randomElement($userIds),
                'type' => $faker->randomElement($type),
                'title' => $faker->jobTitle,
                'rate' => $faker->randomFloat( 0,10, 50),
                'description' => $faker->sentence,
                'tages' => implode(', ', $randomValues),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}


