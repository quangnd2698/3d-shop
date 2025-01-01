@extends('site.layouts.app')
@section('styles')
    <link rel="stylesheet" as="style" href="{{ asset('site/css/core.css') }}" />
    <link rel="stylesheet" as="style" href="{{ asset('site/css/cart.css') }}" />
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
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Mô hình</a>
                    </li>
                    <li class="breadcrumb-item active">Giỏ hàng</li>
                </ol>
            </nav>
        </div>
        <div class="container mt-2 p-l">
            <div id="wizard-checkout" class="bs-stepper wizard-icons wizard-icons-example">
                <div id="checkout-cart"
                class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
                <div class="row">
                    <!-- Cart left -->
                    <div class="col-xl-8 mb-6 mb-xl-0 card p-6">
                        <div class="table-responsive text-nowrap">
                            <table class="table  table-bordered">
                              <thead>
                                <tr>
                                  <th>Sản phẩm</th>
                                  <th>Giá</th>
                                  <th>Số lượng</th>
                                  <th>Tổng</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                                <tr>
                                  <td>
                                     <div class="d-flex">
                                        <div class="flex-shrink-0 d-flex align-items-center">
                                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/products/1.png"
                                                alt="google home" class="w-px-100">
                                        </div>
                                        <div class="mt-3">
                                            <p class="me-3 mb-2"><a href="javascript:void(0)"
                                                    class="fw-medium"><span class="text-heading">Apple
                                                        iPhone 11 (64GB, Black)</span></a></p>
                                            <div
                                                class="text-muted mb-2 d-flex flex-wrap justify-content-center justify-content-sm-start">
                                                <span class="me-1">Danh mục:</span> <a
                                                    href="javascript:void(0)" class="me-4">Mô hình</a>
                                                <span class="badge bg-label-success">Còn hàng</span></div>
                                           
                                        </div>
                                     </div>

                                    </td>
                                  <td>200.000 <sup>đ</sup></td>
                                  <td style="width:100px">
                                    <input type="number" class="form-control" value="1" min="1">
                                  </td>
                                  <td><b>200.000 <sup>đ</sup></b></td>
                                  <td class="text-center"><a href="http://"><i class='bx bxs-trash text-danger'></i></a></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                        <!-- Wishlist -->
                        <div class="list-group mt-3 d-flex flex-row-reverse">
                            <a href="javascript:void(0)"
                                class="list-group-item text-primary border-primary d-flex justify-content-between w-50">
                                <span class="fw-medium">Tìm kiếm thêm sản phẩm</span>
                                <i class="bx bx-sm bx-right-arrow-alt scaleX-n1-rtl mt-50"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Cart right -->
                    <div class="col-xl-4">
                        <div class=" p-6 mb-4 card">
                            <!-- Price Details -->
                            <h6>Chi tiết giỏ hàng</h6>
                            <dl class="row mb-0 text-heading">
                                <dt class="col-6 fw-normal">Tiền sản phẩm</dt>
                                <dd class="col-6 text-end">200.000 <sup>đ</sup></dd>

                                <dt class="col-6 fw-normal">Giảm giá</dt>
                                <dd class="col-6 text-primary text-end"><span
                                    class="badge bg-label-success ms-1">0<sup>đ</sup></span></dd>
                            </dl>

                            <hr class="mx-n6 my-6">
                            <dl class="row mb-0">
                                <dt class="col-6 text-heading">Tổng</dt>
                                <div class="col-6 fw-medium text-end text-heading mb-0 font-weight-bold">
                                    <h5>200.000 <sup>đ</sup></h5>
                                </div>
                            </dl>
                            <hr class="mx-n6 my-6">
                            <div class="text-center">
                                <button class="btn btn-success w-100">Thanh toán</button>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
