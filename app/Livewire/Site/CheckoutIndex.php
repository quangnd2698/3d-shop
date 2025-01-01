<?php

namespace App\Livewire\Site;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class CheckoutIndex extends BaseComponent
{

    public $carts;
    public $paymentMethod = 'MOMO';
    public $email;
    public $phone;
    public $password;
    public $errors = [];

    public function mount()
    {
        $this->carts = Cart::with(['product', 'product.images', 'product.categories'])->where('user_id', Auth::id())->get()->toArray();
    }

    public function render()
    {
        return view('livewire.site.checkout-index')->extends('site.layouts.app');
    }

    
    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->carts as $cart) {
            $totalPrice += $cart['product']['sale_price'] * $cart['quantity'];
        }
        return $totalPrice;
    }

    public function checkoutOrder()
    {
        $this->errors = [];
        $data = [
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => $this->password,
            'payment_method' => $this->paymentMethod,
            'total_price' => $this->getTotalPrice(),
            'status' => 'PENDING',
            'user_id' => Auth::id(),
        ];
        foreach ($this->carts as $cart) {
            $data['items'][] = [
                'product_id' => $cart['product_id'],
                'quantity' => $cart['quantity'],
                'price' => $cart['product']['sale_price'],
            ];
        }
        $validate = Validator::make($data, [
            'email' => 'required|email',
            'phone' => 'nullable',
            'password' => 'required',
            'payment_method' => 'required',
            'total_price' => 'required',
            'status' => 'required',
            'items' => 'required|array',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.price' => 'required',
        ], [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu không được để trống',
            'payment_method.required' => 'Phương thức thanh toán không được để trống',
            'total_price.required' => 'Tổng tiền không được để trống',
            'status.required' => 'Trạng thái không được để trống',
            'items.required' => 'Danh sách sản phẩm không được để trống',
        ]);
        $data['amount'] = $data['total_price'];
        $data['cost'] = $data['total_price'];
        $data['code'] = 'HC' . 1 . date('Ym') . rand(100, 999);
        if ($validate->fails()) {
            $this->errors = $validate->errors()->toArray();
            return;
        } else {
            $order = Order::create($data);
            if (!$order) {
                $this->errors[] = 'Có lỗi xảy ra, vui lòng thử lại';
                return;
            }
            foreach ($data['items'] as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item['product_id'],
                    'quantity' => $item['quantity'],
                    'total_price' => $item['price'] * $item['quantity'],
                ]);
            }
            $this->alert('success', 'Đặt hàng thành công', [
                'position' =>  'top-end',
                'timer' =>  3000,
                'toast' =>  true,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  false,
            ]);
            return redirect()->route('site.checkout.success', ['code' => $order->code]);
            Cart::where('user_id', Auth::id())->delete();
            $this->emit('checkoutOrder', $this->paymentMethod);
        }

    }

}
