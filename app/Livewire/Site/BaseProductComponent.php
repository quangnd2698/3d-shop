<?php

namespace App\Livewire\Site;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BaseProductComponent extends BaseComponent
{
    public function addToCart($productId, $quantity)
    {

        $this->alert('success', 'Đã thêm sản phẩm vào giỏ hàng!', [
            'timer' => 1500,
        ]);
        // if (Auth::check()) {
            $cart = Cart::where('user_id', Auth::id())
                ->where('product_id', $productId)
                ->first();
            if ($cart) {
                $cart->update([
                    'quantity' => $cart->quantity + $quantity
                ]);
            } else {
                Cart::create([
                    'user_id' => Auth::id(),
                    'product_id' => $productId,
                    'quantity' => $quantity
                ]);
            }

        // } else {
        //     // return redirect()->route('login');
        //     // $this->addToCartForGuest($product, $quantity);
        // }
        $this->skipRender();
    }
}
