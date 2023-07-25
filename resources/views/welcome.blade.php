<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/logo.jpg" type="image/ico">

    <!--swiper-->
    <link rel="stylesheet" href="assets/vendor/node_modules/css/swiper-bundle.min.css">
    <!--Icons-->
    <link href="assets/fonts/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Space+Grotesk:wght@300..700&display=swap"
          rel="stylesheet">
    <!-- Main CSS -->
    <link href="assets/css/theme-shop.min.css" rel="stylesheet">

    <title>E-commerce</title>
</head>

<body>
<!--:Preloader Spinner-->
<div class="spinner-loader bg-gradient-secondary text-white">
    <div class="spinner-border text-primary" role="status">
    </div>
    <span class="small d-block ms-2">Loading...</span>
</div>


<!--begin:message-->
<!--
<div class="position-relative px-4 text-center py-2 bg-dark text-white">
    <small>Worldwide shipping available</small>
</div>
-->
<!--/end:message-->
<!--begin:Header shop-->
<nav
    class="navbar navbar-search-w-icons position-sticky shadow top-0 z-index-fixed navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid position-relative">
        <a class="navbar-brand" href="index.html">
            <img src="assets/img/logo.jpg" alt="" class="img-fluid" style="width: 50px">
        </a>
        <div class="d-flex align-items-center navbar-no-collapse-items navbar-nav flex-row order-lg-last">
            <button class="navbar-toggler order-last" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainNavbarTheme" aria-controls="mainNavbarTheme" aria-expanded="false"
                    aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i></i>
                        </span>
            </button>
            <div class="nav-item ms-0 me-4 me-lg-2">
                <a href="demo-shop-wishlist.html" class="nav-link lh-1 position-relative">
                    <i class="bx bx-heart fs-4"></i>
                </a>
            </div>
            <div class="nav-item me-4 me-lg-2 ms-0">
                <a href="#offcanvasCart" data-bs-toggle="offcanvas" class="nav-link lh-1 position-relative">
                    <i class="bx bx-shopping-bag fs-4"></i>
                    <!--card badge-->
                    <span
                        class="badge d-none d-lg-flex p-0 position-absolute end-0 top-0 me-n2 mt-n1 lh-1 fw-semibold width-1x height-1x bg-white shadow-sm rounded-circle flex-center text-dark">3</span>
                </a>
            </div>
            <!--Search collapse trigger(hidden in desktop laptop)-->
            <div class="nav-item ms-0 me-4 d-lg-none">
                <a href="#searchCollapse" data-bs-target="#" data-bs-toggle="collapse"
                   class="nav-link search-link lh-1">
                    <i class="bx bx-search-alt-2 fs-4"></i>
                </a>
            </div>
            <div class="nav-item dropdown me-4 me-lg-0">
                <a href="#" class="nav-link p-0" data-bs-auto-close="outside" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    <i class="bx bx-user fs-4"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs position-absolute p-4">

                    <!--Login form-->
                    <form class="needs-validation" novalidate>
                        <div>
                            <h3 class="mb-1"> Welcome back! </h3>
                            <p class="mb-4 text-muted">
                                Please Sign In with details...
                            </p>
                        </div>
                        <div class="input-icon-group mb-3">
                                    <span class="input-icon">
                                        <i class="bx bx-envelope"></i>
                                    </span>
                            <input type="email" required class="form-control" autofocus=""
                                   placeholder="Username">
                        </div>
                        <div class="input-icon-group mb-3">
                                    <span class="input-icon">
                                        <i class="bx bx-key"></i>
                                    </span>
                            <input type="password" required class="form-control" placeholder="Password">
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>
                            <div>
                                <label class="text-end d-block small mb-0">
                                    <a href="#" class="text-muted link-decoration">Forget Password?
                                    </a>
                                </label>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-hover-arrow" type="submit">
                                <span>Sign in</span>
                            </button>
                        </div>
                        <p class="pt-4 mb-0 text-muted">
                            Don’t have an account yet? <a href="page-account-signup.html"
                                                          class="ms-2 pb-0 text-dark fw-semibold link-underline">Sign
                                Up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="mainNavbarTheme">
            <ul class="navbar-nav me-lg-auto ms-xl-5 ms-lg-2">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  active" href="#" role="button" data-bs-toggle="dropdown"
                       aria-haspopup="false" aria-expanded="false">
                        Home
                    </a>
                    <div class="dropdown-menu">
                        <a href="demo-shop.html" class="dropdown-item">01 Default</a>
                        <a href="demo-shop-home-02.html" class="dropdown-item">02 Home Option</a>
                    </div>
                </li>

                <li class="nav-item nav-item dropdown position-lg-static">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Mens
                    </a>
                    <div class="dropdown-menu dropdown-menu-fw py-lg-0 px-lg-0">
                        <div class="overflow-hidden">
                            <div class="row mx-0">

                                <div class="col-lg-4 pe-lg-0 order-lg-4 pe-lg-0 ms-lg-auto d-none d-lg-flex">
                                    <div
                                        class="d-flex bg-dark flex-column h-100 w-100 py-4 py-md-5 position-relative">
                                        <img alt="" src="assets/img/shop/banners/03.jpg"
                                             class="bg-image opacity-50">
                                        <div
                                            class="position-absolute text-center d-flex flex-column justify-content-center align-items-center text-white left-0 top-0 w-100 h-100 p-4">
                                            <div>
                                                <div
                                                    class="d-md-flex mb-2 justify-content-center align-items-center">
                                                        <span style="height: 1px"
                                                              class="d-none d-md-block bg-light width-7x"></span>
                                                    <h5 class="mb-0 mx-3 text-white">
                                                        Limited Discount
                                                    </h5>
                                                    <span style="height: 1px"
                                                          class="d-none d-md-block bg-light width-7x"></span>
                                                </div>
                                                <h3 class="display-5">New Arrivals
                                                </h3>
                                                <p class="mb-4">Order over $100 and get 30% Off</p>
                                                <a href="#!" class="btn btn-hover-text btn-outline-white">
                                                        <span class="btn-hover-label label-default">Shop
                                                            Now</span>
                                                    <span class="btn-hover-label label-hover">Shop
                                                            Now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/.col-->
                                <div class="col-lg-3 py-lg-5 mb-lg-0 mb-4">
                                    <div class="d-flex flex-column mb-3">
                                        <h5 class="dropdown-header mb-2">Topwear</h5>

                                        <a class="dropdown-item" href="#!">
                                            T-shirts
                                            <span
                                                class="badge badge-pill bg-success py-0 small d-inline-block ms-1">New</span>
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Casual Shirts
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Formal Shirts
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Sweatshirts

                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Jackets
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Blazers & Coats
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Sweaters
                                        </a>
                                    </div>
                                </div>
                                <!--/.col-->
                                <div class="col-lg-3 py-lg-5 mb-lg-0 mb-4">
                                    <div class="d-flex flex-column">
                                        <h5 class="dropdown-header mb-2">Bottomwear</h5>

                                        <a class="dropdown-item" href="#!">
                                            Jeans
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Trousers & Pants
                                            <span
                                                class="badge badge-pill bg-primary py-0 small d-inline-block ms-1">-20%</span>
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Shorts & Track Pants
                                        </a>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="d-flex flex-column">
                                        <h5 class="dropdown-header mb-2">Footwear</h5>

                                        <a class="dropdown-item" href="#!">
                                            Shoes
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Sandals & Floaters
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Flip Flops & Socks
                                        </a>
                                    </div>
                                </div>
                                <!--/.col-->
                                <div class="col-lg-2 py-lg-5">
                                    <div class="d-flex flex-column">
                                        <h5 class="dropdown-header mb-2">Accessories</h5>
                                        <a class="dropdown-item" href="#!">
                                            Face mask
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Wallets & Belts
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Backpacks
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Headphones
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Sunglasses
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Belts
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Socks
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Watches
                                        </a>
                                    </div>
                                </div>
                                <!--/.col-->
                            </div>
                            <!--/.row-->
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-item dropdown position-static ">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Womens
                    </a>
                    <div class="dropdown-menu dropdown-menu-fw px-lg-0 py-lg-0">
                        <div class="overflow-hidden">
                            <div class="row mx-0">
                                <div class="col-lg-5 me-lg-auto d-none d-lg-flex ps-lg-0">
                                    <div
                                        class="d-flex bg-shade-info flex-column h-100 w-100 py-4 py-lg-5 position-relative">
                                        <img alt="" src="assets/img/shop/banners/02.jpg"
                                             class="bg-image opacity-50">
                                        <div
                                            class="position-absolute text-center d-flex flex-column justify-content-end align-items-center text-white left-0 top-0 w-100 h-100 px-4">
                                            <div class="mb-4 py-4 px-4">
                                                <div
                                                    class="d-md-flex mb-2 justify-content-center align-items-center">
                                                            <span style="height: 1px"
                                                                  class="d-none d-lg-block bg-white width-7x"></span>
                                                    <h5 class="mb-0 fw-normal mx-2">
                                                        Limited Discount
                                                    </h5>
                                                    <span style="height: 1px"
                                                          class="d-none d-lg-block bg-white width-7x"></span>
                                                </div>
                                                <h3 class="display-5">New Arrivals
                                                </h3>
                                                <p class="mb-4">Order over $100 and get 30% Off</p>
                                                <a href="#!" class="btn btn-hover-text btn-outline-white">
                                                            <span class="btn-hover-label label-default">Shop
                                                                Now</span>
                                                    <span class="btn-hover-label label-hover">Shop
                                                                Now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/.col-->
                                <div class="col-lg-3 py-lg-5 mb-lg-0 ms-lg-auto mb-4">
                                    <div class="d-flex flex-column">
                                        <h5 class="dropdown-header mb-2">Clothes</h5>
                                        <a class="dropdown-item" href="#!">
                                            T-Shirts & Tops
                                            <span
                                                class="badge badge-pill bg-success py-0 small d-inline-block ms-1">New</span>
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Shorts
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            T-Shirts
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Jeans & Skirts
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Shoes & Sandals
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Jackets
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Sweatshirts & Hoodies
                                        </a>
                                    </div>
                                </div>
                                <!--/.col-->
                                <div class="col-lg-3 py-lg-5 mb-lg-0 ms-lg-auto mb-4">
                                    <div class="d-flex flex-column">
                                        <h5 class="dropdown-header mb-2">Accessories</h5>
                                        <a class="dropdown-item" href="#!">
                                            Face mask
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Handbags
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Backpacks
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Sunglasses
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Watches
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Wallets
                                        </a>
                                        <a class="dropdown-item" href="#!">
                                            Caps & Hats
                                        </a>
                                    </div>
                                </div>
                                <!--/.col-->
                            </div>
                            <!--/.row-->
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " data-bs-auto-close="outside" href="#" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop

                    </a>
                    <div class="dropdown-menu">
                        <div class="dropend">
                            <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                               aria-expanded="false" href="#">Products</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="demo-shop-products.html">Sidebar</a>
                                <a class="dropdown-item" href="demo-shop-products-full-width.html">Full
                                    width</a>
                                <a class="dropdown-item" href="demo-shop-product-category.html">Product
                                    category</a>
                            </div>
                        </div>
                        <div class="dropend">
                            <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">Product</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="demo-shop-product-default.html">Product
                                    Default</a>
                                <a class="dropdown-item" href="demo-shop-single-product-option.html">Product
                                    Option</a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="demo-shop-wishlist.html">Wishlist</a>
                        <a class="dropdown-item" href="demo-shop-cart.html">Cart</a>
                        <a class="dropdown-item" href="demo-shop-checkout.html">Checkout</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!">
                        Blog
                    </a>
                </li>
            </ul>
        </div>

        <div class="collapse collapse-search ms-xl-auto ms-lg-3 me-lg-1 d-lg-block" style="--navbar-search-width:280px;"
             id="searchCollapse">
            <form action="#">
                <div class="position-relative mt-3 mt-lg-0">
                            <span class="position-absolute start-0 top-50 translate-middle-y ms-3 opacity-50">
                                <i class="bx bx-search-alt-2"></i>
                            </span>
                    <input type="text" placeholder="Search Products..." class="form-control ps-6 rounded-pill">
                    <!--With Submit button-->
                    <!-- <button class="btn position-absolute end-0 top-0 flex-center p-0 width-4x h-100 rounded-pill btn-white">
                        <i class="bx bx-search-alt-2"></i>
                    </button>
                    <input type="text" placeholder="Search here..." class="form-control border-0 shadow-none ps-4 pe-6 rounded-pill">
               -->
                </div>
            </form>
        </div>
    </div>
