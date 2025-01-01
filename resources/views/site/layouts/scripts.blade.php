<script src="{{asset('site/js/dropdown-hover.js')}}">
</script>
<script src="{{asset('site/js/mega-dropdown.js')}}">
</script>
<script src="{{asset('site/js/popper.js')}}"></script>
<script src="{{asset('site/js/bootstrap.js')}}"></script>
<script src="{{asset('site/js/front-main.js')}}"></script>
<script src="{{asset('site/js/front-page-landing.js')}}"></script>
<script src="{{asset('site/js/nouislider.js')}}"></script>
<script src="{{asset('site/js/swiper.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@livewireScripts

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<x-livewire-alert::scripts />
<script>
    var productSwiper = new Swiper(".product-viewed-swiper", {
        slidesPerView: 1.5,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 10
          },

          1024: {
            slidesPerView: 4,
            spaceBetween: 10
          },
          1224: {
            slidesPerView: 6
          },
        }

    });
  </script>
@yield('script')
