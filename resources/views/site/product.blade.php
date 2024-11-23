@extends('site.layouts.app')
@section('styles')
    <link rel="stylesheet" as="style" href="{{ asset('site/css/core.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" as="style" href="{{ asset('site/css/product.css') }}" />
@endsection
@section('content')
    <!-- Hero: Start -->
    <section id="hero-animation">
        <div id="landingHero" class="position-relative mt-2 landing-hero  mb-3">

        </div>

        <div class="container mt-2 p-l">
            <nav aria-label="breadcrumb" class="mt-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Mô hình</a>
                    </li>
                    <li class="breadcrumb-item active">Green Lantern</li>
                </ol>
            </nav>
            <div class="d-flex">
                <div class="w-50 product-gallery">
                    @include('site.product.gallary')
                </div>
                <div class="w-50 product-detail-info">
                    <h3>Green Lantern</h3>

                    <div class="mt-2 d-flex">
                        <div>
                            Danh mục: <a href="javascript:void(0);" class="ml-1">Mô hình</a>
                        </div>
                        <div class="ml-2 d-flex product-rating">
                            <span>Đánh giá:</span>
                            <span class="text-warning d-flex ml-1">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                (20)
                            </span>
                        </div>

                        
                    </div>
                    <div class="mt-2">
                        <div class="market-price-box">
                            <div class="original-price"> <span id="price-show" class="price-show">
                                    220.000<sup>đ</sup></span> </div>
                            <dell id="sale-price-show" class="market-price"> 243.000<sup>đ</sup></dell>
                            <div class="save-price" style="display: block;"> <span>Tiết kiệm</span> <span
                                    style="font-size: 17px; color: #ff0000; padding-top: 7px;"> <span
                                        id="sale_percent">9</span>% </span> (<span
                                    id="sale_value">23.000<sup>đ</sup></span>) </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Hero: End -->
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
@endsection
