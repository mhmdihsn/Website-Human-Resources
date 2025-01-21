<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="{{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">home</a></li>
                                        <li><a href=" ">Job Details <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('jobdetails') }}">Software Engineer </a></li>
                                                <li><a href="{{ route('digitalmarketer') }}">Digital Marketer </a></li>
                                                <li><a href="{{ route('webdevelopper') }}">Web Developer</a></li>
                                                <li><a href="{{ route('uiux') }}">UI/UX Designer</a></li>
                                                <li><a href="{{ route('dataanalyst') }}">Data Analyst</a></li>
                                                <li><a href="{{ route('productmanager') }}">Product Manager</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">

                                @if(Route::has('login'))

                                @auth

                                <x-app-layout>

                                </x-app-layout>

                                @else

                                <div class="phone_num d-none d-xl-block">
                                    <a href="{{route('login')}}">Log in</a>
                                </div>
                                <div class="phone_num d-none d-xl-block">
                                    <a href="{{route('register')}}">Register</a>
                                </div>

                                @endauth

                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
</body>

