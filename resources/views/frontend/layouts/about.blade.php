
<!--====== ABOUT SECTION START ======-->
<section class="about-section about-style-three pt-120 pb-120">
    <div class="container">
        @foreach ($abouts as $about)
        <div class="row align-items-center justify-content-center">
           
            <div class="col-lg-6 col-md-10">
                <div class="about-text pr-30">
                    <div class="section-title left-border mb-40">
                       
                        <span class="title-tag">About us</span>
                        <h2>{{$about->title}}</h2>
                    </div>
                    <p>
                        {{$about->description}}
                    </p>
                    <div class="pl-0 pb-0 col-sm-5 d-none d-sm-block">
                        <div class="service-page-link">
                            <a href="{{route('about.us')}}" class="main-btn btn-filled">Read More</a>
                        </div>
                    </div>
                </div>
            

            </div>
            <div class="col-lg-6 col-md-10 order-first order-lg-last">
                <div class="about-img">
                    <img src="{{asset('public/images/about/'.$about->image)}}" alt="Image">
                </div>
            </div>             
        </div>
        @endforeach
    </div>
</section>
<!--====== ABOUT SECTION END ======-->
