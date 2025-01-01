<?php

namespace App\Livewire;

use Livewire\Component;

class HomePageComponent extends Component
{
 
    public $hiddenWiewedProducts = false;

    public function render()
    {
        return view('livewire.home-page-component')->extends('site.layouts.app')->section('content');
    }
}
