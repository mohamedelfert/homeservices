<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChangeLocation extends Component
{
    public $streetNumber;
    public $routes;
    public $city;

    public $state;
    public $country;
    public $zipCode;

    public function changeLocation()
    {
        session()->put('streetNumber',$this->streetNumber);
        session()->put('routes',$this->routes);
        session()->put('city',$this->city);
        session()->put('state',$this->state);
        session()->put('country',$this->country);
        session()->put('zipCode',$this->zipCode);
        session()->flash('message','Location changed successfully');
        $this->emitTo('location','refreshComponent');
    }

    public function render()
    {
        return view('livewire.change-location')->layout('layouts.base');
    }
}
