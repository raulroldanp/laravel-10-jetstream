<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Chirp;
use App\Models\Product;
use App\Models\Post;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
use App\Models\StateCity;
use App\Models\Company;
use App\Models\PostBox;
use App\Models\PostVote;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /* -- Laravel 10 Examples  */

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com'
        ]);

        //Chirper: Laravel 10 Bootcamp
        Chirp::factory()->for($user)->count(2)->create();
        Chirp::factory()->count(2)->create();

        //Products: Livewire CRUD
        Product::factory()->count(4)->create();

        /* -- Livewire Kit Examples  */
        
        //Auto-Generate Slug from Title
        Post::factory()->count(3)->create();
        Post::factory()->create([
            'title' => 'Learning Laravel 10 and Livewire'
        ]);

        //Two Level Parent-Child Dependent Dropdowns        
        $country = Country::factory()->create([
            'name' => 'Spain',
            'short_code' => 'ES'
        ]);
        City::factory()->for($country)->create([
            'name' => 'Madrid'
        ]);
        City::factory()->for($country)->create([
            'name' => 'Barcelona'
        ]);

        Country::factory()->hasCities(2)->count(2)->create();

        //Three Level Parent-Child Dependent Dropdowns
        State::factory()->forCountry([
            'name' => 'United States',
            'short_code' => 'US'
        ])->has(
            StateCity::factory()->hasCompanies(2)->count(3)
        )->count(5)->create();

        //Upvoting/Downvoting Posts with validation against repeating votes
        PostBox::factory()->hasVotes(9)->count(2)->create();
        
    }
}
