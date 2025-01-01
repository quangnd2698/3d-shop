@section('styles')
    <link rel="stylesheet" as="style" href="{{ asset('site/css/core.css') }}" />
    <link rel="stylesheet" as="style" href="{{ asset('site/css/cart.css') }}" />
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
                <li class="breadcrumb-item active">Giỏ hàng</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-2 p-l">
        <div id="wizard-checkout" class="bs-stepper wizard-icons wizard-icons-example">
            <div id="checkout-cart" class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
                <div class="row">
                    <!-- Cart left -->
                    <div class="col-xl-8 mb-6 mb-xl-0 card p-6">
                        <div class="table-responsive text-nowrap">
                            <table class="table  table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Tổng</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @if (!empty($carts))
                                        @foreach ($carts as $key => $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 d-flex align-items-center">
                                                            <img src="{{ !empty($item['product']['images']) ? current($item['product']['images'])['small_image_url'] : '' }}"
                                                                alt="google home" class="w-px-100 rounded">
                                                        </div>
                                                        <div class="mt-3 ml-1">
                                                            <p class="me-3 mb-2"><a href="javascript:void(0)"
                                                                    class="fw-medium"><span class="text-heading">
                                                                        {{$item['product']['name']}}</span></a></p>
                                                            @if (!empty($item['product']['categories']))
                                                            <div
                                                                class="text-muted mb-2 d-flex flex-wrap justify-content-center justify-content-sm-start">
                                                                <span class="me-1">Danh mục:</span> <a
                                                                    href="{{route('site.category', ['slug' => end($item['product']['categories'])['slug']])}}" class="me-4">
                                                                    {{ end($item['product']['categories'])['name'] }}</a>
                                                                <span class="badge bg-label-success">Còn hàng</span>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </td>
                                                <td>{{ number_format($item['product']['sale_price'], 0, ',')}} <sup>đ</sup></td>
                                                <td style="width:100px">
                                                    <input type="number" class="form-control" wire:model="carts.{{ $key }}.quantity" wire:change="changeQuantity({{ $key }})"
                                                        min="1">
                                                </td>
                                                <td><b>{{ number_format($item['product']['sale_price'] * $item['quantity'], 0, ',')}} <sup>đ</sup></b></td>
                                                <td class="text-center"><div class="remove-cart-item" wire:click='removeCart({{$key}})'><i
                                                            class='bx bxs-trash text-danger'></i></div></td>
                                            </tr>
                                        @endforeach
                                    @else
                                    @endif
                                </tbody>
                            </table>
                        </div>

                        <!-- Wishlist -->
                        <div class="list-group mt-3 d-flex flex-row-reverse">
                            <a href="{{ route('home') }}"
                                class="list-group-item text-primary border-primary d-flex justify-content-between w-50">
                                <span class="fw-medium">Tìm kiếm thêm sản phẩm</span>
                                <i class="bx bx-sm bx-right-arrow-alt scaleX-n1-rtl mt-50"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Cart right -->
                    <div class="col-xl-4">
                        <div class=" p-6 mb-4 card">
                            <!-- Price Details -->
                            <h6>Chi tiết giỏ hàng</h6>
                            <dl class="row mb-0 text-heading">
                                <dt class="col-6 fw-normal">Tiền sản phẩm</dt>
                                <dd class="col-6 text-end">{{ number_format($this->getTotalPrice(), 0, ',')}} <sup>đ</sup></dd>

                                <dt class="col-6 fw-normal">Giảm giá</dt>
                                <dd class="col-6 text-primary text-end"><span
                                        class="badge bg-label-success ms-1">0<sup>đ</sup></span></dd>
                            </dl>

                            <hr class="mx-n6 my-6">
                            <dl class="row mb-0">
                                <dt class="col-6 text-heading">Tổng</dt>
                                <div class="col-6 fw-medium text-end text-heading mb-0 font-weight-bold">
                                    <h5>{{ number_format($this->getTotalPrice(), 0, ',')}} <sup>đ</sup></h5>
                                </div>
                            </dl>
                            <hr class="mx-n6 my-6">
                            <div class="text-center">
                                <a href="{{route('site.checkout')}}" class="btn btn-success w-100">Thanh toán</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
