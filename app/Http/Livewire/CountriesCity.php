<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\City;

class CountriesCity extends Component
{

    public $countries, $cities, $country, $city;

    public function mount() {
        $this->countries = Country::all();
        $this->cities = collect();
    }

    public function render()
    {
        return view('livewire.countries-city');
    }

    public function updatedCountry($value) {
        $this->cities = City::where('country_id', $value)->get();
        $this->city = $this->cities->first()->id ?? null;
    }
}
