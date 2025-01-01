@extends('site.layouts.app')
@section('styles')
    <link rel="stylesheet" as="style" href="{{ asset('site/css/category.css') }}" />
    <link rel="stylesheet" as="style" href="{{ asset('site/css/product.css') }}" />
    <link rel="stylesheet" as="style" href="{{asset('site/css/product-item.css')}}" />
@endsection
@section('content')
    <section id="hero-animation">
        <div id="landingHero" class="position-relative landing-hero  mb-3">

        </div>

        <div class="container mt-2 p-l">
            <nav aria-label="breadcrumb" class="mt-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Marvel</li>
                </ol>
            </nav>
        </div>
        <div class="container mt-2 p-l product-category">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Danh mục: Marvel</h5>
                </div>
                <div class="card-body">
                    <div class="demo-inline-spacing filter-product">
                        <span class="badge bg-label-dark"><i class='bx bx-sort-down'></i>Giá cao - thấp</span>
                        <span class="badge bg-label-dark"><i class='bx bx-sort-up'></i>Giá thấp - cao</span>
                        <span class="badge bg-label-dark"><i class='bx bx-time-five' ></i>Mới nhất</span>
                        <span class="badge bg-label-dark"><i class='bx bxs-discount' ></i>Khuyến mãi hot</span>
                        <span class="badge bg-label-dark"><i class='bx bx-show-alt' ></i>Xem nhiều</span>
                    </div>
                    <div class="mt-6">
                        @include('site.component.product-item')
                        <div class="mt-6 d-flex justify-content-end">
                            <nav aria-label="Page navigation mx-auto">
                                <ul class="pagination pagination-sm">
                                  <li class="page-item prev">
                                    <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left bx-xs"></i></a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">1</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">2</a>
                                  </li>
                                  <li class="page-item active">
                                    <a class="page-link" href="javascript:void(0);">3</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">4</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">5</a>
                                  </li>
                                  <li class="page-item next">
                                    <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right bx-xs"></i></a>
                                  </li>
                                </ul>
                              </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
