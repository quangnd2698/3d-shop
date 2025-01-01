<?php

namespace App\Livewire\Site;

use App\Models\Order;
use Livewire\Component;

class OrderIndex extends Component
{

    public $orders;

    public $statuses = [
        'PENDING' => 'Chờ xác nhận',
        'FINISHED' => 'Thành công',
        'CANCELED' => 'Đã hủy'
    ];

    public $classStatuses = [
        'PENDING' => 'bg-label-warning',
        'FINISHED' => 'bg-label-success',
        'CANCELED' => 'bg-label-danger'
    ];

    public $paymentStatuses = [
        'PAID' => 'Đã thanh toán',
        'REFUNDED' => 'Đã hoàn tiền'
    ];

    public function mount()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $this->orders = Order::with(['items', 'items.product', 'items.product.images'])->where('user_id', auth()->id())->orderBy('id', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.site.order-index')->extends('site.layouts.app');
    }
}