</nav>
<!--/end:Header shop-->

<!--begin:Search bar modal-->
<div id="modal-search-bar-2" class="modal fade" tabindex="-1" aria-labelledby="modal-search-bar-2"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-top modal-md">
        <div class="modal-content position-relative border-0">
            <div class="position-relative px-4">
                <div
                    class="position-absolute end-0 width-7x top-0 d-flex me-4 align-items-center h-100 justify-content-center">
                    <button type="button" class="btn-close w-auto small" data-bs-dismiss="modal"
                            aria-label="Close">Cancel
                    </button>
                </div>
                <form class="mb-0">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-grow-1 align-items-center">
                            <i class="bx bx-search fs-4"></i>
                            <input type="text" placeholder="Search...."
                                   class="form-control shadow-none border-0 flex-grow-1 form-control-lg">
                        </div>
                    </div>
                </form>
            </div>

            <div class="p-4 border-top">
                <div class="d-flex align-items-center mb-3">
                    <i class="bx bx-trending-up fs-4"></i>
                    <h6 class="mb-0 ms-2">
                        Top searches
                    </h6>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                            <span><a href="#!"
                                     class="badge badge-pill border text-muted me-1 mb-1 px-3 py-1">Jeans</a></span>
                    <span><a href="#!"
                             class="badge badge-pill border text-muted me-1 mb-1 px-3 py-1">Shoes</a></span>
                    <span><a href="#!"
                             class="badge badge-pill border text-muted me-1 mb-1 px-3 py-1">Watches</a></span>
                    <span><a href="#!"
                             class="badge badge-pill border text-muted me-1 mb-1 px-3 py-1">Men's</a></span>
                    <span><a href="#!"
                             class="badge badge-pill border text-muted me-1 mb-1 px-3 py-1">Sneakers</a></span>
                    <span><a href="#!"
                             class="badge badge-pill border text-muted me-1 mb-1 px-3 py-1">Casual</a></span>
                    <span><a href="#!"
                             class="badge badge-pill border text-muted me-1 mb-1 px-3 py-1">Shirts</a></span>
                    <span><a href="#!"
                             class="badge badge-pill border text-muted me-1 mb-1 px-3 py-1">T-shirts</a></span>
                    <span><a href="#!"
                             class="badge badge-pill border text-muted me-1 mb-1 px-3 py-1">Lowers</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/end:Search bar modal-->

