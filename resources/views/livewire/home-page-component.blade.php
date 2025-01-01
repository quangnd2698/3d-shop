@section('styles')
<link rel="stylesheet" as="style"
href="{{asset('site/css/home.css')}}" />
<link rel="stylesheet" as="style"
href="{{asset('site/css/product-item.css')}}" />
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<style>
   .swiper {
      /* width: 100vw; */
      height: 500px;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      color: black !important;
      border-radius: 0 0 50px 50px  !important;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 0 0 50px 50px  !important;
    }
</style>
@endsection
    <div>
        <section id="hero-animation">
            <div id="landingHero" class="section-py landing-hero position-relative  mb-3">
                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/backgrounds/hero-bg.png"
                    alt="hero background"
                    class="position-absolute top-0 start-50 translate-middle-x object-fit-cover w-100 h-100"
                    data-speed="1" />
                <div class="" style="margin-top: 70px">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <img src="{{asset('site/images/thundercats.jpg')}}" alt="feature image" class="img-fluid" />
                              </div>
                              <div class="swiper-slide">
                                <img src="{{asset('site/images/home-banner.jpg')}}" alt="feature image" class="img-fluid" />
                              </div>
                              <div class="swiper-slide">
                                <img src="{{asset('site/images/home-banner.png')}}" alt="feature image" class="img-fluid" />
                              </div>
                              <div class="swiper-slide">
                                <img src="{{asset('site/images/thundercats.jpg')}}" alt="feature image" class="img-fluid" />
                              </div>
                            
                            </div>
                          </div>
                        
                    @if (0)
                    
            <div class="landing-hero-blank"></div>

                    @endif
                </div>
            </div>
        </section>
        <!-- Hero: End -->
        <!-- Useful features: End -->

        <!-- Real customers reviews: Start -->
        <livewire:site.home.hot-product-component />
        <!-- Real customers reviews: End -->
        <livewire:site.home.best-product />

        <!-- Our great team: Start -->
        @include('site.home.our-team')
        <!-- Our great team: End -->


        <!-- CTA: Start -->
        <section id="landingCTA" class="section-py landing-cta position-relative p-lg-0 pb-0">
            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/backgrounds/cta-bg-light.png"
                class="position-absolute bottom-0 end-0 scaleX-n1-rtl h-100 w-100 z-n1" alt="cta image"
                data-app-light-img="front-pages/backgrounds/cta-bg-light.png"
                data-app-dark-img="front-pages/backgrounds/cta-bg-dark.png" />
            <div class="container">
                <div class="row align-items-center gy-12">
                    <div class="col-lg-6 text-sm-center text-lg-start product-idea">
                        <h3 class="cta-title text-primary fw-bold mb-1">Sản phẩm theo ý tưởng của bạn</h3>
                        <h5 class="text-body mb-8">Chúng tôi có thể biến ý tưởng trong đầu của bạn thành sự thật, liên hệ ngay với chúng tôi nếu bạn muốn tự order sản phẩm riêng của mình.</h5>
                        <a  href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/front-pages/payment"
                            class="btn btn-lg btn-primary">Liên hệ ngay</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <img src="{{asset('site/images/home-banner-5.png')}}"
                            alt="cta dashboard" class="img-fluid mt-lg-4" />
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA: End -->

        <!-- Contact Us: Start -->
        <section id="landingContact" class="section-py bg-body landing-contact">

        </section>
</div>
          <!-- Hero: Start -->
@section('script')
        {{-- <script>
            $('.carousel').carousel({
                interval: 2000
            })
        </script> --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script>
            const swiper = new Swiper('.mySwiper', {
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
            });
        </script>

@endsection