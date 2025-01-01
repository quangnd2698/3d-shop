<?php

namespace App\Livewire\Site;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends BaseProductComponent
{
    public $product;
    public $relatedProducts;

    public function render()
    {
        return view('livewire.site.product-index')->extends('site.layouts.app');
    }

    public function mount($slug)
    {
        $this->product = Product::with(['images', 'categories'])->where('slug', $slug)->where('status', 'ACTIVE')->first();
        if (!$this->product) {
            abort(404);
        }
        $this->product->increment('view_count');
        $this->relatedProducts = $this->getRelatedProducts($this->product);
        
    }
    
    private function getRelatedProducts($product)
    {
        $relatedProducts = Product::with(['images', 'categories'])->whereHas('categories', function ($query) use ($product) {
            $query->whereIn('category_id', $product->categories->pluck('id'));
        })->where('id', '!=', $product->id)->where('status', 'ACTIVE')->limit(4)->get();
        return $relatedProducts;
    }
}
