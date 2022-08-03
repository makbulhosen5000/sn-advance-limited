<style>
       .loginBtn{
        font-size: 14px;
        font-weight: 700;
        font-family: "Oswald", sans-serif;
        color: #fff;
        text-transform: uppercase;
        -webkit-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
        height: 60px;
        width: 60px;
        position: relative;
        line-height: 60px;
        background-color: #eb120a;
        border-color: #eb120a;
        margin-left:20px; 
       }
       .loginBtn:hover{
        background-color: white;
        color:red;
       }
</style>
    <!--====== HEADER START ======-->
    <header class="header-absolute header-three sticky-header">
        <div class="container-fluid custom-container-two">
            <div class="mainmenu-area">
                <div class="d-flex align-items-center justify-content-between">
                    <nav class="main-menu ">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset('public/images/logo/'.$logo->image)}}" width="150px" alt="Onitit" class="normal-logo">
                                <img src="{{asset('public/images/logo/'.$logo->image)}}" width="150px" alt="Onitit" class="sticky-logo">
                            </a>
                        </div>
                        <div  style="padding-top: 20px" class="menu-items" style="display: block;">
                            <ul class="menu">
                                <li class="{{ Request::is('/') ? 'active' : '' }}">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li class="{{ Request::is('about-us') ? 'active' : '' }}">
                                    <a href="{{route('about.us')}}" >About</a>
                                    <ul class="submenu">
                                                <li>
                                                    <a href="{{route('about.us')}}" >About Us</a>
                                                    <a href="{{route('our.team')}}">Our Team</a>
                                                    <a href="{{route('news')}}">News</a>
                                                    <a href="{{route('career')}}">Carrer</a>
                                                </li>
                                    </ul>
                                </li>
                                @foreach ($categorieses as $category)
                                <li  class="" >
                                    <a href="#">{{$category->name}}</a>
                                    @php $subCategories = \App\Models\SubCategory::where('category_id', $category->id)->get() @endphp
                                    <ul class="submenu">
                                        @foreach($subCategories as $subcategory)
                                                <li>
                                                    <a href=" {{route('sub.cat.details',$subcategory->slug)}} ">{{ $subcategory->name }}</a>
                                                </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                                <li class="{{ Request::is('medicine-feed') ? 'active' : '' }}">
                                    <a  href="{{route('medicine.feed')}}">Medicine & Fish Feed</a>
                                </li>
                                <li class="{{ Request::is('contact-us') ? 'active' : '' }}">
                                    <a href="{{route('contact.us')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="main-right">
                        <a href="{{route('contact.us')}}" class="main-btn btn-filled">
                            Get A Quote
                        </a>
                        <a href="{{route('login')}}" class="loginBtn text-center" >
                            {{-- class="offcanvas-trigger loginBtn" --}}
                            {{-- <i class="fas fa-ellipsis-v"></i> --}}
                            {{-- <i class="fas fa-sign-in p-4"></i> --}}Login
                        </a>
                        <!-- OFF CANVAS WRAP START -->
                        {{-- <div class="off-canvas-wrap">
                            <div class="overly"></div>
                            <div class="off-canvas-widget">
                                <a href="#" class="off-canvas-close"><i class="fal fa-times"></i></a>
                                <div class="widget recent-post">
                                    <h4 class="widget-title">Recent Posts</h4>
                                    <ul>
                                        <li>
                                            <div class="post-img" style="background-image: url(public/front-end/assets/img/laest-post/01.jpg);">
                                            </div>
                                            <div class="post-content">
                                                <h6>
                                                    <a href="blog-details.html">Signs moved moveth itself on years whose
                                                        without.</a>
                                                </h6>
                                                <span class="time"><i class="far fa-clock"></i>4 May.2020</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-img" style="background-image: url(public/front-end/assets/img/laest-post/02.jpg);">
                                            </div>
                                            <div class="post-content">
                                                <h6>
                                                    <a href="blog-details.html">Under brought airte them saw stars
                                                        created seas.</a>
                                                </h6>
                                                <span class="time"><i class="far fa-clock"></i>4 May.2020</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-img" style="background-image: url(public/front-end/assets/img/laest-post/03.jpg);">
                                            </div>
                                            <div class="post-content">
                                                <h6>
                                                    <a href="blog-details.html">Our form there seas set forth fill
                                                        bearing.</a>
                                                </h6>
                                                <span class="time"><i class="far fa-clock"></i>4 May.2020</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget contact-widget">
                                    <h4 class="widget-title">Contact Us</h4>
                                    <ul>
                                        <li>
                                            <i class="far fa-map-marker-alt"></i>
                                            305 Royal Track Suite 019, USA
                                        </li>
                                        <li>
                                            <i class="far fa-phone"></i>
                                            <a href="#">+10910-910920</a>
                                        </li>
                                        <li>
                                            <i class="far fa-envelope-open"></i>
                                            <a href="#">example@example.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget social-widget">
                                    <h4 class="widget-title">Follow Us</h4>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <!-- OFF CANVAS WRAP END -->
                    </div>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div class="row">
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </header>
    <!--====== HEADER END ======-->
