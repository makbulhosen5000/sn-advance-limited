
@extends('frontend/layouts.master')
@section('content')
<!--====== ABOUT SECTION START ======-->

<section class="breadcrumb-section" style="background-image: url({{asset('public')}}/frontend/assets/img/video-bg-2.jpg);">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>Products</h1>
            {{-- <p>Trusted Logistics Company</p> --}}
        </div>
        <ul class="breadcrumb-nav">
            <li class="text-white"><a href="{{url('/')}} " class="text-white">Home</a></li>
            <li class="text-white">Products</li>
        </ul>
        <span class="btg-text" style="font-size: 200px">S.n Advance Limited</span>
    </div>
    <div class="breadcrumb-shape">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" >
            <path d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z">
            </path>
        </svg>
    </div>
</section>

<section style=" background-color:white;" class="services-secton services-secton-two pt-120 pb-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row align-items-center justify-content-between">
            <div class="section-title left-border">
                <span class="title-tag">our Products</span>
            </div>
            {{-- <div class="col-lg-5 col-md-8 col-sm-7">
                <div class="section-title left-border">
                    <span class="title-tag">our Products</span>
                     <h2>We Are trusted For Our Products</h2>
                </div>
            </div> --}}
            {{-- <div class="col-lg-6 col-md-4 col-sm-5 d-none d-sm-block">
                <div class="service-page-link- text-right">
                    <a href="services.html" class="main-btn btn-filled">GET A QUOTE</a>
                </div>
            </div> --}}
        </div>
        <div class="services-loop mt-50">
            <div class="row justify-content-center">
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-service-two "  style=" background-color:#F2F4F8;">
                         <a href=""> <img src="{{asset('public/images/product_images/'.$product->image)}}" width="280px" height="200px" alt="Image"></a>
                         <h5 style="color:#23232c;;padding-top:10px;font-family: Poppins;font-weight: 400;font-size: 20px;line-height: 2.14286">{{$product->name}}</h5>
                         <h5 style="color:#1e1e23;;font-weight: 600;line-height: 30px;" >Model: {{$product->model}}</h5>
                         {{-- <h5 style="color:#1e1e23;;font-weight: 600;line-height: 30px;" >Price: {{$product->price}} TK</h5> --}}

                         <p>
                            {{-- {{$product->description}} --}}
                        </p>
                        <div class="service-page-link- text-center">
                            <a href="{{route('contact.us',$product->slug)}}" class=" btn btn-outline-secondary"><i class="fas fa-shopping-cart pr-2"></i>GET A QUOTE</a>
                        </div>
                    </div>                  
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section>
    <div class="clinet-section"  style="margin-bottom:130px;">
        <div class="container-fluid custom-width-three">
            <div class="clinet-slider">
                @foreach ($CompaniesBrandLogos as $CompaniesBrandLogo)       
                <div class="clinet-item">
                    <a href="#">
                        <img src="{{asset('public/images/companies-image/'.$CompaniesBrandLogo->image)}}" alt="Image">
                    </a>
                </div>
                @endforeach
              
            </div>              
        </div>           
    </div>
</section>

<!--====== ABOUT SECTION END ======-->

@endsection







