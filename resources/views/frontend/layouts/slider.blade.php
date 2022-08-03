
 @php
    $count = 0;
 @endphp
 <style>
    .sliderHeight{
        height: 630px;
        }

    @media only screen and (max-width: 1200px){
        .sliderHeight{
        height: 530px;
        }
    }
@media only screen and (max-width: 600px){
    .sliderHeight{
        height: 330px;
        }
}
@media only screen and (max-width: 425px){
    .sliderHeight{
        height: 230px;
        }
}
 </style>
<div class="row">
    <div class="col-ls-12 col-md-12 col-sm-12">
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($sliders as $key=> $slider)
                <li data-target="#carouselExampleIndicators" data-slide-to=" {{$key}} " class="@if($count==0) {active} @endif"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                    @foreach($sliders as  $slider)
                <div class="sliderHeight has-bg-img bg-purple bg-blend-overlay carousel-item @if($count==0){ active } @endif" style="">
                       <img class="bg-img  d-block w-100 " src="{{asset('public/images/slider_images/'.$slider->image)}}" alt="slide">
                    <div class="text-center carousel-caption d-none d-md-block">
                        <h1 style="font-size: 100px;" class="text-white" >{{$slider->sort_title}}</h1>
                        <h1 style="font-size: 100px;" class="text-white" >{{$slider->long_title}}</h1>
                        {{-- <h3 class="text-light">{{$slider->long_title}}</h3> --}}
                    </div>
                </div>
                    @php
                    $count++
                    @endphp
                @endforeach
                {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span><i class="fa-solid fa-arrow-left"></i> PREV</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span>NEXT<i class="fa-solid fa-arrow-right"></i></span>
                </a> --}}
            </div>
        </div> 
    </div>
</div>



 
  <!--====== BANNER SECTION START ======-->


{{-- <section class="banner-section banner-style-three banner-slider-two" style="background-image: url(public/frontend/assets/img/banner/02.jpg);">
    <div class="slider-active slick-initialized slick-slider" id="bannerSliderTwo"><span class="slick-arrow prev-arrow" style="display: block;"><i class="fa-solid fa-arrow-left"></i>Prev</span>
        

        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3144px;">
            <div class="single-banner slick-slide" tabindex="-1" style="width: 1048px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" data-slick-index="0" aria-hidden="true">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="banner-text">
                                <h1 data-animation="fadeInUp" data-delay=".7s" style="animation-delay: 0.7s;" class="">Get
                                    <span>Started</span> Transportation <span>With</span></h1>
                                    <div class="btn-wrap" data-animation="fadeInUp" data-delay=".9s" style="animation-delay: 0.9s;">
                                    <a href="#" class="main-btn btn-filled" tabindex="-1">Get Started Now</a>
                                    <a href="#" class="main-btn btn-borderd" tabindex="-1">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-banner slick-slide slick-current slick-active" tabindex="0" style="width: 1048px; position: relative; left: -1048px; top: 0px; z-index: 999; opacity: 1;" data-slick-index="1" aria-hidden="false">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="banner-text">
                                <h1 data-animation="fadeInUp" data-delay=".7s" style="animation-delay: 0.7s;" class="">Get
                                    <span>Started</span> Transportation <span>With</span></h1>
                                <div class="btn-wrap" data-animation="fadeInUp" data-delay=".9s" style="animation-delay: 0.9s;">
                                    <a href="#" class="main-btn btn-filled" tabindex="0">Get Started Now</a>
                                    <a href="#" class="main-btn btn-borderd" tabindex="0">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-banner slick-slide" tabindex="-1" style="width: 1048px; position: relative; left: -2096px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" data-slick-index="2" aria-hidden="true">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="banner-text">
                                <h1 data-animation="fadeInUp" data-delay=".7s" style="animation-delay: 0.7s;" class="">Get
                                    <span>Started</span> Transportation <span>With</span></h1>
                                <div class="btn-wrap" data-animation="fadeInUp" data-delay=".9s" style="animation-delay: 0.9s;">
                                    <a href="#" class="main-btn btn-filled" tabindex="-1">Get Started Now</a>
                                    <a href="#" class="main-btn btn-borderd" tabindex="-1">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<span class="slick-arrow next-arrow" style="display: block;">next<i class="fa-solid fa-arrow-right"></i></span></div>
    <div class="banner-shape-three">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z">
            </path>
        </svg>
    </div>
</section> --}}
    <!--====== BANNER SECTION END ======-->