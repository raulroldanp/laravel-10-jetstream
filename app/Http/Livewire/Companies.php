<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\State;
use App\Models\StateCity;
use App\Models\Company;

class Companies extends Component
{
    public $countries, $states, $stateCities;
    public $name, $selectedCountry = null, $selectedState = null, $selectedStateCity = null; 

    protected $rules = [
        'name' => 'required',
        'selectedStateCity' => 'required'
    ];
    
    public function mount() {
        $this->countries = Country::all();
        $this->states = collect();
        $this->stateCities = collect();
    }

    public function render()
    {
        return view('livewire.companies', [
            'companies' => Company::with('stateCity.state.country')->latest()->take(5)->get()
        ]);
    }

    public function updatedSelectedCountry($value) {
        $this->states = State::where('country_id', $value)->get();
        $this->selectedState = null;
    }

    public function updatedSelectedState($value) {
        if (!is_null($value)) {
            $this->stateCities = StateCity::where('state_id', $value)->get();
            $this->selectedStateCity = null;
        }
    }

    public function storeCompany() {
        $this->validate();

        Company::create([
            'name' => $this->name,
            'state_city_id' => $this->selectedStateCity,
        ]);

        $this->name = '';
        $this->selectedCountry = null;
        $this->selectedState = null;
        $this->selectedCity = null;
        $this->states = collect();
        $this->cities = collect();
    }
}
