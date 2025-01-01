<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
    @if (!empty($images))
      <div class="swiper-wrapper">
        @foreach ($images as $image)
          <div class="swiper-slide">
            <img src="{{$image->origin_image_url}}" />
          </div>
        @endforeach
      </div>
    @endif
    
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <div thumbsSlider="" class="swiper mySwiper product-thumb-slider">
    @if (!empty($images))
    <div class="swiper-wrapper">
      @foreach ($images as $image)
      <div class="swiper-slide">
        <img src="{{$image->origin_image_url}}" />
      </div>
      @endforeach
    </div>
    @endif
  </div>