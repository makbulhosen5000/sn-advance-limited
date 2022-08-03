@extends('frontend/layouts.master')
@section('content')



<section class="breadcrumb-section" style="background-image: url({{asset('public')}}/frontend/assets/img/video-bg-2.jpg);">
    <div class="container">
        @foreach ($teams as $team)
        <div class="breadcrumb-text">
            <h1>{{$team->name}}</h1>
            <h2>{{$team->designation}}</h2>
            {{-- <p>Trusted Logistics Company</p> --}}
        </div>
        <ul class="breadcrumb-nav" style="color:white">
            <li class="text-white"><a href="{{url('/')}} "class="text-white">Home</a></li>
            <li class="text-white">{{$team->name}}</li>
        </ul>
        <span class="btg-text" style="font-size: 200px">S.n Advance Limited</span>
        @endforeach
    </div>
    <div class="breadcrumb-shape">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z">
            </path>
        </svg>
    </div>
</section>

<!--====== TEAM MEMBER DESCRIPTION SECTION START ======-->
<section class="team-details pt-150 pb-120">
    <div class="container">
        @foreach ($teams as $team)
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-9">
                <div class="member-img">
                    {{-- <img src="{{asset('public/frontend')}}/assets/img/team/02.jpg" alt="Image"> --}}
                    <img src="{{asset('public/images/team/'.$team->image)}}" alt="Team-Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-9">
                <div class="member-information">
                    <div class="member-info-top d-sm-flex align-items-center justify-content-between">
                        <div class="title">
                            <h2>{{$team->name}}</h2>
                            <span>{{$team->designation}}</span>
                        </div>
                        {{-- <div class="link">
                            <a href="#" class="main-btn btn-filled">Get Appointment</a>
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-xl-9 col-md-11">
                        

                            <ul class="contact-list">
                                <span>{{$team->description}}</span>
                                {{-- <li>
                                    <i class="fas fa-phone"></i>
                                    <span class="title">Phone : </span>
                                    (123) 456-7890 8, +987 868 6578 648
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <span class="title">Email : </span>
                                    <a href="#">info@example.com</a>, <a href="#">job@webmail.com</a>
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span class="title">Address Info : </span>
                                    24 Fifth st., New York, US
                                </li> --}}
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!--====== TEAM MEMBER DESCRIPTION SECTION END ======-->

<section>
    <div class="clinet-section" style="margin-bottom:100px">
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

@endsection







