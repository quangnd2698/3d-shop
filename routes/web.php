<?php

use App\Livewire\HomePageComponent;
use App\Livewire\Site\CartIndex;
use App\Livewire\Site\Category;
use App\Livewire\Site\CategoryIndex;
use App\Livewire\Site\CheckoutIndex;
use App\Livewire\Site\CheckoutSuccessIndex;
use App\Livewire\Site\Login;
use App\Livewire\Site\OrderIndex;
use App\Livewire\Site\ProductIndex;
use App\Livewire\Site\Register;
use App\Livewire\Site\SearchIndex;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomePageComponent::class)->name('home');
Route::get('/login', Login::class)->name('site.login');
Route::get('/register', Register::class)->name('site.register');

Route::get('/product/{slug}', ProductIndex::class)->name('site.product');

Route::get('/cart', CartIndex::class)->name('site.cart');

Route::get('/order', OrderIndex::class)->name('site.order');

Route::get('/category/{slug}', CategoryIndex::class)->name('site.category');

Route::get('/search', SearchIndex::class)->name('site.search');

Route::get('/checkout', CheckoutIndex::class)->name('site.checkout');

Route::get('/checkout-success/{code}', CheckoutSuccessIndex::class)->name('site.checkout-success');


Route::get('/crawl-products', 'CrawlController@crawlProducts');

