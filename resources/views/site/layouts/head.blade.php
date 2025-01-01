<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>3D shop</title>
    <meta name="description"
        content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
        href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />


    <!-- Include Styles -->
    <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- Icons -->

    
        <link rel="stylesheet" as="style"
        href="{{asset('site/css/theme-default.css')}}" />
        <link rel="stylesheet" as="style"
                href="{{asset('site/css/core.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" as="style"
        href="{{asset('site/css/front-page.css')}}" />

        <link rel="stylesheet" as="style"
        href="{{asset('site/css/nouislider.css')}}" />
        <link rel="stylesheet" as="style"
        href="{{asset('site/css/swiper.css')}}" />
        <link rel="stylesheet" as="style"
        href="{{asset('site/css/front-page-landing.css')}}" />
    <!-- Page Styles -->
    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
    <!-- laravel style -->
    <link rel="stylesheet" as="style"
    href="{{asset('site/css/helpers.css')}}" />
   <script src="{{asset('site/js/helpers.js')}}"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   @yield('styles')
  </head>
