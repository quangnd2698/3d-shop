<div class="container p-l mb-5 mt-5">
    <div class="card">
        <div class="card-header p-3">
            <h4 class="mb-0">Sản phẩm đã xem</h4>
        </div>
        <div class="card-body">
            <div class="swiper product-viewed-swiper">
                <div class="product-viewed swiper-wrapper">
                    @for ($i = 0; $i < 8; $i++)
                        <div class="swiper-slide">
                            @include('site.component.item-product')
                        </div>
                    @endfor
                </div>
                <div class="swiper-pagination"></div>
            </div>
           
        </div>
    </div>
    
</div>