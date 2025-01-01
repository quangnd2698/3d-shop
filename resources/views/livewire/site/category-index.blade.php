@section('styles')
    <link rel="stylesheet" as="style" href="{{ asset('site/css/category.css') }}" />
    <link rel="stylesheet" as="style" href="{{ asset('site/css/product.css') }}" />
    <link rel="stylesheet" as="style" href="{{asset('site/css/product-item.css')}}" />
@endsection
    <section id="hero-animation">
        <div id="landingHero" class="position-relative landing-hero  mb-3">

        </div>

        <div class="container mt-2 p-l">
            <nav aria-label="breadcrumb" class="mt-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">{{$category->name}}</li>
                </ol>
            </nav>
        </div>
        <div class="container mt-2 p-l product-category mb-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Danh mục: <span class="text-bold" style="font-weight:800">{{$category->name}}</span></h5>
                </div>
                <div class="card-body">
                    @if (!empty($sorts))
                    <div class="demo-inline-spacing filter-product">
                        @foreach ($sorts as $sortKey => $item)
                            <span class="badge bg-label-dark {{ isset($filters['sort']) && $filters['sort'] == $sortKey ? 'active' : ''  }}" wire:click='sortProduct("{{$sortKey}}")'><i class='bx {{$item['icon']}}'></i>{{$item['title']}}</span>
                        @endforeach
                    </div>
                    @endif
                    
                    <div class="mt-6">
                        @if (!empty($products))
                            <livewire:site.inc.list-product :products="$products->items()">
                        @endif

                        <div class="mt-6 d-flex justify-content-center">

                            {!! $products->links('site.component.paginate') !!}
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
