<?php

namespace App\Livewire\Site;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartIndex extends BaseComponent
{
    public $carts;
    public function mount()
    {
        $this->carts = Cart::with(['product', 'product.images', 'product.categories'])->where('user_id', Auth::id())->get()->toArray();
    }

    public function render()
    {

        return view('livewire.site.cart-index')->extends('site.layouts.app');
    }

    public function getTotalProductPrice()
    {
        $totalPrice = 0;
        foreach ($this->carts as $cart) {
            $totalPrice += $cart['product']['sale_price'];
        }
        return $totalPrice;
    }

    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->carts as $cart) {
            $totalPrice += $cart['product']['sale_price'] * $cart['quantity'];
        }
        return $totalPrice;
    }


    public function removeCart($key)
    {
        $cart = $this->carts[$key];
        Cart::destroy($cart['id']);
        unset($this->carts[$key]);
        $this->alert('success', 'Cart removed successfully');
    }

    public function changeQuantity($key)
    {
        $cart = $this->carts[$key];
        $cartModel = Cart::find($cart['id']);
        $cartModel->quantity = $cart['quantity'];
        $cartModel->save();
    }

}
