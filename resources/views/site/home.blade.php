@extends('site.layouts.app')
@section('styles')
<link rel="stylesheet" as="style"
href="{{asset('site/css/home.css')}}" />
@endsection
@section('content')
          <!-- Hero: Start -->
          <section id="hero-animation">
            <div id="landingHero" class="section-py landing-hero position-relative">
                <img src="{{asset('site/images/home-banner.jpg')}}"
                    alt="hero background"
                    class="position-absolute top-0 start-50 translate-middle-x object-fit-cover w-100 h-100"
                    data-speed="1" />
                <div class="container">
                    <div class="hero-text-box text-center position-relative">
                        <h1 class="text-primary hero-title display-6 fw-extrabold">
                            Welcome to Print Passion
                        </h1>
                        
                    </div>
                    @if (0)
                    
            <div class="landing-hero-blank"></div>

                    @endif
                </div>
            </div>
        </section>
        <!-- Hero: End -->

        <!-- Useful features: Start -->
        <section id="landingFeatures" class="section-py landing-features">
            <div class="container">
                <h4 class="text-center mb-1">
                    <span class="position-relative fw-extrabold z-1">Cửa hàng cung cấp sản phẩm decor, đồ trang trí hàng đầu
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/section-title-icon.png"
                            alt="laptop charging"
                            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1">
                    </span>
                
                </h4>
                <p class="text-center mb-2">Cung cấp cho bạn những sản phẩm độc đáo, chất lượng, kho file in 3d đa dạng, giá cả tốt nhất hiện nay.</p>
                <div class="d-flex">
                    <div class="features-icon-wrapper row gx-0 gy-6 g-sm-12 w-35 p-12">
                        <div class="col-lg-6 col-sm-6 text-center features-icon-box">
                            <div class="text-center mb-">
                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/laptop.svg"
                                    alt="laptop charging" />
                            </div>
                            <h5 class="mb-2">Sản phẩm chất lượng</h5>
                        </div>
                        <div class="col-lg-6 col-sm-6 text-center features-icon-box">
                            <div class="text-center mb-4">
                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/rocket.svg"
                                    alt="transition up" />
                            </div>
                            <h5 class="mb-2">Chính sách đổi trả</h5>
                        </div>
                        <div class="col-lg-6 col-sm-6 text-center features-icon-box">
                            <div class="text-center mb-4">
                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/paper.svg"
                                    alt="edit" />
                            </div>
                            <h5 class="mb-2">Giá cả hợp lý</h5>
    
                        </div>
                        <div class="col-lg-6 col-sm-6 text-center features-icon-box">
                            <div class="text-center mb-4">
                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/user.svg"
                                    alt="user" />
                            </div>
                            <h5 class="mb-2">Hỗ trợ 24/7</h5>
                        </div>
                    </div>
                    <div class="w-65">
                        <div id="heroDashboardAnimation" class="hero-animation-img">
                            <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/dashboard"
                                target="_blank">
                                <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/landing-page/hero-dashboard-light.png"
                                        alt="hero dashboard" class="animation-img" style="width: 100%;"
                                        data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                                        data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/landing-page/hero-elements-light.png"
                                        alt="hero elements" style="width: 100%;"
                                        class="position-absolute hero-elements-img animation-img top-0 start-0"
                                        data-app-light-img="front-pages/landing-page/hero-elements-light.png"
                                        data-app-dark-img="front-pages/landing-page/hero-elements-dark.png" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Useful features: End -->

        <!-- Real customers reviews: Start -->
        @include('site.home.hot-item')
        <!-- Real customers reviews: End -->

        <!-- Our great team: Start -->
        <section id="landingTeam" class="section-py landing-team">
            <div class="container">
                <div class="text-center mb-4">
                    <span class="badge bg-label-primary">Our Great Team</span>
                </div>
                <h4 class="text-center mb-1">
                    <span class="position-relative fw-extrabold z-1">Supported
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/section-title-icon.png"
                            alt="laptop charging"
                            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1">
                    </span>
                    by Real People
                </h4>
                <p class="text-center mb-md-11 pb-0 pb-xl-12">Who is behind these great-looking interfaces?</p>
                <div class="row gy-12 mt-2">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card mt-3 mt-lg-0 shadow-none">
                            <div
                                class="bg-label-primary border border-bottom-0 border-label-primary position-relative team-image-box">
                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/landing-page/team-member-1.png"
                                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                    alt="human image" />
                            </div>
                            <div class="card-body border border-top-0 border-label-primary text-center py-5">
                                <h5 class="card-title mb-0">Sophie Gilbert</h5>
                                <p class="text-muted mb-0">Project Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card mt-3 mt-lg-0 shadow-none">
                            <div
                                class="bg-label-info border border-bottom-0 border-label-info position-relative team-image-box">
                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/landing-page/team-member-2.png"
                                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                    alt="human image" />
                            </div>
                            <div class="card-body border border-top-0 border-label-info text-center py-5">
                                <h5 class="card-title mb-0">Paul Miles</h5>
                                <p class="text-muted mb-0">UI Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card mt-3 mt-lg-0 shadow-none">
                            <div
                                class="bg-label-danger border border-bottom-0 border-label-danger position-relative team-image-box">
                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/landing-page/team-member-3.png"
                                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                    alt="human image" />
                            </div>
                            <div class="card-body border border-top-0 border-label-danger text-center py-5">
                                <h5 class="card-title mb-0">Nannie Ford</h5>
                                <p class="text-muted mb-0">Development Lead</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card mt-3 mt-lg-0 shadow-none">
                            <div
                                class="bg-label-success border border-bottom-0 border-label-success position-relative team-image-box">
                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/landing-page/team-member-4.png"
                                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                    alt="human image" />
                            </div>
                            <div class="card-body border border-top-0 border-label-success text-center py-5">
                                <h5 class="card-title mb-0">Chris Watkins</h5>
                                <p class="text-muted mb-0">Marketing Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our great team: End -->

        <!-- Pricing plans: Start -->
        <section id="landingPricing" class="section-py bg-body landing-pricing">
            <div class="container">
                <div class="text-center mb-4">
                    <span class="badge bg-label-primary">Pricing Plans</span>
                </div>
                <h4 class="text-center mb-1">
                    <span class="position-relative fw-extrabold z-1">Tailored pricing plans
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/section-title-icon.png"
                            alt="laptop charging"
                            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1">
                    </span>
                    designed for you
                </h4>
                <p class="text-center pb-2 mb-7">All plans include 40+ advanced tools and features to boost your
                    product.<br />Choose the best plan to fit your needs.</p>
                <div class="text-center mb-12">
                    <div class="position-relative d-inline-block pt-3 pt-md-0">
                        <label class="switch switch-sm switch-primary me-0">
                            <span class="switch-label fs-6 text-body me-3">Pay Monthly</span>
                            <input type="checkbox" class="switch-input price-duration-toggler" checked />
                            <span class="switch-toggle-slider">
                                <span class="switch-on"></span>
                                <span class="switch-off"></span>
                            </span>
                            <span class="switch-label fs-6 text-body ms-3">Pay Annual</span>
                        </label>
                        <div class="pricing-plans-item position-absolute d-flex">
                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/pricing-plans-arrow.png"
                                alt="pricing plans arrow" class="scaleX-n1-rtl" />
                            <span class="fw-medium mt-2 ms-1"> Save 25%</span>
                        </div>
                    </div>
                </div>
                <div class="row g-6 pt-lg-5">
                    <!-- Basic Plan: Start -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-center">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/paper-airplane.png"
                                        alt="paper airplane icon" class="mb-8 pb-2" />
                                    <h4 class="mb-0">Basic</h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="price-monthly h2 text-primary fw-extrabold mb-0">$19</span>
                                        <span class="price-yearly h2 text-primary fw-extrabold mb-0 d-none">$14</span>
                                        <sub class="h6 text-muted mb-n1 ms-1">/mo</sub>
                                    </div>
                                    <div class="position-relative pt-2">
                                        <div class="price-yearly text-muted price-yearly-toggle d-none">$ 168 / year
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled pricing-list">
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Timeline
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Basic search
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Live chat widget
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Email marketing
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Custom Forms
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Traffic analytics
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Basic Support
                                        </h6>
                                    </li>
                                </ul>
                                <div class="d-grid mt-8">
                                    <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/front-pages/payment"
                                        class="btn btn-label-primary">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Basic Plan: End -->

                    <!-- Favourite Plan: Start -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="card border border-primary shadow-xl">
                            <div class="card-header">
                                <div class="text-center">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/plane.png"
                                        alt="plane icon" class="mb-8 pb-2" />
                                    <h4 class="mb-0">Team</h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="price-monthly h2 text-primary fw-extrabold mb-0">$29</span>
                                        <span class="price-yearly h2 text-primary fw-extrabold mb-0 d-none">$22</span>
                                        <sub class="h6 text-muted mb-n1 ms-1">/mo</sub>
                                    </div>
                                    <div class="position-relative pt-2">
                                        <div class="price-yearly text-muted price-yearly-toggle d-none">$ 264 / year
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled pricing-list">
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Everything in basic
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Timeline with database
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Advanced search
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Marketing automation
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Advanced chatbot
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Campaign management
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Collaboration tools
                                        </h6>
                                    </li>
                                </ul>
                                <div class="d-grid mt-8">
                                    <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/front-pages/payment"
                                        class="btn btn-primary">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Favourite Plan: End -->

                    <!-- Standard Plan: Start -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-center">
                                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/shuttle-rocket.png"
                                        alt="shuttle rocket icon" class="mb-8 pb-2" />
                                    <h4 class="mb-0">Enterprise</h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="price-monthly h2 text-primary fw-extrabold mb-0">$49</span>
                                        <span class="price-yearly h2 text-primary fw-extrabold mb-0 d-none">$37</span>
                                        <sub class="h6 text-muted mb-n1 ms-1">/mo</sub>
                                    </div>
                                    <div class="position-relative pt-2">
                                        <div class="price-yearly text-muted price-yearly-toggle d-none">$ 444 / year
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled pricing-list">
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Everything in premium
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Timeline with database
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Fuzzy search
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            A/B testing sanbox
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Custom permissions
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Social media automation
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="d-flex align-items-center mb-3">
                                            <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i
                                                    class="bx bx-check bx-12px"></i></span>
                                            Sales automation tools
                                        </h6>
                                    </li>
                                </ul>
                                <div class="d-grid mt-8">
                                    <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/front-pages/payment"
                                        class="btn btn-label-primary">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Standard Plan: End -->
                </div>
            </div>
        </section>
        <!-- Pricing plans: End -->

        <!-- Fun facts: Start -->
        <section id="landingFunFacts" class="section-py landing-fun-facts">
            <div class="container">
                <div class="row gy-6">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border border-primary shadow-none">
                            <div class="card-body text-center">
                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/laptop.svg"
                                    alt="laptop" class="mb-4" />
                                <h3 class="mb-0">7.1k+</h3>
                                <p class="fw-medium mb-0">
                                    Support Tickets<br />
                                    Resolved
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border border-success shadow-none">
                            <div class="card-body text-center">
                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/user-success.svg"
                                    alt="laptop" class="mb-4" />
                                <h3 class="mb-0">50k+</h3>
                                <p class="fw-medium mb-0">
                                    Join creatives<br />
                                    community
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border border-info shadow-none">
                            <div class="card-body text-center">
                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/diamond-info.svg"
                                    alt="laptop" class="mb-4" />
                                <h3 class="mb-0">4.8/5</h3>
                                <p class="fw-medium mb-0">
                                    Highly Rated<br />
                                    Products
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border border-warning shadow-none">
                            <div class="card-body text-center">
                                <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/check-warning.svg"
                                    alt="laptop" class="mb-4" />
                                <h3 class="mb-0">100%</h3>
                                <p class="fw-medium mb-0">
                                    Money Back<br />
                                    Guarantee
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fun facts: End -->

        <!-- FAQ: Start -->
        <section id="landingFAQ" class="section-py bg-body landing-faq">
            <div class="container">
                <div class="text-center mb-4">
                    <span class="badge bg-label-primary">FAQ</span>
                </div>
                <h4 class="text-center mb-1">Frequently asked
                    <span class="position-relative fw-extrabold z-1">questions
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/section-title-icon.png"
                            alt="laptop charging"
                            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1">
                    </span>
                </h4>
                <p class="text-center mb-12 pb-md-4">Browse through these FAQs to find answers to commonly asked
                    questions.</p>
                <div class="row gy-12 align-items-center">
                    <div class="col-lg-5">
                        <div class="text-center">
                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/landing-page/faq-boy-with-logos.png"
                                alt="faq boy with logos" class="faq-image" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="accordion" id="accordionExample">
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionOne" aria-expanded="true"
                                        aria-controls="accordionOne">
                                        Do you charge for each upgrade?
                                    </button>
                                </h2>

                                <div id="accordionOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping.
                                        Sesame snaps icing
                                        marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée
                                        pastry topping
                                        soufflé. Wafer gummi bears marshmallow pastry pie.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionTwo"
                                        aria-expanded="false" aria-controls="accordionTwo">
                                        Do I need to purchase a license for each website?
                                    </button>
                                </h2>
                                <div id="accordionTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw
                                        dragée oat cake
                                        dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart
                                        donut gummies. Jelly
                                        beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item active">
                                <h2 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionThree" aria-expanded="false"
                                        aria-controls="accordionThree">
                                        What is regular license?
                                    </button>
                                </h2>
                                <div id="accordionThree" class="accordion-collapse collapse show"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Regular license can be used for end products that do not charge users for access
                                        or service(access
                                        is free and there will be no monthly subscription fee). Single regular license
                                        can be used for
                                        single end product and end product can be used by you or your client. If you
                                        want to sell end
                                        product to multiple clients then you will need to purchase separate license for
                                        each client. The
                                        same rule applies if you want to use the same end product on multiple
                                        domains(unique setup). For
                                        more info on regular license you can check official description.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionFour"
                                        aria-expanded="false" aria-controls="accordionFour">
                                        What is extended license?
                                    </button>
                                </h2>
                                <div id="accordionFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis et aliquid
                                        quaerat possimus maxime!
                                        Mollitia reprehenderit neque repellat deleniti delectus architecto dolorum
                                        maxime, blanditiis
                                        earum ea, incidunt quam possimus cumque.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button type="button" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#accordionFive"
                                        aria-expanded="false" aria-controls="accordionFive">
                                        Which license is applicable for SASS application?
                                    </button>
                                </h2>
                                <div id="accordionFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi molestias
                                        exercitationem ab cum
                                        nemo facere voluptates veritatis quia, eveniet veniam at et repudiandae mollitia
                                        ipsam quasi
                                        labore enim architecto non!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ: End -->

        <!-- CTA: Start -->
        <section id="landingCTA" class="section-py landing-cta position-relative p-lg-0 pb-0">
            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/backgrounds/cta-bg-light.png"
                class="position-absolute bottom-0 end-0 scaleX-n1-rtl h-100 w-100 z-n1" alt="cta image"
                data-app-light-img="front-pages/backgrounds/cta-bg-light.png"
                data-app-dark-img="front-pages/backgrounds/cta-bg-dark.png" />
            <div class="container">
                <div class="row align-items-center gy-12">
                    <div class="col-lg-6 text-start text-sm-center text-lg-start">
                        <h3 class="cta-title text-primary fw-bold mb-1">Ready to Get Started?</h3>
                        <h5 class="text-body mb-8">Start your project with a 14-day free trial</h5>
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/front-pages/payment"
                            class="btn btn-lg btn-primary">Get Started</a>
                    </div>
                    <div class="col-lg-6 pt-lg-12 text-center text-lg-end">
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/landing-page/cta-dashboard.png"
                            alt="cta dashboard" class="img-fluid mt-lg-4" />
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA: End -->

        <!-- Contact Us: Start -->
        <section id="landingContact" class="section-py bg-body landing-contact">
            <div class="container">
                <div class="text-center mb-4">
                    <span class="badge bg-label-primary">Contact US</span>
                </div>
                <h4 class="text-center mb-1">
                    <span class="position-relative fw-extrabold z-1">Let's work
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/section-title-icon.png"
                            alt="laptop charging"
                            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1">
                    </span>
                    together
                </h4>
                <p class="text-center mb-12 pb-md-4">Any question or remark? just write us a message</p>
                <div class="row g-6">
                    <div class="col-lg-5">
                        <div class="contact-img-box position-relative border p-2 h-100">
                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/icons/contact-border.png"
                                alt="contact border"
                                class="contact-border-img position-absolute d-none d-lg-block scaleX-n1-rtl" />
                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/front-pages/landing-page/contact-customer-service.png"
                                alt="contact customer service" class="contact-img w-100 scaleX-n1-rtl" />
                            <div class="p-4 pb-2">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="d-flex align-items-center">
                                            <div class="badge bg-label-primary rounded p-1_5 me-3"><i
                                                    class="bx bx-envelope bx-lg"></i></div>
                                            <div>
                                                <p class="mb-0">Email</p>
                                                <h6 class="mb-0"><a href="mailto:example@gmail.com"
                                                        class="text-heading">example@gmail.com</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="d-flex align-items-center">
                                            <div class="badge bg-label-success rounded p-1_5 me-3"><i
                                                    class="bx bx-phone-call bx-lg"></i></div>
                                            <div>
                                                <p class="mb-0">Phone</p>
                                                <h6 class="mb-0"><a href="tel:+1234-568-963"
                                                        class="text-heading">+1234 568 963</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="mb-2">Send a message</h4>
                                <p class="mb-6">
                                    If you would like to discuss anything related to payment, account, licensing,<br
                                        class="d-none d-lg-block" />
                                    partnerships, or have pre-sales questions, you’re at the right place.
                                </p>
                                <form>
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <label class="form-label" for="contact-form-fullname">Full Name</label>
                                            <input type="text" class="form-control" id="contact-form-fullname"
                                                placeholder="john" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="contact-form-email">Email</label>
                                            <input type="text" id="contact-form-email" class="form-control"
                                                placeholder="johndoe@gmail.com" />
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="contact-form-message">Message</label>
                                            <textarea id="contact-form-message" class="form-control" rows="11" placeholder="Write a message"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Send inquiry</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection