@extends('site.layouts.app')
@section('styles')
    <link rel="stylesheet" as="style" href="{{ asset('site/css/checkout.css') }}" />
@endsection
@section('content')
<section class="hero-animation mb-6">
    <div id="landingHero" class="position-relative landing-hero  mb-3">

    </div>
    <div class="container">
      <div class="card px-3">
        <div class="row">
          <div class="col-lg-7 card-body border-end p-md-8">
            <h4 class="mb-2">Thanh toán</h4>
            <div class="row g-5 py-8">
              <div class="col-md col-lg-12 col-xl-6">
                <div class="form-check custom-option custom-option-basic checked">
                  <label class="form-check-label custom-option-content form-check-input-payment d-flex gap-4 align-items-center" for="customRadioVisa">
                    <input name="customRadioTemp" class="form-check-input" type="radio" value="credit-card" id="customRadioVisa" checked="">
                    <span class="custom-option-body">
                      <img src="{{asset('site/images/momo.png')}}" alt="momo" height="35" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png">
                      <span class="ms-4 fw-medium text-heading">Momo</span>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-md col-lg-12 col-xl-6">
                <div class="form-check custom-option custom-option-basic">
                  <label class="form-check-label custom-option-content form-check-input-payment d-flex gap-4 align-items-center" for="customRadioPaypal">
                    <input name="customRadioTemp" class="form-check-input" type="radio" value="paypal" id="customRadioPaypal">
                    <span class="custom-option-body">
                      <img src="{{asset('site/images/bank.png')}}" alt="bank" height="35" data-app-light-img="icons/payments/paypal-light.png" data-app-dark-img="icons/payments/paypal-dark.png">
                      <span class="ms-4 fw-medium text-heading">Ngân hàng</span>
                    </span>
                  </label>
                </div>
              </div>
            </div>
            <div class="mb-6">
                <div class="d-flex checkout-guide-container">
                    <div class="checkout-guide">
                        <div class="mt-4">
                            <ul class="list-group list-group-timeline">
                              <li class="list-group-item list-group-timeline-primary one">
                                Quét qr code bên phải </li>
                              <li class="list-group-item list-group-timeline-success two">
                                Nhập nội dung thanh toán <span>  3D store IV12314 </span>
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
                        <img src="{{asset('site/images/momo-qr.png')}}" width="250px" alt="">
                    </div>
                </div>
            </div>
            <h4 class="mb-6">Thông tin người nhận</h4>
            <form>
              <div class="row g-6">
                <div class="col-md-6">
                  <label class="form-label" for="billings-email">Email người nhận <span class="text-danger">(*)</span></label>
                  <input type="email" id="billings-email" class="form-control" placeholder="abc@gmail.com">
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="billings-password">Mật khẩu <span class="text-danger">(*)</span></label>
                  <input type="password" id="billings-password" class="form-control" placeholder="">
                  <small class="text-warning">Tài khoản mới sẽ được tạo với email và mật khẩu bạn đã nhập.</small>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="billings-email">Số điện thoại </label>
                    <input type="text" id="billings-email" class="form-control">
                </div>
                
              </div>
            </form>
           
          </div>
          <div class="col-lg-5 card-body p-md-8">
            <h4 class="mb-2">Chi tiết đơn hàng</h4>
            <div class="border rounded mb-3 bg-lighter">
              @if (!empty($carts))
              <ul class="list-unstyled">
                @foreach ($carts as $cart)
                <li class="d-flex gap-4 align-items-center py-2 mb-4">
                  <div class="flex-shrink-0">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/products/1.png" alt="google home" class="w-px-50">
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0"><a class="text-body" href="javascript:void(0)">Google - Google Home - White</a></p>
                    <p class="fw-medium mb-0">18th Nov 2021</p>
                  </div>
                  <div class="p-4 product-item-price">
                    2 x <span class="price">150.000 <sup>đ</sup></span>
                  </div>
                </li>
                @endforeach
                
                <li class="d-flex gap-4 align-items-center py-2">
                  <div class="flex-shrink-0">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/products/2.png" alt="google home" class="w-px-50">
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0"><a class="text-body" href="javascript:void(0)">Apple iPhone 11 (64GB, Black)</a></p>
                    <p class="fw-medium mb-0">20th Nov 2021</p>
                  </div>
                  <div class="p-4 product-item-price">
                    2 x <span class="price">150.000 <sup>đ</sup></span>
                  </div>
                </li>
              </ul>
              @endif
              
            </div>

            <div class="mt-5">
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-0">Tiền hàng</p>
                <h6 class="mb-0">200.000 đ</h6>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="mb-0">Phí vận chuyển</p>
                <h6 class="mb-0">0 đ</h6>
              </div>
              <hr>
              <div class="d-flex justify-content-between align-items-center mt-4 pb-1">
                <p class="mb-0">Tổng cộng</p>
                <h5 class="mb-0">200.000 đ</h5>
              </div>
              <div class="d-grid mt-5">
                <button class="btn btn-success">
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
    </div>
  </section>
@endsection
