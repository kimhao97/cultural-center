<!-- Header Start -->
<div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <div class="row align-items-center px-3">
    <div class="col-lg-6 text-center text-lg-left">
        <h4 class="text-white mb-4 mt-5 mt-lg-0">@yield('header_subtitle', 'Kids Learning Center')</h4>
        <h1 class="display-3 font-weight-bold text-white">
            @yield('header_title', 'New Approach to Kids Education')
        </h1>
        <p class="text-white mb-4">
            @yield('header_description', 'Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit. Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita lorem dolore sed stet et est justo dolore.')
        </p>
        @yield('header_button')
    </div>
    <div class="col-lg-6 text-center text-lg-right">
        <img class="img-fluid mt-5" src="{{ asset('web/img/header.png') }}" alt="" />
    </div>
    </div>
</div>
<!-- Header End -->