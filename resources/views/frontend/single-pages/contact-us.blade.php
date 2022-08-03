
@extends('frontend/layouts.master')
@section('content')


     <!--====== CONTACT SECTION START ======-->
     <section class="breadcrumb-section" style="background-image: url(public/frontend/assets/img/video-bg-2.jpg);">
        <div class="container">
            <div class="breadcrumb-text">
                <h1>Contact Us</h1>
                <p>Trusted Logistics Company</p>
            </div>
            <ul class="breadcrumb-nav">
                <li class="text-white"><a href="{{url('/')}} " class="text-white">Home</a></li>
                <li class="text-white">Contact Us</li>
            </ul>
            <span class="btg-text" style="font-size: 200px">S.n Advance Limited</span>
        </div>
        <div class="breadcrumb-shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z">
                </path>
            </svg>
        </div>
    </section>
          <!--====== CONTACT SECTION START ======-->
    <section class="contact-section pt-110 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-sm-7">
                    <div class="section-title left-border">
                        <span class="title-tag">Get In Touch</span>
                        <h2>Get Catch us from here. right now</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-5 d-none d-sm-block">
                    <div class="contact-page-link text-right">
                        <a href=" {{route('contact.us')}} " class="main-btn btn-filled">get a guote</a>
                    </div>
                </div>
            </div>
            <div class="contact-form-wrapper mt-80 mb-110">
                <div class="row no-gutters align-items-center align-items-lg-start justify-content-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="contact-info-list">
                            <div class="info-box">
                                <div class="icon">
                                    <i class="fa-solid fa-house-user"></i>
                                </div>
                                <div class="content">
                                    <h4>Office Address</h4>
                                    <p>{{$contacts->address}}</p>
                                </div>
                            </div>
                            <div class="info-box">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h4>Phone Number</h4>
                                    <p>{{$contacts->phone}}</p>
                                </div>
                            </div>
                            <div class="info-box">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4>Email address</h4>
                                    <p>{{$contacts->email}}</p>
                                </div>
                            </div>
                        </div>                                   
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="contact-form">
                            <form  action="{{route('contact.store')}}" method="POST">
                                @csrf
                                @if(Session::get('success'))
                                <div class="alert alert-danger alert-dismissible">
                                     <button type="butto" class="close" data-dismiss="alert">&times;</button>
                                    <strong>{{Session::get('success')}}</strong>
                                </div>
                                @endif  
                                <div class="row padding-custom">
                                    <div class="col-12 col-lg-6">
                                        <div class="input-group mb-10">
                                            <div class="icon">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <input type="text" placeholder="Your name *" name="name"  required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="input-group mb-10">
                                            <div class="icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <input type="email" placeholder="Your email *" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group mb-10">
                                            <div class="icon">
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                            <input type="text" placeholder="Your Phone *" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group mb-10">
                                            <div class="icon">
                                                <i class="fab fa-product-hunt"></i>
                                            </div>
                                            <input type="text" placeholder="Your Product name" name="product_name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group textarea mb-10">
                                            <div class="icon">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </div>
                                            <textarea placeholder="Enter message *" name="massage"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="main-btn btn-filled">Get A QUote</button>
                                    </div>
                                    {{-- <div class="col-12">
                                        <div class="server_response w-100"></div>
                                    </div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clinet-section">
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
    <!--====== CONTACT SECTION END ======-->
@endsection






