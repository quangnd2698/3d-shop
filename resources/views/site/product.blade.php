@extends('site.layouts.app')
@section('styles')
    <link rel="stylesheet" as="style" href="{{ asset('site/css/core.css') }}" />
    <link rel="stylesheet" as="style" href="{{ asset('site/css/product.css') }}" />
    <link rel="stylesheet" as="style" href="{{ asset('site/css/comment.css') }}" />
@endsection
@section('content')
    <!-- Hero: Start -->
    <section id="hero-animation">
        <div id="landingHero" class="position-relative landing-hero  mb-3">

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
            <div class="card">
                <div class="product-header-box p-2">
                    <div class="product-gallery flex-row-reverse">
                        @include('site.product.gallary')
                    </div>
                    <div class="product-detail-info">
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
                        <div class="mt-4 d-flex">
                            <div>
                                Tình trạng: <span class="badge px-2 bg-label-success" text-capitalized="">Còn hàng</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="market-price-box">
                                <div class="original-price">
                                    <span id="price-show" class="price-show"> 220.000<sup>đ</sup></span>
                                    <span class="sub_price">243.000<sup>đ</sup></span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 product-action-btn">
                            <button class="btn btn-outline-info"><i class='bx bx-cart-add'></i>Thêm vào giỏ hàng</button>
                            <button class="btn btn-outline-success"><i class='bx bxs-credit-card'></i> Mua ngay</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="d-grid mt-3 product-detail-box mb-3">
                <div class="card p-2">
                    <div class="product-description mt-4">
                       
                        <h4>Product description</h4>
                        <div id="productDescription" class="product-details__product-description p-4" itemprop="description"><p>IRON PANTHER - The character from MARVEL, a hybrid between Black Panther and IRON MAN (FAN ART Project)</p>
                            <p><iframe width="500" height="281" src="https://www.youtube.com/embed/3HdAcjCVwKs" frameborder="0" allowfullscreen=""></iframe><br></p>
                            <p><strong>This project is a FAN ART .</strong></p>
                            <p>The model is adapted for 3D printing.</p>
                            <p>STL files can only be downloaded from <a href="http://www.sanix3d.com/">www.sanix3d.com</a></p>
                            <p>An alternative base (smaller) for this model is included, see the images.<br></p>
                            <div>
                             <div>
                              The model is presented in scale: 1:8
                             </div>
                             <div>
                              Also included are CHITUBOX files with support (for 1:8 scale)
                             </div>
                            </div>
                            <p><a href="http://www.sanix3d.com/"></a>The project also includes STL files with (repaired) support for the Lychee slicer, 1:8 scale</p>
                            <p>#IRONPANTHER #3DPrinting #STL Files #marvel #sanix3d #ironman #blackpanther #ironcollection</p></div>
                    </div>
                    <div class="mt-4">
                        <hr>
                        <h4>Đánh giá và bình luận</h4>
                        @include('site.product.comment')
                    </div>
                </div>
                <div class="w-100">
                    <div class="right-bar-products">
                        <div class="card best-product">
                            <div class="card-header">
                                <h5 class="mb-0">Sản phẩm liên quan</h5>
                            </div>
                            <div class="card-body">
                                <div class="relative-list-product">
                                    @for ($i = 0; $i < 5; $i++)
                                        @include('site.component.item-product')
                                        <hr>
                                    @endfor
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Hero: End -->
@endsection
@section('script')

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
