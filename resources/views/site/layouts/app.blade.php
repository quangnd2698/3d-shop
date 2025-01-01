<!-- Vendor Styles -->

<!-- Page Styles -->

<!-- Vendor Scripts -->

<!-- Page Scripts -->



<!DOCTYPE html>

<html lang="en" class="light-style  layout-navbar-fixed      "  data-style="light">
@include('site.layouts.head')

<body>


    <!-- Layout Content -->



    <!-- Navbar: Start -->
    <livewire:site.inc.navbar />
    <!-- Navbar: End -->

    <!-- Sections:Start -->
    @yield('content')
    <!-- / Sections:End -->
    {{-- @if (!isset($hiddenWiewedProducts))
        @include('site.component.product-viewed')
    @endif --}}
    <!-- Footer: Start -->
    @include('site.layouts.footer')
    <!-- Footer: End -->
    <!--/ Layout Content -->
    @include('sweetalert::alert')

    @include('site.layouts.scripts')


</body>

</html>
