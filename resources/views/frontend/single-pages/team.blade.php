
@extends('frontend/layouts.master')
@section('content')



<section class="breadcrumb-section" style="background-image: url({{asset('public')}}/frontend/assets/img/video-bg-2.jpg);">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>Our Team Members</h1>
            <p>Trusted Logistics Company</p>
        </div>
        <ul class="breadcrumb-nav" style="color:white">
            <li class="text-white"><a href="{{url('/')}} "class="text-white">Home</a></li>
            <li class="text-white">Team Members</li>
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

<!--====== TEAM MEMBER SECTION START ======-->
<section class="team-section pt-120 pb-90">
    <div class="container">
        <div class="row justify-content-center team-loop">
            @foreach($teams as $team)
                <div class="col-lg-4 col-sm-6">
                    <div class="member-box">
                        <div class="member-img">
                            <img src="{{asset('public/images/team/'.$team->image)}}" alt="Team-Image">
                        </div>
                        <div class="member-info">
                            <h3>{{$team->name}}</h3>
                            <span>{{$team->designation}}</span>
                        </div>
                        <a href=" {{route('team.member.description',$team->slug)}} " class="socail-trigger">+</a>
                    </div>
                </div> 
            @endforeach
        </div>
        
    </div>
</section>
<!--====== TEAM MEMBER SECTION END ======-->

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







