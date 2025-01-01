@section('styles')
    <link rel="stylesheet" as="style" href="{{ asset('site/css/checkout.css') }}" />
@endsection
<section class="hero-animation mb-6">
    <div id="landingHero" class="position-relative landing-hero  mb-3">
    </div>
    <div class="container">
        <div class="col-12 col-lg-8 mx-auto text-center m-8r checkout-success-box">
            <h4>Thank You! 😇</h4>
            <p>Đơn hàng <a href="javascript:void(0)" class="text-heading fw-medium">#{{$order->code}}</a> của bạn đã đặt thành công!</p>
            <p>Chúng tôi đã gửi thông tin đơn hàng của bạn đến <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <a href="javascript:;" class="text-heading fw-medium">{{$order->email}}</a>. Nếu bạn không nhận được vui lòng kiểm tra mục thư rác hoặc liên hệ với chùng tôi.</p>
            <p><span><i class="bx bx-time-five me-1 text-heading align-top"></i> Thời gian đặt hàng:&nbsp;</span> {{ date('d/m/Y H:i')}}</p>
        </div>
    </div>
  </section>
