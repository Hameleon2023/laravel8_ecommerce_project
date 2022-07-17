<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.home-component')->extends('layouts.base')->section('content');
    }
}
