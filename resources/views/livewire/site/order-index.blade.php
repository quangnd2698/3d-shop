@section('styles')
    <link rel="stylesheet" as="style" href="{{ asset('site/css/core.css') }}" />
    <link rel="stylesheet" as="style" href="{{ asset('site/css/order.css') }}" />
@endsection
<section id="hero-animation">
    <div id="landingHero" class="position-relative landing-hero  mb-3">

    </div>

    <div class="container mt-2 p-l">
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Đơn hàng</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-2 p-l mb-6">
        <div class="card">
            <h5 class="card-header">Danh sách đơn hàng</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-sort table-processed">
                    <thead>
                        <tr>
                            <th style="width: 20px;">STT</th>
                            <th style="cursor: pointer;">Mã đơn hàng</th>
                            <th class="runtime-sort" style="cursor: pointer;">Sản phẩm</th>
                            <th style="cursor: pointer;">Giá tiền</th>
                            <th>Trạng thái</th>
                            <th class="runtime-sort" style="cursor: pointer;">Ngày tạo</th>
                            <th class="runtime-sort" style="cursor: pointer;"></th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if ($orders->count() > 0)
                            @foreach ($orders as $key => $order)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><a href="http://">#{{ $order->code }}</a></td>
                                    <td>
                                        <ul class="list-unstyled align-items-center mb-0">
                                            @foreach ($order->items as $orderItem)
                                                <li class="product-item-order"
                                                    data-bs-original-title="Lilian Fuller">
                                                    <img src="{{ !empty($orderItem->product->images) ? $orderItem->product->images[0]->small_image_url : '' }}"
                                                        alt="Avatar" class="rounded">
                                                        <span>{{$orderItem->product->name}}</span> <span class="text-bold"> x {{$orderItem->quantity}}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>{{ number_format($order->amount, 0, ',')}} VNĐ</td>
                                    <td><span class="badge px-2 {{!empty($classStatuses[$order->status]) ? $classStatuses[$order->status] : 'bg-label-primary' }}">
                                        {{ !empty($statuses[$order->status]) ? $statuses[$order->status] : ''}}
                                        </span>
                                    </td>
                                    <td>{{ date('d-m-Y H:i', strtotime($order->created_at)) }}</td>
                                    <td>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center">
                                    <div style="min-height: 200px; display: flex; align-items: center; justify-content: center;">
                                        Bạn chưa có đơn hàng nào
                                    </div>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
