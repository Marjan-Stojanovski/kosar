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
    <title>{{ $company->name }} Beverages</title>
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
    <style>
        .list-group {
            max-height: 200px;
            overflow: auto;
        }

        .own-item {
            padding: 20px;
        }
    </style>
</head>

<body class="no-trans front-page">
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
<div class="page-wrapper">
    <div class="header-container">
        <div class="header-top dark">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 col-sm-6 col-md-9">
                        <div class="header-top-first clearfix">
                            <ul class="social-links circle small clearfix hidden-xs">
                                <li class="facebook"><a target="_blank"
                                                        href="{{ $company->facebook }}"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="instagram"><a target="_blank"
                                                         href="{{ $company->instagram }}"><i
                                            class="fa fa-instagram"></i></a></li>
                            </ul>
                            <div class="social-links hidden-lg hidden-md hidden-sm circle small">
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                            class="fa fa-share-alt"></i></button>
                                    <ul class="dropdown-menu dropdown-animation">
                                        <li class="facebook"><a target="_blank"
                                                                href="{{ $company->facebook }}"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li class="instagram"><a target="_blank"
                                                                 href="{{ $company->instagram }}"><i
                                                    class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline hidden-sm hidden-xs">
                                <li><i class="fa fa-phone pr-5 pl-10"></i>{{ $company->phone }}</li>
                                <li><a href="mailto:{{ $company->mail }}"><i
                                            class="fa fa-envelope-o pr-5 pl-10"></i>{{ $company->mail }}</a></li>
                            </ul>
                            <ul class="list-inline hidden-sm hidden-xs">
                                <li><i class="fa pr-5 pl-10"></i><span
                                        style="font-size: 20px; padding: 2px; margin-left: 200px "><strong>{{ $company->name }}</strong></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-9 col-sm-6 col-md-3">
                        <div class="header-top-dropdown text-right" style="padding-top: 5px">
                            <?php if (isset(Auth::user()->firstName)) { ?>
                            <div class="btn-group dropdown">
                                <button type="button" class="btn dropdown-toggle btn-default btn-sm"
                                        data-toggle="dropdown"><i
                                        class="fa fa-user pr-10"></i>{{Auth::user()->firstName}}
                                </button>
                                <ul class="dropdown-menu dropdown-animation">
                                    <ul class="menu">
                                        <li><a href="{{route('frontend.details')}}"><i class="icon-list"></i> Account
                                                Details</a></li>
                                        <li><a href=""><i class="icon-bag"></i> Orders History</a></li>
                                        <li><a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                                <i class="icon-logout"></i> {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </ul>
                            </div>
                            <?php } else { ?>
                            <div class="btn-group dropdown">
                                <button type="button" class="btn dropdown-toggle btn-default btn-sm"
                                        data-toggle="dropdown"><i class="fa fa-lock pr-10"></i> Login
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                    <li>
                                        <form class="login-form margin-clear" action="{{ route('login') }}"
                                              method="POST">
                                            @csrf
                                            <div class="form-group has-feedback">
                                                <label for="email" class="control-label">Email</label>
                                                <input type="text" placeholder="Email" id="email" class="form-control"
                                                       name="email" required
                                                       autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                                <i class="fa fa-user form-control-feedback"></i>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="password" class="control-label">Password</label>
                                                <input type="password" placeholder="Password" id="password"
                                                       class="form-control" name="password" required>
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                                <i class="fa fa-lock form-control-feedback"></i>
                                            </div>
                                            <button type="submit" class="btn btn-gray btn-sm">Log In</button>
                                            <span class="pl-5 pr-5">or</span>
                                            <a href="{{route('frontend.register')}}" class="btn btn-default btn-sm"><i
                                                    class="fa fa-user pr-10"></i> Sign Up</a>
                                            <ul>
                                                <li><a href="{{route('frontend.reset')}}">Forgot your password?</a></li>
                                            </ul>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <?php } ?>
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
                                                    <a class="dropdown-toggle"
                                                       data-toggle="dropdown">ZGANE</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            {!! $categoriesTree !!}
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu">
                                                    <a href="{{route('frontend.products')}}">SADJE</a>
                                                </li>
                                                <li class="menu">
                                                    <a href="{{route('frontend.shop')}}">E-TRGOVINA</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">O
                                                        NAM</a>
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
                                            <div class="header-dropdown-buttons hidden-xs ">
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn dropdown-toggle"
                                                            data-toggle="dropdown"><i class="icon-search"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                                        <li>
                                                            <form action="{{ route('frontend.search') }}" method="GET"
                                                                  role="search" class="search-box margin-clear">
                                                                <div class="form-group has-feedback">
                                                                    <input type="text" name="search"
                                                                           value="{{ Request::get('search') }}"
                                                                           class="form-control"
                                                                           placeholder="Search">
                                                                    <i class="icon-search form-control-feedback"></i>
                                                                </div>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <?php
                                                $carts = session()->get('cart', []);
                                                ?>
                                                <?php if (!empty($carts)) { ?>
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn dropdown-toggle"
                                                            data-toggle="dropdown"><i
                                                            class="icon-basket-1"></i><span
                                                            class="cart-count default-bg">{{ count((array) session('cart')) }}</span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
                                                        <li>
                                                            <table class="table table-hover">
                                                                <thead>
                                                                <tr>
                                                                    <th class="quantity text-start">QTY</th>
                                                                    <th class="product text-center">Product</th>
                                                                    <th></th>
                                                                    <th class="total-amount text-end">Subtotal</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @php $total = 0 @endphp
                                                                @if(session('cart'))
                                                                    @foreach(session('cart') as $id => $details)
                                                                        <tr rowId="{{ $id }}">
                                                                            <td class="quantity text-start">{{$details['quantity']}}
                                                                                x
                                                                            </td>
                                                                            <td class="product text-center">{{ $details['name'] }}</td>
                                                                                <?php
                                                                                $sub = $details['productAmount'];
                                                                                $subTotal = number_format($sub, 2);
                                                                                ?>
                                                                            <td class="amount text-right" colspan="2">
                                                                                {{ $subTotal }} €
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                @endif
                                                                </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                    <td colspan="5" class="text-right">
                                                                        <a href="{{route('frontend.shoppingCart')}}"
                                                                           class="btn btn-group btn-gray btn-sm">View
                                                                            Cart</a>
                                                                    </td>
                                                                </tr>
                                                                </tfoot>
                                                            </table>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <?php } else { ?>
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn dropdown-toggle"
                                                            data-toggle="dropdown"><i
                                                            class="icon-basket-1"></i><span
                                                            class="cart-count default-bg">0</span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
                                                        <li>
                                                            <table class="table table-hover">
                                                                <thead>
                                                                <tr>
                                                                    <th class="text-start">Product</th>
                                                                    <th class="text-center">Quantity</th>
                                                                    <th class="text-end">Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td class="quantity"></td>
                                                                    <td class="product"></td>
                                                                    <td class="amount"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <?php } ?>
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
    <div id="page-start"></div>

    @yield('content')

    <section class="section dark-bg" style="background-position: 50% 52%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2 style="padding-top: 10px" class="title">Pogledajte naso akcisko ponudbo</h2>
                            </div>
                            <div class="col-sm-4" style="padding-top: 10px">
                                <p><a href="{{URL::to('/e-shop/?discount[]=checked')}}"
                                      class="btn btn-sm btn-default btn-animated">Preberite Vec<i
                                            class="fa fa-arrow-right pl-20"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                                    <li><a href="{{ route('frontend.index') }}">Domov</a></li>
                                    <li><a href="{{ route('frontend.shop') }}">Trgovina</a></li>
                                    <li><a href="{{ route('frontend.brands') }}">Znamke</a></li>
                                    <li><a href="">Nacin placila in Dostava</a></li>
                                    <li><a href="{{ route('frontend.about') }}">O podjetju</a></li>
                                    <li><a href="{{ route('frontend.feedback') }}">Kontakt</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-content">
                            <h2 class="title">KONTAKT</h2>
                            <div class="separator-2"></div>
                            <p><b>{{ $company->name }}</b></p>
                            <p>{{ $company->info }}</p>
                            <ul class="list-icons">
                                <li><i class="fa fa-map-marker pr-10 text-default"></i>
                                    {{ $company->address }}
                                </li>
                                <li><i class="fa fa-phone pr-10 text-default"></i> {{ $company->phone }}</li>
                                <li><a href="mailto:{{ $company->mail }}"><i
                                            class="fa fa-envelope-o pr-10"></i>{{ $company->mail }}</a>
                                </li>
                            </ul>
                            <ul class="social-links circle colored">
                                <li class="facebook"><a target="_blank" href="{{ $company->facebook }}"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="instagram"><a target="_blank" href="{{ $company->instagram }}"><i
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
</div>

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
<script>
    function onSelectChangeHandler() {
        let val = document.getElementById("type").value;
        switch (val) {
            case "private":
                document.getElementById("companyPrivate").style.display = "block";
                document.getElementById("companyCompany").style.display = "none";
                break;
            case "company":
                document.getElementById("companyPrivate").style.display = "none";
                document.getElementById("companyCompany").style.display = "block";
                break;
        }
    }
</script>
</body>
</html>
