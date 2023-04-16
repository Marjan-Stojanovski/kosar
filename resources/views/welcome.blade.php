<!DOCTYPE html>
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]>
<html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Kosar Beverages</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="/assets/frontend/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/fonts/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="/assets/frontend/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Fontello CSS -->
    <link href="/assets/frontend/fonts/fontello/css/fontello.css" rel="stylesheet">
    <!-- Plugins -->
    <link href="/assets/frontend/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="/assets/frontend/plugins/rs-plugin/css/settings.css" rel="stylesheet">
    <link href="/assets/frontend/css/animations.css" rel="stylesheet">
    <link href="/assets/frontend/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/assets/frontend/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="/assets/frontend/plugins/hover/hover-min.css" rel="stylesheet">
    <link href="/assets/frontend/plugins/morphext/morphext.css" rel="stylesheet">
    <!-- The Project's core CSS file -->
    <link href="/assets/frontend/css/style.css" rel="stylesheet">
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <link href="/assets/frontend/css/typography-default.css" rel="stylesheet">
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="/assets/frontend/css/skins/light_blue.css" rel="stylesheet">
    <!-- Custom css -->
    <link href="/assets/frontend/css/custom.css" rel="stylesheet">
</head>
<!-- body classes:  -->
<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
<!-- "gradient-background-header": applies gradient background to header -->
<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
<body class="no-trans front-page">
<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">
    <!-- header-container start -->
    <!-- header-container start -->
    <div class="header-container">
        <div class="header-top dark">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 col-sm-6 col-md-9">
                        <div class="header-top-first clearfix">
                            <ul class="social-links circle small clearfix hidden-xs">
                                <li class="facebook"><a target="_blank"
                                                        href="https://www.facebook.com/KOSAR.beverages"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="instagram"><a target="_blank"
                                                         href="https://www.instagram.com/kosar.spirits/"><i
                                            class="fa fa-instagram"></i></a></li>
                            </ul>
                            <div class="social-links hidden-lg hidden-md hidden-sm circle small">
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                            class="fa fa-share-alt"></i></button>
                                    <ul class="dropdown-menu dropdown-animation">
                                        <li class="facebook"><a target="_blank"
                                                                href="https://www.facebook.com/KOSAR.beverages"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li class="instagram"><a target="_blank"
                                                                 href="https://www.instagram.com/kosar.spirits/"><i
                                                    class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline hidden-sm hidden-xs">
                                <li><i class="fa fa-phone pr-5 pl-10"></i>+386 031 308 780</li>
                                <li><i class="fa fa-envelope-o pr-5 pl-10"></i>info@kosar.si</li>
                            </ul>
                            <ul class="list-inline hidden-sm hidden-xs">
                                <li><i class="fa pr-5 pl-10"></i><span
                                        style="font-size: 20px; padding: 2px; margin-left: 200px "><strong>KOSAR</strong></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-9 col-sm-6 col-md-3">
                        <div id="header-top-second" class="clearfix">
                            <div class="header-top-dropdown text-right">
                                <div class="btn-group">
                                    <a href="{{route('login')}}" class="btn btn-default btn-sm">
                                        <?php if (isset(Auth::user()->name)) {
                                            echo Auth::user()->name;
                                        } else {
                                            echo 'Login';
                                        } ?>
                                    </a>
                                    <?php if (isset(Auth::user()->name)) { ?>
                                    <a class="btn btn-default btn-sm" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="header  fixed    clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="header-left clearfix">
                            <div id="logo" class="logo">
                                <a href="{{route('frontend.index')}}"><img id="logo_img" style="width: 50px"
                                                                           src="/assets/img/logo.jpg"
                                                                           alt="The Project"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="header-right clearfix">
                            <div class="main-navigation  animated with-dropdown-buttons">
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">
                                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                            <ul class="nav navbar-nav ">
                                                <li class="menu">
                                                    <a href="{{route('frontend.index')}}">DOMOV</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ZGANE</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            {!! $categoriesList !!}
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu">
                                                    <a href="{{route('frontend.products')}}">SADJE</a>
                                                </li>
                                                <li class="menu">
                                                    <a href="{{route('frontend.publika')}}">PUBLIKA BAR</a>
                                                </li>
                                                <li class="menu">
                                                    <a href="{{route('frontend.shop')}}">E-TRGOVINA</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">O NAM</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{route('frontend.about')}}"
                                                               class="dropdown-toggle" data-toggle="dropdown">O
                                                                Podjetju</a></li>
                                                        <li><a href="{{route('frontend.feedback')}}"
                                                               class="dropdown-toggle"
                                                               data-toggle="dropdown">Kontakt</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!-- main-menu end -->
                                            <!-- header dropdown buttons -->
                                            <div class="header-dropdown-buttons hidden-xs ">
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn dropdown-toggle"
                                                            data-toggle="dropdown"><i class="icon-search"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                                        <li>
                                                            <form role="search" class="search-box margin-clear">
                                                                <div class="form-group has-feedback">
                                                                    <input type="text" class="form-control"
                                                                           placeholder="Search">
                                                                    <i class="icon-search form-control-feedback"></i>
                                                                </div>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn dropdown-toggle"
                                                            data-toggle="dropdown"><i
                                                            class="icon-basket-1"></i><span
                                                            class="cart-count default-bg">8</span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
                                                        <li>
                                                            <table class="table table-hover">
                                                                <thead>
                                                                <tr>
                                                                    <th class="quantity">QTY</th>
                                                                    <th class="product">Product</th>
                                                                    <th class="amount">Subtotal</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td class="quantity">2 x</td>
                                                                    <td class="product"><a href="shop-product.html">Android
                                                                            4.4 Smartphone</a><span class="small">4.7" Dual Core 1GB</span>
                                                                    </td>
                                                                    <td class="amount">$199.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="total-quantity" colspan="2">Total 8
                                                                        Items
                                                                    </td>
                                                                    <td class="total-amount">$1997.00</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="panel-body text-right">
                                                                <a href="shop-cart.html"
                                                                   class="btn btn-group btn-gray btn-sm">View
                                                                    Cart</a>
                                                                <a href="shop-checkout.html"
                                                                   class="btn btn-group btn-gray btn-sm">Checkout</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- header-container end -->

    <div id="page-start"></div>


    <!-- MAIN CONTENT -->
    @yield('content')
    <!-- MAIN CONTENT END -->


    <!-- section start -->
    <section class="section dark-bg" style="background-position: 50% 52%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2 style="padding-top: 10px" class="title">Pogledajte naso akcisko ponudbo</h2>
                            </div>
                            <div class="col-sm-4">
                                <p><a href="#" class="btn btn-lg btn-default btn-animated">Vec<i
                                            class="fa fa-arrow-right pl-20"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
    <footer id="footer" class="clearfix">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-content">
                            <h2 class="title">PRI VAS</h2>
                            <div class="separator-2"></div>
                            <nav class="mb-20">
                                <ul class="nav nav-pills nav-stacked list-style-icons">
                                    <li><a href="">Domov</a></li>
                                    <li><a href="">Trgovina</a></li>
                                    <li><a href="">Znamke</a></li>
                                    <li><a href="">Nacin placila</a></li>
                                    <li><a href="">Dostava</a></li>
                                    <li><a href="">O podjetju</a></li>
                                    <li><a href="">Kontakt</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-content">
                            <h2 class="title">KONTAKT</h2>
                            <div class="separator-2"></div>
                            <p><b>KOŠAR</b></p>
                            <p>Darko Stojanovski s.p.</p>
                            <ul class="list-icons">
                                <li><i class="fa fa-map-marker pr-10 text-default"></i> Stare Črnuče 3, 1231
                                    Ljubljana
                                </li>
                                <li><i class="fa fa-phone pr-10 text-default"></i> +386 031 308 780</li>
                                <li><a href="mailto:info@theproject.com"><i class="fa fa-envelope-o pr-10"></i>info@kosar.si</a>
                                </li>
                            </ul>
                            <ul class="social-links circle colored">
                                <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="instagram"><a target="_blank" href="http://plus.google.com"><i
                                            class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-content">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.51986849765592!2d14.531659146124854!3d46.102407549221475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476532eaadf80047%3A0x512385eda534baf3!2sKO%C5%A0AR%2C%20trgovina%20na%20debelo%20s%20pija%C4%8Dami%2C%20Darko%20Stojanovski%20sp!5e0!3m2!1sen!2smk!4v1679750067742!5m2!1sen!2smk"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="subfooter-inner">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">2023 Copyright © All Rights Reserved! Made by Buli</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="/assets/frontend/plugins/jquery.min.js"></script>
<script type="text/javascript" src="/assets/frontend/bootstrap/js/bootstrap.min.js"></script>
<!-- Modernizr javascript -->
<script type="text/javascript" src="/assets/frontend/plugins/modernizr.js"></script>
<!-- jQuery Revolution Slider  -->
<script type="text/javascript" src="/assets/frontend/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript"
        src="/assets/frontend/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Isotope javascript -->
<script type="text/javascript" src="/assets/frontend/plugins/isotope/isotope.pkgd.min.js"></script>
<!-- Magnific Popup javascript -->
<script type="text/javascript" src="/assets/frontend/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Appear javascript -->
<script type="text/javascript" src="/assets/frontend/plugins/waypoints/jquery.waypoints.min.js"></script>
<!-- Count To javascript -->
<script type="text/javascript" src="/assets/frontend/plugins/jquery.countTo.js"></script>
<!-- Parallax javascript -->
<script src="/assets/frontend/plugins/jquery.parallax-1.1.3.js"></script>
<!-- Contact form -->
<script src="/assets/frontend/plugins/jquery.validate.js"></script>
<!-- Background Video -->
<script src="/assets/frontend/plugins/vide/jquery.vide.js"></script>
<!-- Owl carousel javascript -->
<script type="text/javascript" src="/assets/frontend/plugins/owl-carousel/owl.carousel.js"></script>
<!-- SmoothScroll javascript -->
<script type="text/javascript" src="/assets/frontend/plugins/jquery.browser.js"></script>
<script type="text/javascript" src="/assets/frontend/plugins/SmoothScroll1.js"></script>
<!-- Initialization of Plugins -->
<script type="text/javascript" src="/assets/frontend/js/template.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript" src="/assets/frontend/js/custom.js"></script>
</body>
</html>
