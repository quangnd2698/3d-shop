<div class="product-list">
    @for ($i = 0; $i < 10; $i++)
        <div class="product-item">
            <div class="product-item__image">
                <img src="https://mauin3d.com/wp-content/uploads/2024/06/image-1-330-301x339.jpg" alt="Product image">
            </div>
            <div class="product-item__info name-info d-flex justify-content-between mt-3">
                <div class="product-item__title w-70">Zibo Haidai Building Building Building</div>
                <div class="product-item__price text-danger"> <span> 100.000<sup>đ</sup></span></div>
            </div>
            <div class="product-item__info d-flex justify-content-between mt-2">
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
    @endfor
</div>