<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\City;

use App\Models\State;

class Statecity extends Component
{
    public $states;

    public $cities;

    public $selectedState = null;

    public $selectedCity =null;

    public function mount()
    {
        $this->states = State::all();

        $this->cities = collect();
    }

    public function render()
    {
        return view('livewire.statecity');
    }

    public function updatedSelectedState($state)
    {
        if (!is_null($state)) {
            $this->cities = City::where('states_id', $state)->get();
        }
    }
}
