<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTypeSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $type = ['parttime', 'fulltime'];
        for ($i = 0; $i < 2; $i++) {

            DB::table('job_types')->insert([
                'title' => $faker->randomElement($type),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
