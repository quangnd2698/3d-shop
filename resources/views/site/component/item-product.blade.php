@if (!empty($product))
<div class="product-item ">
    <div class="product-item__image">
        <img src="{{(!empty($product->images) &&  !empty($product->images->first())) ? $product->images->first()->medium_image_url : ''}}" alt="Product image">
    </div>
    <div class="product-item__info name-info d-flex justify-content-between mt-3">
        <div class="product-item__title w-70">{{ $product->name }}</div>
        <div class="product-item__price text-danger"> <span> {{ number_format($product->sale_price, 0, ',')}}<sup>đ</sup></span></div>
    </div>
    <div class="product-item__info ranking d-flex justify-content-between mt-2">
        <div class="product-item__ranking">
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star-half' ></i>
            <span class="text-secondary"><small>(20)</small></span>
        </div>
        <div class="product-item__action text-danger">
            <i class='bx bx-heart'></i>
            <i class='bx bx-cart-add'></i>    
        </div>
    </div>
</div>
@endif
