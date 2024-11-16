<div class="product-list">
    @for ($i = 0; $i < 10; $i++)
        <div class="product-item">
            <div class="product-item__image">
                <img src="https://mauin3d.com/wp-content/uploads/2024/06/image-1-330-301x339.jpg" alt="Product image">
            </div>
            <div class="product-item__info d-flex justify-content-between mt-3">
                <div class="product-item__title w-50">Zibo Haidai Building Building Building</div>
                <div class="product-item__price text-danger"> <span> 100.000<sup>đ</sup></span><span class="sale-price">120.000 <sup>đ</sup></span></div>
            </div>
            <div class="product-item__info d-flex justify-content-between mt-2">
                <div class="product-item__ranking">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="product-item__price text-danger"> <span> 100.000<sup>đ</sup></span><span class="sale-price">120.000 <sup>đ</sup></span></div>
            </div>
        </div>
    @endfor
</div>