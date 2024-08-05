

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>USNews - Multipurpose News, Magazine and Blog HTML5 Template</title>
    <meta name="author" content="ThemeLooks" />
    <meta name="description" content="USNews - Multipurpose News and Magazine Template" />
    <meta name="keywords"
        content="news, newspaper, magazine, blog, post, article, editorial, publishing, modern, responsive, html5, template" />
    @include('clients.layouts.partials.css')
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script
    ><![endif]-->
</head>

<body class="boxed" data-bg-img="/client/img/bg-pattern.png">
    <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
    <div class="wrapper">
        <header class="header--section header--style-1">
            @include('clients.layouts.partials.header')
        </header>

        <div class="news--ticker">
            <div class="container">
                <div class="title">
                    <h2>Mới cập nhật</h2>

                </div>

            </div>
        </div>
        <div class="main-content--section pbottom--30">
            <div class="container">
                @yield('content')
                <div class="row">
                    <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <div class="row">
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    {{-- <div class="post--items-title" data-ajax="tab">
                                        <h2 class="h4">Worlds News</h2>
                                        <div class="nav">
                                            <a href="#" class="prev btn-link"
                                                data-ajax-action="load_prev_world_news_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>
                                            <span class="divider">/</span>
                                            <a href="#" class="next btn-link"
                                                data-ajax-action="load_next_world_news_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div> --}}



        <footer class="footer--section">
            @include('clients.layouts.partials.footer')

        </footer>
    </div>
    <div id="stickySocial" class="sticky--right">
        <ul class="nav">
            <li>
                <a href="#">
                    <i class="fa fa-facebook"></i> <span>Follow Us On Facebook</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-twitter"></i> <span>Follow Us On Twitter</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-google-plus"></i>
                    <span>Follow Us On Google Plus</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-rss"></i> <span>Follow Us On RSS</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-vimeo"></i> <span>Follow Us On Vimeo</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-youtube-play"></i>
                    <span>Follow Us On Youtube Play</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-linkedin"></i> <span>Follow Us On LinkedIn</span>
                </a>
            </li>
        </ul>
    </div>
    <div id="backToTop">
        <a href="#"><i class="fa fa-angle-double-up"></i></a>
    </div>
    @include('clients.layouts.partials.js')
</body>

</html>
