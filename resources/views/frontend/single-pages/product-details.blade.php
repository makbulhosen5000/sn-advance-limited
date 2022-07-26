
@extends('frontend/layouts.master')
@section('content')

<!--====== PRODUCT DEATAILS START ======-->

<section class="breadcrumb-section" style="background-image: url({{asset('public')}}/frontend/assets/img/video-bg-2.jpg);">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>Products Details</h1>
            {{-- <p>Trusted Logistics Company</p> --}}
        </div>
        <ul class="breadcrumb-nav">
            <li class="text-white"><a href="{{url('/')}} " class="text-white">Home</a></li>
            <li class="text-white">Products Deatils</li>
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
                <span class="title-tag">Products Details</span>
            </div>

        </div>

        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-8">
                <a href=""> <img src="{{asset('public/images/product_images/'.$product->image)}}"  alt="Image"></a>
            </div>
            <div class="col-md-4">
                <h5 style="color:#23232c;;padding-top:10px;font-family: Poppins;font-weight: 400;font-size: 20px;line-height: 2.14286">{{$product->name}}</h5>
                <h5 style="color:#1e1e23;;font-weight: 600;line-height: 30px;">BDT {{$product->price}}</h5>
                <p>
                   {{$product->short_desc}}
               </p>
               <p>
                  {{$product->long_desc}}
               </p>
            </div>
            @endforeach
        </div>

    </div>
</section>
<section>
    <div class="clinet-section mb-5">
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

<!--======  PRODUCT DEATAILS END ======-->

@endsection







