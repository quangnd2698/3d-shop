@extends('site.layouts.app')
@section('styles')
    <link rel="stylesheet" as="style" href="{{ asset('site/css/checkout.css') }}" />
@endsection
@section('content')
<section class="hero-animation mb-6">
    <div id="landingHero" class="position-relative landing-hero  mb-3">

    </div>
    <div class="container">
        <div class="col-12 col-lg-8 mx-auto text-center m-8r checkout-success-box">
            <h4>Thank You! 😇</h4>
            <p>Đơn hàng <a href="javascript:void(0)" class="text-heading fw-medium">#1536548131</a> của bạn đã đặt thành công!</p>
            <p>Chúng tôi đã gửi thông tin đơn hàng của bạn đến <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <a href="mailto:john.doe@example.com" class="text-heading fw-medium">john.doe@example.com</a>. Nếu bạn không nhận được vui lòng kiểm tra mục thư rác hoặc liên hệ với chùng tôi.</p>
            <p><span><i class="bx bx-time-five me-1 text-heading align-top"></i> Thời gian đặt hàng:&nbsp;</span> 25/05/2020 13:35pm</p>
        </div>
    </div>
  </section>
@endsection
