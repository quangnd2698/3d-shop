<?php

namespace App\Livewire\Site;

use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class SearchIndex extends Component
{

    use WithPagination;
    public $filters = [];
    public $sorts = [
        'sale_price-asc' => [
            'title' => 'Giá thấp - cao',
            'icon' => 'bx-sort-up'
        ],
        'sale_price-desc' => [
            'title' => 'Giá cao - thấp',
            'icon' => 'bx-sort-down'
        ],
        'products.id-desc' => [
            'title' => 'Mới nhất',
            'icon' => 'bx-time-five'
        ],
        'discount-desc' => [
            'title' => 'Khuyến mãi hot',
            'icon' => 'bxs-discount'
        ],
        'view_count-desc' => [
            'title' => 'Xem nhiều',
            'icon' => 'bx-show-alt'
        ],
    ];

    public $keyword;


    public function mount(Request $request)
    {
       if ($request->has('q')) {
           $this->keyword = $request['q'];
       }
    }

    public function render()
    {
        $products = $this->getProducts();
        return view('livewire.site.search-index',[
            'products' => $products,
        ])->extends('site.layouts.app');
    }

    private function getProducts()
    {
        $productQuery = Product::with(['images'])
            ->where('name', 'like', '%'.$this->keyword.'%')
            ->orWhere('description', 'like', '%'.$this->keyword.'%');

        if (isset($this->filters['sort'])) {
            $sortParams = explode('-', $this->filters['sort']);
            $productQuery->orderBy($sortParams[0], $sortParams[1]);
        }

        $products = $productQuery->paginate(20);
        return $products;
    }

    public function sortProduct($sort)
    {
        $this->filters['sort'] = $sort;
    }
}
