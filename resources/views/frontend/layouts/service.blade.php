  <!--====== SERVICES SECTION START ======-->
  <section class="services-secton services-secton-two pt-120 pb-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 col-md-8 col-sm-7">
                <div class="section-title left-border">
                    <span class="title-tag">our services</span>
                     <h2>We Are trusted For Our Services</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-5 d-none d-sm-block">
                <div class="service-page-link- text-right">
                    <a href="services.html" class="main-btn btn-filled">GET A QUOTE</a>
                </div>
            </div>
        </div>
        <div class="services-loop mt-50">
            <div class="row justify-content-center">
                @foreach ($services as $service)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-service-two">
                        <div class="top-icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                        <h4>{{$service->title}}</h4>

                        <p>
                            {{$service->description}}
                        </p>
                        <div class="bottom-icon">
                            <i class="fa-solid fa-gem"></i>
                        </div>
                    </div>                  
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
  <!--====== SERVICES SECTION END ======-->