<!--begin:Cart offcanvas-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCart">
    <div class="border-bottom offcanvas-header align-items-center justify-content-between">
        <h5 class="mb-0">Your Cart (3)</h5>
        <button type="button" class="btn-close text-reset p-0 m-0 width-3x height-3x flex-center ms-auto"
                data-bs-dismiss="offcanvas" aria-label="Close">
            <button type="button"
                    class="btn-close shadow-none text-reset p-0 m-0 width-3x height-3x flex-center ms-auto"
                    data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="bx bx-x fs-4"></i>
            </button>
    </div>
    <div class="offcanvas-body p-4">
        <ul class="list-unstyled no-animation mb-0">
            <li class="d-flex py-3 border-bottom">
                <div class="me-1">
                    <a href="#!"><img src="assets/img/shop/backpack2.jpg"
                                      class="height-10x hover-lift hover-shadow w-auto" alt=""></a>
                </div>
                <div class="flex-grow-1 px-4 mb-3">
                    <a href="#!" class="text-dark d-block lh-sm fw-semibold mb-2">Laptop backpack water
                        proof</a>
                    <p class="mb-0 small"><strong>$36.00</strong> x
                        <strong>1</strong>
                    </p>
                </div>
                <div class="d-block text-end">
                    <a href="#!" class="text-muted small text-decoration-underline">
                        Remove
                    </a>
                </div>
            </li>
            <li class="d-flex py-3">
                <div class="me-1">
                    <a href="#!"><img src="assets/img/shop/jacket1.jpg"
                                      class="height-10x hover-lift hover-shadow w-auto" alt=""></a>
                </div>
                <div class="flex-grow-1 px-4 mb-3">
                    <a href="#!" class="text-dark d-block lh-sm fw-semibold mb-2">Brown denim jacket for
                        mens</a>
                    <p class="mb-0 small"><strong>$59.00</strong> x
                        <strong>2</strong>
                    </p>
                </div>
                <div class="d-block text-end">
                    <a href="#!" class="text-muted small text-decoration-underline">
                        Remove
                    </a>
                </div>
            </li>
            <li class="d-flex p-3 mb-3 border-top justify-content-between align-items-center">
                <span class="fw-normal">Subtotal</span>
                <span class="text-dark fw-bold">$154.00</span>
            </li>
        </ul>
    </div>
    <div class="offcanvas-footer p-4 border-top">
        <ul class="list-unstyled mb-0">

            <li class="pb-2 d-grid">
                <a href="#" class="btn btn-secondary btn-hover-arrow"><span>View
                                shopping cart</span></a>
            </li>
            <li class="d-grid">
                <a href="#" class="btn btn-primary btn-hover-arrow"><span>Checkout</span></a>
            </li>
        </ul>
    </div>
