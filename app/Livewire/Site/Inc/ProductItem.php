<?php

namespace App\Livewire\Site\Inc;

use App\Livewire\Site\BaseProductComponent;
use Livewire\Component;

class ProductItem extends BaseProductComponent
{
    public $product;
    public function render()
    {
        return view('livewire.site.inc.product-item');
    }

    public function mount($product)
    {
        $this->product = $product;
    }
}
