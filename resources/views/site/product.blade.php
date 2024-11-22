@extends('site.layouts.app')
@section('styles')
<link rel="stylesheet" as="style"
                href="{{asset('site/css/core.css')}}" />

@endsection
@section('content')
            <!-- Hero: Start -->
            <section id="hero-animation">
                <div id="landingHero" class="position-relative mt-2 landing-hero  mb-3">
                     
                </div>

                <div class="container mt-2">
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
                        <div>
                            @include('site.product.gallary')
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Hero: End -->

@endsection