</div>
<!--/end:Cart offcanvas-->

<main>

    <!--begin:Hero section-->
    <section class="position-relative overflow-hidden">
        <!--:Swiper classic -->
        <div class="swiper-container swiper-classic overflow-hidden position-relative">
            <div class="swiper-wrapper">
                <!--:Slide-->
                <div class="swiper-slide" style="background-image:url('assets/img/shop/banners/03.jpg')">
                    <div class="bg-dark position-absolute start-0 top-0 w-100 h-100 opacity-25"></div>
                    <!--:container-->
                    <div class="container h-100 text-white position-relative z-index-1">
                        <div class="row d-flex align-items-center h-100">
                            <div class="col-xl-10 mx-auto text-center">
                                <!--:slider layers-->
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h2 class="display-1 mb-3">
                                            Mens Collection
                                        </h2>
                                    </li>
                                    <li>
                                        <p class="lead mb-4 mb-lg-5">
                                            Show your prducts in modern way
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-white btn-lg btn-hover-text mb-2 me-2">
                                            <span class="btn-hover-label label-default">View Collection</span>
                                            <span class="btn-hover-label label-hover">View Collection</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--:Slide-->
                <div class="swiper-slide" style="background-image:url('assets/img/shop/banners/06.jpg')">
                    <div class="bg-dark position-absolute start-0 top-0 w-100 h-100 opacity-25"></div>
                    <!--:container-->
                    <div class="container h-100 text-white position-relative z-index-1">
                        <div class="row d-flex align-items-center h-100">
                            <div class="col-xl-10 mx-auto text-center">
                                <!--:slider layers-->
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h2 class="display-1 mb-3">
                                            Womens Shop
                                        </h2>
                                    </li>
                                    <li>
                                        <p class="lead mb-4 mb-lg-5">
                                            Show your prducts in modern way
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-white btn-lg btn-hover-text mb-2 me-2">
                                            <span class="btn-hover-label label-default">Shop now</span>
                                            <span class="btn-hover-label label-hover">shop now</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--:Slide-->
                <div class="swiper-slide h-100" style="background-image:url('assets/img/shop/banners/07.jpg')">
                    <div class="bg-dark position-absolute start-0 top-0 w-100 h-100 opacity-25"></div>
                    <!--:container-->
                    <div class="container h-100 text-white position-relative z-index-1">
                        <div class="row d-flex align-items-center h-100">
                            <div class="col-xl-10 mx-auto text-center">
                                <!--:slider layers-->
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h2 class="display-1 mb-3">
                                            Urban Outfit
                                        </h2>
                                    </li>
                                    <li>
                                        <p class="lead mb-4 mb-lg-5">
                                            Show your prducts in modern way
                                        </p>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-white btn-lg btn-hover-text mb-2 me-2">
                                            <span class="btn-hover-label label-default">Shop now</span>
                                            <span class="btn-hover-label label-hover">shop now</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--:Add Pagination -->
            <div class="swiper-pagination swiperClassic-pagination mb-2 mb-lg-7 z-index-1 text-white"></div>

        </div>
    </section>
    <!--/end:Hero section-->

    <!--begin:Features section-->
    <section class="bg-white position-relative overflow-hidden">
        <div class="container pt-7 pt-lg-12 position-relative">
            <div class="row align-items-center">
                <div class="col-md-4 border-end-md border-light text-center mb-7 mb-md-0">
                    <div class="mb-3">
                        <i class="bx bx-store fs-1"></i>
                    </div>
                    <h6 class="mb-0">30 Day Returns</h6>
                </div>
                <div class="col-md-4 border-end-md border-light text-center mb-7 mb-md-0">
                    <div class="mb-3">
                        <i class="bx bx-purchase-tag fs-1"></i>
                    </div>
                    <h6 class="mb-0">100% Handpicked</h6>
                </div>
                <div class="col-md-4 text-center">
                    <div class="mb-3">
                        <i class="bx bx-package fs-1"></i>
                    </div>
                    <h6 class="mb-0">Assured Quality</h6>
                </div>
            </div>
        </div>
    </section>
    <!--/end:Features section-->

    <!--begin:banners section-->
    <section class="position-relative bg-white">
        <div class="container position-relative pt-7 pt-lg-12">
            <div class="row justify-content-between">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="card border-0 card-hover overflow-hidden">
                        <div class="overflow-hidden position-relative">
                            <img src="assets/img/shop/banners/women.jpg" class="img-fluid img-zoom" alt="">
                        </div>
                        <div
                            class="position-absolute text-white start-0 top-0 p-4 justify-content-center text-center align-items-center d-flex w-100 h-100">
                            <div class="">
                                <span>Summer Sale</span>
                                <h5 class="mb-4 display-6">Womens shop</h5>
                                <a href="#" class="btn btn-white btn-lg btn-hover-text mb-2 me-2">
                                    <span class="btn-hover-label label-default">Shop now</span>
                                    <span class="btn-hover-label label-hover">shop now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-0 card-hover overflow-hidden">
                        <div class="overflow-hidden position-relative">
                            <img src="assets/img/shop/banners/men.jpg" class="img-fluid img-zoom" alt="">
                        </div>
                        <div
                            class="position-absolute text-white start-0 top-0 p-4 justify-content-center text-center align-items-center d-flex w-100 h-100">
                            <div class="">
                                <span>New Arrivals</span>
                                <h5 class="mb-4 display-6">Mens collection</h5>
                                <a href="#" class="btn btn-white btn-lg btn-hover-text mb-2 me-2">
                                    <span class="btn-hover-label label-default">Shop now</span>
                                    <span class="btn-hover-label label-hover">shop now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/end:banners section-->

    <!--begin:featured products-->
    <section class="overflow-hidden bg-white">
        <div class="container py-9 py-lg-11">
            <div class="row mb-2 align-items-center">
                <div class="col-md-7 mb-4">
                    <h2 class="mb-0 display-5">
                        Featured Products
                    </h2>
                </div>
                <div class="col-md-5 mb-4">
                    <div class="text-center text-md-end">
                        <a href="#" class="btn btn-dark btn-lg btn-hover-text mb-2 me-2">
                            <span class="btn-hover-label label-default">Explore</span>
                            <span class="btn-hover-label label-hover">Explore</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <!--Card-product-->
                    <div class="card overflow-hidden hover-lift card-product">
                        <div class="card-product-header p-3 d-block overflow-hidden">
                            <!--Product image-->
                            <a href="#!">
                                <img src="assets/img/shop/products/01.jpg" class="img-fluid "
                                     alt="Product">
                            </a>
                        </div>
                        <div class="card-product-body p-3 pt-0 text-center">
                            <a href="#!" class="h5 d-block position-relative mb-2 text-dark">Product Title</a>
                            <div class="card-product-body-overlay">
                                <!--Price-->
                                <span class="card-product-price">
                                            <span>$256</span> <del>$299</del>
                                        </span>
                                <!--Action-->
                                <span class="card-product-view-btn">
                                            <a href="#!" class="link-underline mb-1 fw-semibold text-dark">View
                                                Details</a>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--/Card product end-->
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <!--Card-product-->
                    <div class="card overflow-hidden hover-lift card-product">
                        <div class="card-product-header p-3 d-block overflow-hidden">
                            <a href="#!">
                                <img src="assets/img/shop/products/02.jpg" class="img-fluid "
                                     alt="Product">
                            </a>
                        </div>
                        <div class="card-product-body p-3 pt-0 text-center">
                            <a href="#!" class="h5 d-block position-relative mb-2 text-dark">Product Title</a>
                            <div class="card-product-body-overlay">
                                        <span class="card-product-price">
                                            <span>$49</span> <del>$79</del>
                                        </span>
                                <span class="card-product-view-btn">
                                            <a href="#!" class="link-underline mb-1 fw-semibold text-dark">View
                                                Details</a>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--/Card product end-->
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <!--Card-product-->
                    <div class="card overflow-hidden hover-lift card-product">
                        <div class="card-product-header p-3 d-block overflow-hidden  position-relative">
                            <a href="#!">
                                <img src="assets/img/shop/products/03.jpg" class="img-fluid "
                                     alt="Product">
                            </a>

                            <!--Product Label-->
                            <span
                                class="badge rounded-pill bg-primary position-absolute start-0 top-0 mt-4 ms-4">Bestseller</span>
                        </div>
                        <div class="card-product-body p-3 pt-0 text-center">
                            <a href="#!" class="h5 d-block position-relative mb-2 text-dark">Product Title</a>
                            <div class="card-product-body-overlay">
                                        <span class="card-product-price">
                                            <span>$149</span> <del>$199</del>
                                        </span>
                                <span class="card-product-view-btn">
                                            <a href="#!" class="link-underline mb-1 fw-semibold text-dark">View
                                                Details</a>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--:/card product end-->
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <!--Card-product-->
                    <div class="card overflow-hidden hover-lift card-product">
                        <div class="card-product-header p-3 d-block overflow-hidden">
                            <a href="#!">
                                <img src="assets/img/shop/products/04.jpg" class="img-fluid "
                                     alt="Product">
                            </a>
                        </div>
                        <div class="card-product-body p-3 pt-0 text-center">
                            <a href="#!" class="h5 d-block position-relative mb-2 text-dark">Product Title</a>
                            <div class="card-product-body-overlay">
                                        <span class="card-product-price">
                                            <span>$99</span>
                                        </span>
                                <span class="card-product-view-btn">
                                            <a href="#!" class="link-underline mb-1 fw-semibold text-dark">View
                                                Details</a>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--/Card product end-->
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <!--Card-product-->
                    <div class="card overflow-hidden hover-lift card-product">
                        <div class="card-product-header p-3 d-block overflow-hidden">
                            <a href="#!">
                                <img src="assets/img/shop/products/05.jpg" class="img-fluid "
                                     alt="Product">
                            </a>
                        </div>
                        <div class="card-product-body p-3 pt-0 text-center">
                            <a href="#!" class="h5 d-block position-relative mb-2 text-dark">Product Title</a>
                            <div class="card-product-body-overlay">
                                        <span class="card-product-price">
                                            <span>$256</span> <del>$299</del>
                                        </span>
                                <span class="card-product-view-btn">
                                            <a href="#!" class="link-underline mb-1 fw-semibold text-dark">View
                                                Details</a>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--/Card product end-->
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <!--Card-product-->
                    <div class="card overflow-hidden hover-lift card-product">
                        <div class="card-product-header p-3 d-block overflow-hidden">
                            <a href="#!">
                                <img src="assets/img/shop/products/06.jpg" class="img-fluid "
                                     alt="Product">
                            </a>
                            <!--Product Label-->
                            <span
                                class="badge rounded-pill bg-danger position-absolute start-0 top-0 mt-4 ms-4">-30%</span>
                        </div>
                        <div class="card-product-body p-3 pt-0 text-center">
                            <a href="#!" class="h5 d-block position-relative mb-2 text-dark">Product Title</a>
                            <div class="card-product-body-overlay">
                                        <span class="card-product-price">
                                            <span>$49</span> <del>$79</del>
                                        </span>
                                <span class="card-product-view-btn">
                                            <a href="#!" class="link-underline mb-1 fw-semibold text-dark">View
                                                Details</a>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--/Card product end-->
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <!--Card-product-->
                    <div class="card overflow-hidden hover-lift card-product">
                        <div class="card-product-header p-3 d-block overflow-hidden">
                            <a href="#!">
                                <img src="assets/img/shop/products/07.jpg" class="img-fluid "
                                     alt="Product">
                            </a>
                        </div>
                        <div class="card-product-body p-3 pt-0 text-center">
                            <a href="#!" class="h5 d-block position-relative mb-2 text-dark">Product Title</a>
                            <div class="card-product-body-overlay">
                                        <span class="card-product-price">
                                            <span>$149</span> <del>$199</del>
                                        </span>
                                <span class="card-product-view-btn">
                                            <a href="#!" class="link-underline mb-1 fw-semibold text-dark">View
                                                Details</a>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--/Card product end-->
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <!--Card-product-->
                    <div class="card overflow-hidden hover-lift card-product">
                        <div class="card-product-header p-3 d-block overflow-hidden">
                            <a href="#!">
                                <img src="assets/img/shop/products/08.jpg" class="img-fluid "
                                     alt="Product">
                            </a>
                            <!--Product Label-->
                            <span
                                class="badge rounded-pill bg-success position-absolute start-0 top-0 mt-4 ms-4">New</span>
                        </div>
                        <div class="card-product-body p-3 pt-0 text-center">
                            <a href="#!" class="h5 d-block position-relative mb-2 text-dark">Product Title</a>
                            <div class="card-product-body-overlay">
                                        <span class="card-product-price">
                                            <span>$99</span>
                                        </span>
                                <span class="card-product-view-btn">
                                            <a href="#!" class="link-underline mb-1 fw-semibold text-dark">View
                                                Details</a>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <!--/Card product end-->
                </div>
            </div>

        </div>
    </section>
    <!--/end:featured products-->

    <!--begin:Offer+Testimonials-->
    <section class="position-relative overflow-hidden border-top border-bottom">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-6 h-100 col-xl-5 ms-md-auto order-last order-md-1 py-7 border-end-md">

                            <span class="d-block mb-2"><i class="bx bx-stopwatch fs-5 me-1"></i> Limited time
                                offer</span>
                    <div class="countdown-timer py-3 mb-3 d-flex flex-wrap align-items-center"></div>
                    <h2 class="display-2 me-lg-n9 position-relative mb-4">
                        40% OFF
                    </h2>
                    <h5 class="mb-5">On order above $200</h5>
                    <a href="#" class="btn btn-dark btn-lg btn-hover-text mb-2 me-2">
                        <span class="btn-hover-label label-default">Shop Now</span>
                        <span class="btn-hover-label label-hover">Shop Now</span>
                    </a>
                </div>
                <div class="col-md-6 h-100 ms-auto py-7 order-1 order-md-last">
                    <span class="d-block mb-4"><i class="bx bxs-quote-alt-left fs-5 me-1"></i> Testimonials</span>
                    <div class="swiper-container position-relative overflow-hidden swiper-testimonials">
                        <div class="swiper-wrapper pb-8">

                            <!--Slide-->
                            <div class="swiper-slide">
                                <p class="fs-4 mb-4">
                                    Curabitur non tristique tortor. Vestibulum aliquet suscipit ipsum in volutpat. Donec
                                    vel lacinia sem, vitae semper nulla. In hac habitasse platea dictumst. Mauris
                                    consectetur est et nibh sadip hendrerit bibendum.
                                </p>
                                <h5 class="mb-0">Heena Kohn, <small class="fw-normal">Customer</small></h5>
                            </div>
                            <!--Slide-->
                            <div class="swiper-slide">
                                <p class="fs-4 mb-4">
                                    In hac habitasse platea dictumst. Mauris consectetur est et nibh sadip hendrerit
                                    bibendum.
                                </p>
                                <h5 class="mb-0">Heena Kohn, <small class="fw-normal">Customer</small></h5>
                            </div>
                            <!--Slide-->
                            <div class="swiper-slide">
                                <p class="fs-4 mb-4">
                                    Donec vel lacinia sem, vitae semper nulla. In hac habitasse platea dictumst. Mauris
                                    consectetur est et nibh sadip hendrerit bibendum.
                                </p>
                                <h5 class="mb-0">Heena Kohn, <small class="fw-normal">Customer</small></h5>
                            </div>
                        </div>
                        <!--Pagination-->
                        <div class="swiper-pagination swiperT-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/end:Offer+Testimonials-->

    <!--begin:Newsletter-->
    <section class="position-relative bg-white">
        <div class="container py-9 py-lg-11">
            <div class="row justify-content-between">

                <!--Nesletter col-->
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <h2 class="mb-5 display-6 text-center">
                        Don't Miss Any News!
                    </h2>
                    <form class="needs-validation w-lg-75 mx-auto" novalidate>
                        <div class="row g-md-1 mb-4">
                            <div class="col-md mb-2 mb-md-0">
                                <input type="email" class="form-control form-control-lg" required
                                       placeholder="Your email address">
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>
                            <div class="col-md-auto col-12">
                                <button type="submit" class="btn btn-lg btn-hover-text btn-secondary w-100">
                                    <span class="btn-hover-label label-default"> Subscribe</span>
                                    <span class="btn-hover-label label-hover"> Subscribe</span>
                                </button>
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" required id="newsletterCheck">
                            <label class="form-label small text-secondary" for="newsletterCheck">I accept the <a
                                    href="#" class="text-dark link-decoration">Terms</a> and <a href="#"
                                                                                                class="text-dark link-decoration">conditions</a>
                                and the <a href="#"
                                           class="text-dark link-decoration">data protection guidelines.</a></label>

                            <div class="invalid-feedback">
                                You must agree before subscribe.
                            </div>
                        </div>
                    </form>
                </div>
                <!--End col-->
            </div>
        </div>
    </section>
    <!--/end:Newsletter-->
