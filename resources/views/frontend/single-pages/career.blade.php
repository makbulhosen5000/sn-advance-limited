@extends('frontend/layouts.master')
@section('content')
    <section class="breadcrumb-section" style="background-image: url(public/frontend/assets/img/video-bg-2.jpg);">
        <div class="container">
            <div class="breadcrumb-text">
                <h1>News</h1>
                <p>Trusted Logistics Company</p>
            </div>
            <ul class="breadcrumb-nav" style="color:white">
                <li class="text-white"><a href="{{ url('/') }} "class="text-white">Home</a></li>
                <li class="text-white">News</li>
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


    <!--====== NEWS SECTION START ======-->
    <section class="blog-section pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Loop Start -->
                @php
                    $careers = App\Models\Career::all();
                @endphp
                <div class="col-lg-12 col-md-8 col-sm-10">
                    <div class="blog-loop">
                        @foreach ($careers as $career)
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                    <div class="post-grid-box mb-30">
                                        <ul class="post-cat">
                                            <li><a href="#">Career</a></li>
                                        </ul>
                                        <div class="post-desc">
                                            <h4><a href="{{ route('news.details', $career->slug) }}">{{ $career->title }}</a>
                                            </h4>
                                            <p>{{ $career->short_desc }}</p> 
                                            <p>{{ $career->long_desc }}</p>
                                        </button>
                                        </div>
                                        <ul class="post-meta">
                                          
                                                {{-- <button class="btn btn-danger">Publish Date</button> --}}
                                                <li>PUBLISH DATE : <a href="#"><i class="fas fa-calendar-alt"></i>{{ $career->publish_date }}</a>
                                  
                                                {{-- <button class="btn btn-danger">Dateline</button> --}}
                                                <li>    DEADLINE :  <a href="#"><i class="fas fa-calendar-alt"></i>{{ $career->expire_date }}</a>
                                
                                          
                                       
                                            </li>
                                        </ul>
                                        {{-- <figure class="mt-45 mb-45">
                                            <img src="{{asset('public/images/car/')}}" alt="Image">
                                        </figure> --}}
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="post-grid-box mb-30">
                                    <iframe src="{{ asset('public/images/career/'.$career->image) }}" height="662"
                                        width="500"></iframe>
                                </div>
                            </div>
                              
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!--======  NEWS SECTION END ======-->

    <section>
        <div class="clinet-section" style="margin-bottom:100px;">
            <div class="container-fluid custom-width-three">
                <div class="clinet-slider">
                    @foreach ($CompaniesBrandLogos as $CompaniesBrandLogo)
                        <div class="clinet-item">
                            <a href="#">
                                <img src="{{ asset('public/images/companies-image/' . $CompaniesBrandLogo->image) }}"
                                    alt="Image">
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>