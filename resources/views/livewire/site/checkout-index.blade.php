@section('styles')
    <link rel="stylesheet" as="style" href="{{ asset('site/css/checkout.css') }}" />
@endsection
<section class="hero-animation mb-6">
    <div id="landingHero" class="position-relative landing-hero  mb-3">

    </div>
    <div class="container">
        @if (!empty($carts))
        <div class="card px-3">
            <div class="row">
                <div class="col-lg-7 card-body border-end p-md-8">
                    <h4 class="mb-2">Thanh toán</h4>
                    <div class="row g-5 py-8">
                        <div class="col-md col-lg-12 col-xl-6">
                            <div class="form-check custom-option custom-option-basic {{ $paymentMethod == 'MOMO' ? 'checked' : '' }}">
                                <label
                                    class="form-check-label custom-option-content form-check-input-payment d-flex gap-4 align-items-center"
                                    for="customRadioVisa" wire:click="$set('paymentMethod', 'MOMO')">
                                    <input name="customRadioTemp" class="form-check-input" type="radio"
                                        value="credit-card" id="customRadioVisa" checked="">
                                    <span class="custom-option-body">
                                        <img src="{{ asset('site/images/momo.png') }}" alt="momo" height="35"
                                            data-app-light-img="icons/payments/visa-light.png"
                                            data-app-dark-img="icons/payments/visa-dark.png">
                                        <span class="ms-4 fw-medium text-heading">Momo</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md col-lg-12 col-xl-6">
                            <div class="form-check custom-option custom-option-basic {{ $paymentMethod == 'BANK' ? 'checked' : '' }}">
                                <label
                                    class="form-check-label custom-option-content form-check-input-payment d-flex gap-4 align-items-center"
                                    for="customRadioPaypal" wire:click="$set('paymentMethod', 'BANK')">
                                    <input name="customRadioTemp" class="form-check-input" type="radio" value="paypal"
                                        id="customRadioPaypal">
                                    <span class="custom-option-body">
                                        <img src="{{ asset('site/images/bank.png') }}" alt="bank" height="35"
                                            data-app-light-img="icons/payments/paypal-light.png"
                                            data-app-dark-img="icons/payments/paypal-dark.png">
                                        <span class="ms-4 fw-medium text-heading">Ngân hàng</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        @if ($paymentMethod == 'MOMO')
                        <div class="d-flex checkout-guide-container">
                            <div class="checkout-guide">
                                <div class="mt-4">
                                    <ul class="list-group list-group-timeline">
                                        <li class="list-group-item list-group-timeline-primary one">
                                            Quét qr code bên phải </li>
                                        <li class="list-group-item list-group-timeline-success two">
                                            Nhập nội dung thanh toán <span> 3D store IV12314 </span>
                                        </li>
                                        <li class="list-group-item list-group-timeline-warning three">
                                            Tiến hành thanh toán trên momo
                                        </li>
                                        <li class="list-group-item list-group-timeline-info four">
                                            Bấm xác nhận đặt hàng
                                        </li>
                                        <li class="list-group-item list-group-timeline-danger five">
                                            Kiểm tra đơn hàng trong lịch sử mua hàng
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="checkout-guide-qrcode">
                                <img src="{{ asset('site/images/momo-qr.png') }}" width="250px" alt="">
                            </div>
                        </div>
                            
                        @else
                        <div class="d-flex checkout-guide-container">
                            <div class="checkout-guide">
                                <div class="mt-4">
                                    <ul class="list-group list-group-timeline">
                                        <li class="list-group-item list-group-timeline-primary one">
                                            Quét qr code bên phải </li>
                                        <li class="list-group-item list-group-timeline-success two">
                                            Nhập nội dung thanh toán <span> 3D store IV12314 </span>
                                        </li>
                                        <li class="list-group-item list-group-timeline-warning three">
                                            Tiến hành thanh toán trên app ngân hàng của bạn
                                        </li>
                                        <li class="list-group-item list-group-timeline-info four">
                                            Bấm xác nhận đặt hàng
                                        </li>
                                        <li class="list-group-item list-group-timeline-danger five">
                                            Kiểm tra đơn hàng trong lịch sử mua hàng
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="checkout-guide-qrcode">
                                <img src="{{ asset('site/images/bank-qr.jpg') }}" width="250px" alt="">
                            </div>
                        </div>
                        @endif
                        
                        
                    </div>
                    <h4 class="mb-6">Thông tin người nhận</h4>
                    <form>
                        <div class="row g-6">
                            <div class="col-md-6">
                                <label class="form-label" for="billings-email">Email người nhận <span
                                        class="text-danger">(*)</span></label>
                                <input type="email" wire:model='email' class="form-control {{!empty($errors['email']) ? 'is-invalid' : ''}}"
                                    placeholder="abc@gmail.com">
                                    @if (!empty($errors['email']))
                                        <small class="text-danger">{{!empty($errors['email']) ? $errors['email'][0] : ''}}</small>
                                    @endif
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="billings-password">Mật khẩu <span
                                        class="text-danger">(*)</span></label>
                                <input type="password" id="billings-password" class="form-control {{!empty($errors['password']) ? 'is-invalid' : ''}}" placeholder="" wire:model='password'>
                                @if (!empty($errors['password']))
                                    <small class="text-danger">{{!empty($errors['password']) ? $errors['password'][0] : ''}}</small>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="billings-email">Số điện thoại </label>
                                <input type="text" id="billings-email" class="form-control {{!empty($errors['phone']) ? 'is-invalid' : ''}}" wire:model='phone'
                                    placeholder="0123456789">
                                @if (!empty($errors['phone']))
                                    <small class="text-danger">{{!empty($errors['phone']) ? $errors['phone'][0] : ''}}</small>
                                @endif
                            </div>

                        </div>
                    </form>

                </div>
                <div class="col-lg-5 card-body p-md-8">
                    <h4 class="mb-2">Chi tiết đơn hàng</h4>
                    <div class="border rounded mb-3 bg-lighter">
                        <ul class="list-unstyled">
                            @foreach ($carts as $cart)
                                <li class="d-flex gap-4 align-items-center p-2 mb-4">
                                <div class="flex-shrink-0 ">
                                    <img src="{{ !empty($cart['product']['images']) ? current($cart['product']['images'])['small_image_url'] : '' }}" alt="google home" class="w-px-50 rounded">
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0"><a class="text-body" href="javascript:void(0)">{{$cart['product']['name']}}</a></p>
                                    @if (!empty($cart['product']['categories']))
                                    <a class="fw-medium mb-0 text-primary"> {{ end($cart['product']['categories'])['name'] }}</a>
                                    @endif
                                </div>
                                <div class="p-4 product-item-price">
                                    {{$cart['quantity']}} x <span class="price">{{ number_format($cart['product']['sale_price'], 0, ',')}} <sup>đ</sup></span>
                                </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mt-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-0">Tiền hàng</p>
                            <h6 class="mb-0">{{ number_format($this->getTotalPrice(), 0, ',')}} </h6>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <p class="mb-0">Phí vận chuyển</p>
                            <h6 class="mb-0">0 đ</h6>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center mt-4 pb-1">
                            <p class="mb-0">Tổng cộng</p>
                            <h5 class="mb-0">{{ number_format($this->getTotalPrice(), 0, ',')}} </h5>
                        </div>
                        <div class="d-grid mt-5">
                            <button class="btn btn-success" wire:click="checkoutOrder()">
                                <span class="me-2">Tiến hành thanh toán</span>
                                <i class="bx bx-right-arrow-alt scaleX-n1-rtl"></i>
                            </button>
                        </div>

                        <p class="mt-8">
                            Chúng tôi sẽ gửi thông tin đơn hàng đến email của bạn sau khi bạn thanh toán thành công.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
