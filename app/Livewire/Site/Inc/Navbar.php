<?php

namespace App\Livewire\Site\Inc;

use App\Models\Category;
use Livewire\Component;

class Navbar extends Component
{
    public $topCategories = [
        'digital' => [
            'name' => 'File 3d',
            'icon' => 'bx bx-laptop',
            'items' => []
        ],
        'physical' => [
            'name' => 'Mô hình',
            'icon' => 'bx bx-book',
            'items' => []
        ],
        'Tin tức' => [
            'name' => 'Tin tức',
            'icon' => 'bx bx-news',
            'items' => []
        ],
    ];

    public $searchKeyword;

    public function boot () {
        $categories = Category::where('is_hidden_menu', '=', NULL)->get()->groupBy('type');
        foreach ($categories as $key => $value) {
            $this->topCategories[$key]['items'] = $value->take(10);
        }
        // dd($this->topCategories);
    }

    public function render()
    {
        return view('livewire.site.inc.navbar');
    }

    public function search()
    {
        $this->redirect(route('site.search', ['q' => $this->searchKeyword]));
    }
}
