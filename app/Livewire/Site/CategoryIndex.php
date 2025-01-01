<?php

namespace App\Livewire\Site;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryIndex extends Component
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

    public $category;

    public function mount($slug)
    {
        $this->category = Category::where('slug', $slug)->first();
        if (!$this->category) {
            abort(404);
        }
    }

    public function render()
    {
        $products = $this->getProducts();
        return view('livewire.site.category-index',[
            'products' => $products,
        ])->extends('site.layouts.app');
    }

    private function getProducts()
    {
        $productQuery = Product::with(['images'])
            ->join('product_n_category', 'products.id', '=', 'product_n_category.product_id')
            ->where('product_n_category.category_id', $this->category->id);

        if (isset($this->filters['sort'])) {
            $sortParams = explode('-', $this->filters['sort']);
            $productQuery->orderBy($sortParams[0], $sortParams[1]);
        }

        $products = $productQuery->select('products.*')->paginate(20);
        return $products;
    }

    public function sortProduct($sort)
    {
        $this->filters['sort'] = $sort;
    }
}
