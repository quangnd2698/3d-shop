@section('styles')
    <link rel="stylesheet" as="style" href="{{ asset('site/css/core.css') }}" />
    <link rel="stylesheet" as="style" href="{{ asset('site/css/product.css') }}" />
    <link rel="stylesheet" as="style" href="{{ asset('site/css/comment.css') }}" />
@endsection
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
                    @if (!empty($product->categories))
                        @foreach ($product->categories as $key => $category)

                            
                            @if($key == ($product->categories->count() - 1))
                                <li class="breadcrumb-item active">{{$category->name}}</li>
                            @else
                            <li class="breadcrumb-item">
                                <a href="{{route('site.category', ['slug' => $category->slug])}}">{{$category->name}}</a>
                            </li>
                            @endif
                        
                        @endforeach
                    @endif
                    
                </ol>
            </nav>
            <div class="card">
                <div class="product-header-box p-2">
                    <div class="product-gallery flex-row-reverse">
                        @include('site.product.gallary', ['images' => $product->images])
                    </div>
                    <div class="product-detail-info">
                        <h3>{{ $product->name }}</h3>
    
                        <div class="mt-2 d-flex">
                            <div>
                                Danh mục: 
                                @if (!empty($product->categories))
                                    <a href="{{route('site.category', ['slug' => $product->categories->last()->slug])}}" class="ml-1">{{$product->categories->last()->name}}</a>
                                @endif
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
                                    <span id="price-show" class="price-show"> {{ number_format($product->sale_price, 0, ',') }}<sup>đ</sup></span>
                                    <span class="sub_price">{{ number_format($product->sale_price + 20000, 0, ',') }}<sup>đ</sup></span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 product-action-btn">
                            <button class="btn btn-outline-info" wire:click="addToCart('{{$product->id}}', 1)"><i class='bx bx-cart-add'></i>Thêm vào giỏ hàng</button>
                            <button class="btn btn-outline-success"><i class='bx bxs-credit-card'></i> Mua ngay</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="d-grid mt-3 product-detail-box mb-3">
                <div class="card p-2">
                    <div class="product-description mt-4">
                       
                        <h4>Chi tiết sản phẩm</h4>
                        <div id="productDescription" class="product-details__product-description p-4" itemprop="description">
                            {!! $product->description !!}
                        </div>
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
                                @if (!empty($relatedProducts))
                                <div class="relative-list-product">
                                    @foreach ($relatedProducts as $item)
                                        <livewire:site.inc.product-item :product="$item" :key="$item->id" />
                                        <hr>
                                    @endforeach
                                    
                                </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Hero: End -->
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
