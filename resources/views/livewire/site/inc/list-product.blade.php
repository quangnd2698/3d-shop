<div class="product-list">
    @if (!empty($products))
        @foreach ($products as $item)
            {{-- @include('site.component.item-product', ['product' => $item]) --}}
            <livewire:site.inc.product-item :product="$item" :key="$item->id. time()"/>
        @endforeach
    @endif
</div>