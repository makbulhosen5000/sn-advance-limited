    @include('frontend.layouts.css-link')
<body>

    @include('frontend.layouts.header')
    @include('frontend.layouts.slider')
    @include('frontend.layouts.about')
    @include('frontend.layouts.service')
    @include('frontend.layouts.portfolio')
    @include('frontend.layouts.contact')
    @yield('content')
    @include('frontend.layouts.footer')
    @include('frontend.layouts.js-link')

</body>

</html>













