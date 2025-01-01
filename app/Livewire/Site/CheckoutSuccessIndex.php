<?php

namespace App\Livewire\Site;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CheckoutSuccessIndex extends Component
{

    public $code;
    public $order;

    public function mount($code)
    {
        $this->code = $code;
        $this->order = Order::where('code', $code)->where('user_id', Auth::id())->first();
        if (!$this->order) {
            return redirect()->route('home');
        }
    }

    public function render()
    {
        return view('livewire.site.checkout-success-index')->extends('site.layouts.app');
    }
}
