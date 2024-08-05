<header class="header--section header--style-1">
    <div class="header--topbar bg--color-2">
        <div class="container">
            <div class="float--left float--xs-none text-xs-center">
                <ul class="header--topbar-info nav">
                    <li><i class="fa fm fa-map-marker"></i>VietNam</li>
                    <li><i class="fa fm fa-mixcloud"></i>21<sup>0</sup> C</li>
                    <li>
                        <i class="fa fm fa-calendar"></i>Hôm nay (Sunday 19 April 2017)
                    </li>
                </ul>
            </div>

            <div class="float--right float--xs-none text-xs-center">
                <nav class="navbar navbar-expand-lg navbar-white">
                    <div class="order-2 order-lg-3 d-flex align-items-center">
                        <ul class="header--topbar-action nav">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            @if (Auth::user()->type == 'member')
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu  nav" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu  nav" aria-labelledby="navbarDropdown">
                                    <a class=" dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a class=" dropdown-item" href="{{ route('admin') }}">
                                        {{ __('Admin') }}
                                    </a>
                                </div>
                            </li>
                            @endif
                            @endguest
                        </ul>
                    </div>

                </nav>

                <ul class="header--topbar-lang nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="fa fm fa-language"></i>English<i class="fa flm fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Spanish</a></li>
                            <li><a href="#">French</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="header--topbar-social nav hidden-sm hidden-xxs">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-rss"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header--mainbar">
        <div class="container">
            <div class="header--logo float--left float--sm-none text-sm-center">
                <h1 class="h1">
                    <a href="home-1-boxed.html" class="btn-link">
                        <img src="/themes/client/images/logo.jpg" alt="USNews Logo" />
                        <span class="hidden">Báo lá cải</span>
                    </a>
                </h1>
            </div>
            {{-- <div class="header--ad float--right float--sm-none hidden-xs">
                <a href="#">
                    <img src="/themes/client/images/banner.png" width="300px" alt="Advertisement" />
                </a>
            </div> --}}
        </div>
    </div>
    <div class="header--navbar navbar bd--color-1 bg--color-1" data-trigger="sticky">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav"
                    aria-expanded="false" aria-controls="headerNav">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="headerNav" class="navbar-collapse collapse float--left">
                <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                    <li class="dropdown active">
                        <a href="{{ url('/') }}" class="dropdown-toggle">Trang Chủ<i
                                class="fa flm fa-angle-down"></i></a>
                        <ul class="dropdown-menu">


                        </ul>
                    </li>
                    <li class="dropdown megamenu filter">
                        <a href="world-news-boxed.html" class="dropdown-toggle" data-toggle="dropdown">Tin Tức
                            <i class="fa flm fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="megamenu--filter">
                                            <ul class="nav">

                                                @foreach ($categories as $category)
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('categories', $category->id) }}">{{
                                                        $category->name }}</a>

                                                    </a>

                                                </li>
                                                @endforeach


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href="national-boxed.html">Quốc Gia</a></li>
                    <li><a href="financial-boxed.html">Tài Chính</a></li>
                    <li><a href="entertainment-boxed.html">Sự Giải Trí</a></li>
                    <li><a href="lifestyle-boxed.html">Cách sống</a></li>
                    <li><a href="technology-boxed.html">Công Nghệ</a></li>
                </ul>
            </div>
            <form action="{{ route('news.filter') }}" class="header--search-form float--right" data-form="validate">
                @csrf
                <input type="search" name="search" placeholder="Search..." class="header--search-control form-control"
                    required="" />
                <button type="submit" class="header--search-btn btn">
                    <i class="header--search-icon fa fa-search"></i>
                </button>
            </form>


        </div>
    </div>
</header>
