<section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
   
    <div class="container">
        
        <div class="d-flex justify-content-between ">
            <h4 class="title-box">
                <span class="icon-header mr-2 text-danger"><i class='bx bxs-hot'></i></span>Sản phẩm nổi bật<span class="ml-2 icon-header text-danger"><i class='bx bxs-hot'></i></span>
            </h4>
           <div class="see-more-item">
            <a href="" class="btn btn-outline-primary rounded-pill ">
                Xem thêm <i class='bx bx-chevrons-right'></i>
            </a>
           </div>
        </div>
        <livewire:site.inc.list-product :products="$products" />
    </div>
</section>