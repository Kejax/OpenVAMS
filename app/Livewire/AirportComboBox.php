<?php

namespace App\Livewire;

use App\Models\Airport;
use Livewire\Component;

class AirportComboBox extends Component
{

    public $id;
    public $name;
    public $placeholder;
    public $airports;
    public $input;

    public function render()
    {

        $this->airports = Airport::where(function($q) {
            $q->where('icao_id', 'LIKE', "%$this->input%")
                ->orWhere('name', 'LIKE', "%$this->input%");
        })->get();

            return view('livewire.airport-combo-box');

    }
}
