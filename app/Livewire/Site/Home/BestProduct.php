<?php

namespace App\Livewire\Site\Home;

use App\Models\Product;
use Livewire\Component;

class BestProduct extends Component
{

    public $products;
    public function mount()
    {
        $this->products = Product::with(['images'])->OrderBy('sold', 'DESC')->limit(10)->get();
    }

    public function render()
    {
        return view('livewire.site.home.best-product');
    }
}
