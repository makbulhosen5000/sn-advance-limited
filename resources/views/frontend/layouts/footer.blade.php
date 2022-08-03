
    <!--====== GO TO TOP PART START ======-->
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="fas fa-angle-double-up"></i>
                    <i class="fas fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>
    <!--====== GO TO TOP PART ENDS ======-->
    

<!--====== FOOTER SECTION START ======-->


<footer class="footer-style-three">
    <div class="footer-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <div class="logo text-center text-sm-left">
                        <a href="">
                            <img src="{{asset('public/images/logo/'.$logo->image)}}" width="150px" height="100px" alt="sn-advance-ltd">
                        </a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="social-icon text-center text-sm-right">
                        <a href="{{$contacts->facebook}}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{$contacts->twitter}}"><i class="fab fa-twitter"></i></a>
                        {{-- <a href=""><i class="fab fa-behance"></i></a> --}}
                        <a href="{{$contacts->linkedin}}"><i class="fab fa-linkedin"></i></a>
                        <a href="{{$contacts->youtube}}"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- widgets -->
    <div class="footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget nav-widget d-flex justify-content-start">
                        <div>
                            <h5 class="widget-title">Useful Link</h5>
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{route('about.us')}}">About Us</a></li>
                                <li><a href="{{route('our.team')}}">Our Team</a></li>
                                <li><a href="{{route('news')}}">News</a></li>
                                <li><a href="{{route('career')}}">Career</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="widget nav-widget d-flex justify-content-start justify-content-lg-center">
                        <div>
               
                            <h5 class="widget-title">Services</h5>
                            <ul>  
                                @foreach ($categorieses as $category)
                                <li><a href="{{route('category.details',$category->slug)}}">{{$category->name}}</a></li>
                                @endforeach
                                <li><a href="{{route('medicine.feed')}}">Medicine & Fish Feed</a></li>
                            </ul>

                        </div> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget nav-widget d-flex justify-content-start justify-content-lg-center">
                        <div>
                            <h5 class="widget-title">Address</h5>
                            <ul>
                                <li><a href="#"><i class="fas fa-map-marker-alt"></i> {{$contacts->address}} </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget nav-widget d-flex justify-content-start justify-content-lg-center">
                        <div>
                            <h5 class="widget-title">Contact Us</h5>
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-phone"></i> {{$contacts->phone}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-envelope"></i> {{$contacts->email}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-envelope"></i> demo@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="copy-right-area">
        <div class="container">
            <div class="copyrigt-text d-sm-flex justify-content-between">
                <p>All rights reserved © SN ADAVNCE LTD</p>
                {{-- <p>Copyright By@<a href="#">CreTechBD</a> - 2022</p> --}}
                <p>Powered By | <a href="https://cretechbd.com/">cretechbd.com</a> - 2022</p>
            </div>
        </div>
    </div>
</footer>
<!--====== FOOTER SECTION END ======-->