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
    @include('site.layouts.navbar')
    <!-- Navbar: End -->

    <!-- Sections:Start -->
    <div data-bs-spy="scroll" class="scrollspy-example">
        @yield('content')
        <!-- Contact Us: End -->
    </div>
    <!-- / Sections:End -->

    <!-- Footer: Start -->
    @include('site.layouts.footer')
    <!-- Footer: End -->
    <!--/ Layout Content -->

    @include('site.layouts.scripts')
</body>

</html>