</main>


<!--begin:footer-->
<footer class="position-relative bg-dark text-white overflow-hidden">
    <div class="container pt-9 pt-lg-11 pb-6 position-relative">
        <div class="row">
            <div class="col-6 col-lg-3 col-xl-2 order-lg-2 ms-lg-auto mb-6">
                <h6 class="mb-4">Account</h6>
                <!-- nav -->
                <ul class="nav flex-column mb-0">
                    <li class="nav-item"><a class="nav-link" href="#!">Placing an order</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Shipping</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Track order</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Orders</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Assan Pay</a></li>
                </ul>
                <!-- /.nav -->
            </div>

            <div class="col-6 col-lg-3 col-xl-2 order-lg-3 ms-lg-auto mb-6">
                <h6 class="mb-4">Company</h6>

                <ul class="nav flex-column mb-0">
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Become a seller</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">News &amp; Media</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <li class="nav-item d-flex justify-content-between align-items-center">
                        <a class="nav-link" href="#!">Help center
                        </a>
                    </li>
                </ul>
                <!-- /.nav -->
            </div>

            <div class="col-md-6 col-lg-3 col-xl-2 ms-lg-auto order-lg-4 mb-6">
                <h6 class="mb-4">Top Brands</h6>
                <ul class="nav flex-column mb-0">
                    <li class="nav-item"><a class="nav-link" href="#!">Wrangler</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Us polo Assn.</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Puma</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Levis</a></li>
                    <li class="nav-item d-flex justify-content-between align-items-center">
                        <a class="nav-link" href="#!">Flying Machine
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 order-lg-1 mb-6">
                <div class="d-flex align-items-md-stretch flex-column h-100">
                    <div class="flex-grow-1 d-flex flex-column">
                        <small class="d-block mb-3">
                            745K Followers
                        </small>
                        <div class="mb-4">
                            <a href="#!" class="btn btn-outline-white btn-rise">
                                <div class="btn-rise-bg bg-white"></div>
                                <div class="btn-rise-text">
                                    <i class="bx bxl-instagram me-1 align-middle fs-5"></i> Follow us on IG
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <p class="small text-muted mb-0">© Assan. by Creative DM</p>
                    <!-- End Copyright -->
                </div>
            </div>
        </div>
        <hr class="bg-transparent border-top border-white opacity-25 mb-6 mt-0">
        <div class="row align-items-md-center">
            <div class="col-md-4 mb-3 mb-md-0">
                <!--:payment options-->
                <div class="d-flex justify-content-start">

                    <div class="d-block me-2 my-1">
                        <img src="assets/img/payment/american_express.svg" alt="">
                    </div>
                    <div class="d-block me-2 my-1">
                        <img src="assets/img/payment/paypal.svg" alt="paypal">
                    </div>
                    <div class="d-block me-2 my-1">
                        <img src="assets/img/payment/rupay.svg" alt="rupay">
                    </div>
                    <div class="d-block my-1">
                        <img src="assets/img/payment/visa.svg" alt="visa">
                    </div>
                </div>
                <!--:/payment options-->
            </div>

            <div class="col-md-2 col-xl-4 mb-3 mb-md-0">
                <!-- Links -->
                <ul class="list-inline small mb-0">
                    <li class="list-inline-item me-3">
                        <a class="d-block" href="#!">
                            <i class="bx bxl-facebook fs-4"></i>
                        </a>
                    </li>
                    <li class="list-inline-item me-3">
                        <a class="d-block" href="#!">
                            <i class="bx bxl-twitter fs-4"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="d-block" href="#!">
                            <i class="bx bxl-linkedin fs-4"></i>
                        </a>
                    </li>
                </ul>
                <!-- End Links -->
            </div>


            <div class="col-md-6 col-xl-4 text-md-end">
                <!-- Links -->
                <ul class="list-inline small mb-0">
                    <li class="list-inline-item me-3">
                        <a class="d-block" href="#!">Privacy &amp; Policy</a>
                    </li>
                    <li class="list-inline-item me-3">
                        <a class="d-block" href="#!">Terms &amp; Conditions</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="d-block" href="#!">Careers</a>
                    </li>
                </ul>
                <!-- End Links -->
            </div>
        </div>
    </div>
