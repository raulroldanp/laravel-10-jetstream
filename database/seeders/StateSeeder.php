<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        State::factory()->count(5)->create();

        /* $states = [
            [
                'id' => 1,
                'code' => 'AZ',
                'name' => 'Arizona'
            ],
            [
                'id' => 2,
                'code' => 'CA',
                'name' => 'California'
            ],
            [
                'id' => 3,
                'code' => 'DC',
                'name' => 'District of Columbia'
            ],
            [
                'id' => 4,
                'code' => 'FL',
                'name' => 'Florida'
            ],
            [
                'id' => 5,
                'code' => 'HI',
                'name' => 'Hawaii'
            ]
        ];

        foreach ($states as &$state) {
            $state['country_id'] = 4; // United States
            $state['created_at'] = now();
            $state['updated_at'] = now();
        }

        State::insert($states); */
    }
}
