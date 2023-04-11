<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'id' => 1,
                'name' => 'Spain',
                'short_code' => 'es',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Germany',
                'short_code' => 'de',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'United Kingdom',
                'short_code' => 'gb',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'United States',
                'short_code' => 'us',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Country::insert($countries);
    }
}