</footer>
<!--/end:footer-->

<!-- begin:Back to top -->
<a href="#top"
   class="toTop">
    <i class="bx bxs-up-arrow align-middle lh-1"></i>
</a>
<!-- end:Back to top -->


<!-- scripts -->
<script src="assets/js/theme.bundle.js"></script>


<!--Page Countdown + Swiper Slider scripts-->
<script src="assets/vendor/node_modules/js/jquery.min.js"></script>
<script src="assets/vendor/node_modules/js/jquery.countdown.min.js"></script>
<script src="assets/vendor/node_modules/js/swiper-bundle.min.js"></script>
<script>
    //Swiper Classic
    var swiperClassic = new Swiper(".swiper-classic", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 2500
        },
        pagination: {
            el: ".swiperClassic-pagination",
            clickable: true
        }
    });

    function get1dayFromNow() {
        return new Date(new Date().valueOf() + 1 * 24 * 60 * 60 * 1000);
    }

    var $clock = $('.countdown-timer');

    $clock.countdown(get1dayFromNow(), function (event) {
        $(this).html(event.strftime(
            '<div class="d-flex flex-column px-2 width-7x"><h2 class="mb-0 h4">%H</h2><span class="small text-muted">Hours</span></div><div class="d-flex flex-column px-2 width-7x"><h2 class="mb-0 h4">%M</h2><span class="small text-muted">Minutes</span></div><div class="d-flex flex-column px-2 width-7x"><h2 class="mb-0 h4">%S</h2><span class="small text-muted">Seconds</span></div>'
        ));
    });
    //Swiper testimonials
    var swiper = new Swiper(".swiper-testimonials", {
        loop: true,
        autoHeight: true,
        slidesPerView: 1,
        spaceBetween: 16,
        pagination: {
            el: ".swiperT-pagination", clickable: true
        },
    });

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
