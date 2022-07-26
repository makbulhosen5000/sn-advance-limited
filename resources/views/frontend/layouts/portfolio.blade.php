
   <!--====== PORTFOLIO START ======-->
   <section class="portfolio-slider-section pt-120 pb-120">
    <div class="container-fluid">
        <!-- portfolio loop -->
        <div class="row portfolio-slider-loop portfolio-slider">
            @foreach ($products as $product)
            <div class="col-4">
                <div class="portfolio-box">
                    <div class="portfolio-img-wrap">
                        <div class="portfolio-img" style="background-image: url({{asset('public/images/product_images/'.$product->image)}});">
                        </div>
                    </div>
                    {{-- <div class="portfolio-desc">
                        <span class="portfolio-cat">Meet Our Attractive Product</span>
                        <h2><a href="#">Add To Cart</a></h2>
                        <a href="portfolio-details.html" class="portfolio-link">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div> --}}
                </div>               
            </div>
            
            @endforeach
        </div>        
    </div>
</section>
<!--====== PORTFOLIO END ======-->