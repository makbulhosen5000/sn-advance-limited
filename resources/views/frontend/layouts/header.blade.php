
    <!--====== HEADER START ======-->
    <header class="header-absolute header-three sticky-header">
        <div class="container-fluid custom-container-two">
            <div class="mainmenu-area">
                <div class="d-flex align-items-center justify-content-between">
                    <nav class="main-menu">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset('public/images/logo/'.$logo->image)}}" width="150px" alt="Onitit" class="normal-logo">
                                <img src="{{asset('public/images/logo/'.$logo->image)}}" width="150px" alt="Onitit" class="sticky-logo">
                            </a>
                        </div>
                        <div style="padding-top: 20px" class="menu-items" style="display: block;">
                            <ul>
                                <li class="active" >
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li >
                                    <a href="">About</a>
                                    <ul class="submenu">
                                                <li>
                                                    <a href="{{route('about.us')}}">About Us</a>
                                                    <a href="{{route('our.team')}}">Our Team</a>
                                                    <a href="{{route('news')}}">News</a>
                                                    <a href="{{route('career')}}">Carrer</a>
                                                </li>
                                    </ul>
                                </li>
                                @foreach ($categorieses as $category)
                                <li>
                                    <a href="{{url('/')}}">{{$category->name}}</a>
                                    @php $subCategories = \App\Models\SubCategory::where('category_id', $category->id)->get() @endphp
                                    <ul class="submenu">
                                        @foreach($subCategories as $subcategory)
                                                <li>
                                                    <a href=" {{route('sub.cat.details',$subcategory->slug)}} ">{{ $subcategory->name }}</a>
                                                    {{-- <a href="{{route('category.wise.product',$category->category_id)}}">{{$category->category->name??''}}</a> --}}
                                                </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                                <li>
                                    <a href="{{route('contact.us')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="main-right">
                        <a href="#" class="main-btn btn-filled">
                            Get A Quote
                        </a>
                        <a href="#" class="offcanvas-trigger">
                            {{-- <i class="fas fa-ellipsis-v"></i> --}}
                            <i class="fas fa-shopping-cart pt-2"></i>
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
