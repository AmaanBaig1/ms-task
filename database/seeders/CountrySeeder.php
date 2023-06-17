<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $country = $faker->country;
            DB::table('countries')->insert([
                'iso' => $faker->countryCode,
                'name' => $country,
                'nicename' => $country,
                'iso3' => $faker->countryISOAlpha3,
                'numcode' => $faker->randomNumber(3),
                'phonecode' => $faker->numerify('+##'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
