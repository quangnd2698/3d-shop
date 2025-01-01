<?php

namespace App\Livewire\Site\Inc;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class ListProduct extends Component
{
    #[Reactive] 
    public $products;

    public function mount($products)
    {
        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.site.inc.list-product');
    }
}
