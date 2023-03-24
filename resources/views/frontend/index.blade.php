@extends('welcome')
@section('content')

    <!-- SLIDER -->

    <!-- banner start -->
    <!-- ================ -->
    <div class="banner clearfix">

        <!-- slideshow start -->
        <!-- ================ -->
        <div class="slideshow">

            <!-- slider revolution start -->
            <!-- ================ -->
            <div class="slider-banner-container">
                <div class="slider-banner-fullwidth-big-height">
                    <ul class="slides">
                        <!-- slide 1 start -->
                        <!-- ================ -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="500"
                            data-saveperformance="on" data-title="Get 50% Sales"
                            style="background-image: url('/assets/img/dogotki/dogodek1.jpg'); background-position: center; background-size: contain; background-repeat: no-repeat">

                            <!-- main image -->


                            <!-- Transparent Background -->
                            <div class="tp-caption dark-translucent-bg"
                                 data-x="center"
                                 data-y="bottom"
                                 data-speed="600"
                                 data-start="0">
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sfb fadeout large_white"
                                 data-x="left"
                                 data-y="180"
                                 data-speed="500"
                                 data-start="1000"
                                 data-easing="easeOutQuad">Dogotki<br> Next
                                Generation Template
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfb fadeout large_white tp-resizeme hidden-xs"
                                 data-x="left"
                                 data-y="300"
                                 data-speed="500"
                                 data-start="1300"
                                 data-easing="easeOutQuad">
                                <div class="separator-2 light"></div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption sfb fadeout medium_white hidden-xs"
                                 data-x="left"
                                 data-y="320"
                                 data-speed="500"
                                 data-start="1300"
                                 data-easing="easeOutQuad"
                                 data-endspeed="600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                                Nesciunt, maiores, aliquid. Repellat eum numquam aliquid culpa offici, <br> tenetur
                                fugiat dolorum sapiente eligendi...
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfb fadeout small_white text-center"
                                 data-x="left"
                                 data-y="430"
                                 data-speed="500"
                                 data-start="1600"
                                 data-easing="easeOutQuad"
                                 data-endspeed="600"><a href="#" class="btn btn-default btn-animated">Learn More <i
                                        class="fa fa-arrow-right"></i></a>
                            </div>

                        </li>
                        <!-- slide 1 end -->

                        <!-- slide 2 start -->
                        <!-- ================ -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="500"
                            data-saveperformance="on" data-title="New Arrivals">

                            <!-- main image -->
                            <img src="/assets/frontend/images/shop-slide-2.jpg" alt="slidebg1"
                                 data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">

                            <!-- Transparent Background -->
                            <div class="tp-caption dark-translucent-bg"
                                 data-x="center"
                                 data-y="bottom"
                                 data-speed="600"
                                 data-start="0">
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sfb fadeout text-right large_white"
                                 data-x="right"
                                 data-y="180"
                                 data-speed="500"
                                 data-start="1000"
                                 data-easing="easeOutQuad"><span class="text-default">New</span> Arrivals<br> Unlimited
                                Variations and Layouts
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfb fadeout large_white tp-resizeme hidden-xs"
                                 data-x="right"
                                 data-y="300"
                                 data-speed="500"
                                 data-start="1300"
                                 data-easing="easeOutQuad">
                                <div class="separator-3 light"></div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption sfb fadeout medium_white text-right hidden-xs"
                                 data-x="right"
                                 data-y="320"
                                 data-speed="500"
                                 data-start="1300"
                                 data-easing="easeOutQuad"
                                 data-endspeed="600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                                Nesciunt, maiores, aliquid. Repellat eum numquam aliquid culpa offici, <br> tenetur
                                fugiat dolorum sapiente eligendi...
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfb fadeout small_white text-right text-center"
                                 data-x="right"
                                 data-y="430"
                                 data-speed="500"
                                 data-start="1600"
                                 data-easing="easeOutQuad"
                                 data-endspeed="600"><a href="#" class="btn btn-default btn-animated">Check Now <i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </li>
                        <!-- slide 2 end -->
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
            <!-- slider revolution end -->

        </div>
        <!-- slideshow end -->

    </div>
    <!-- banner end -->

    <!-- SLIDER END -->


    <!-- PRODUCTS -->

    <!-- section start -->
    <!-- ================ -->
    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- pills start -->
                    <!-- ================ -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="Latest Arrivals"><i
                                    class="icon-star"></i> Latest Arrivals</a></li>
                        <li><a href="#pill-2" role="tab" data-toggle="tab" title="Featured"><i class="icon-heart"></i>
                                Featured</a></li>
                        <li><a href="#pill-3" role="tab" data-toggle="tab" title="Top Sellers"><i
                                    class=" icon-up-1"></i> Top Sellers</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content clear-style">
                        <div class="tab-pane active" id="pill-1">
                            <div class="row masonry-grid-fitrows grid-space-10">
                                @foreach($products as $product)
                                    <div class="col-md-3 col-sm-6 masonry-grid-item">
                                        <div class="listing-item white-bg bordered mb-20">
                                            <div class="overlay-container">
                                                <img src="/assets/img/products/medium/{{$product->image}}" alt="">
                                                <!--
                                                <a class="overlay-link popup-img-single" href="/assets/frontend/images/product-1.jpg"><i class="fa fa-search-plus"></i></a>

                                                <span class="badge">30% OFF</span>
                                                -->
                                                <div class="overlay-to-top links">
														<span class="small">
															<a href="{{$product->brand->weblink}}" class="btn-sm-link"><i
                                                                    class="fa fa-heart-o pr-10"></i>{{$product->title}}</a>
															<a href="{{route('frontend.productview', $product->id)}}" class="btn-sm-link"><i
                                                                    class="icon-link pr-5"></i>View Details</a>
														</span>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <h3><a href="{{route('frontend.productview', $product->id)}}">{{$product->title}}</a></h3>
                                                <p class="small"> {{strip_tags($product->brand->name)}}</p>
                                                <div class="elements-list clearfix">
                                                    <!--<span class="price"><del>$100.00</del> $70.00</span>-->
                                                    <span class="price"> &nbsp;€{{$product->price}}</span>
                                                    <a href="#"
                                                       class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add
                                                        To Cart<i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- pills end -->
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- PRODUCTS END -->



    <!-- BRANDS-->

    <!-- section start -->
    <!-- ================ -->
    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="logo-font">Partnerji</h3>
                    <div class="separator-2"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At distinctio quia, et natus nulla
                        cumque consequuntur, <br> sed, quam aliquam excepturi ea necessitatibus facilis, vero illum
                        dignissimos eligendi quasi consectetur possimus.</p>
                    <div class="clients-container">
                        <div class="clients">
                            <div class="row">
                                @foreach($brands as $brand)
                                    <div class="col-md-4">
                                        <div class="listing-item pl-10 pr-10 mb-20">
                                            <div class="overlay-container bordered overlay-visible" >
                                                <img src="/assets/img/brands/thumbnails/{{$brand->image}}"
                                                     alt="">
                                                <a class="overlay-link" href="{{$brand->weblink}}"><i
                                                        class="fa fa-plus"></i></a>
                                                <div class="overlay-bottom" style="background-color: #0c9ec7">
                                                    <div class="text">
                                                        <h3 class="title">{{$brand->name}}</h3>
                                                        <div class="separator light"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- BRANDS END-->



    <!-- CATEGORIES -->

    <!-- section start -->
    <!-- ================ -->
    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center"><strong>Pijac</strong></h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>

        <div class="owl-carousel carousel-autoplay pl-10 pr-10">
            @foreach($categories as $category)
            <div class="listing-item pl-8 pr-10 mb-20">
                <div class="overlay-container bordered overlay-visible" style="background-image: url(/assets/img/categories/medium/{{$category->image}}); background-size: cover; background-repeat: no-repeat; background-position: center">
                    <div class="overlay-bottom" style="background-color: #44ae74;">
                        <div class="text">
                            <a href="{{route('frontend.categoryview', $category->id)}}" class="panel-title" style="font-size: 25px"><strong>{{$category->name}}</strong></a>
                            <div class="separator light"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </section>
    <!-- section end -->

    <!-- CATEGORIES END -->



    <!-- section start -->
    <!-- ================ -->
    <section class="section dark-translucent-bg pv-40"
             style="background-image:url('images/shop-banner.jpg');background-position: 50% 32%;">
        <div class="container">
            <div class="row grid-space-10">
                <div class="col-md-3 col-sm-6">
                    <div class="pv-30 ph-20 feature-box text-center object-non-visible"
                         data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon default-bg"><i class="fa fa-diamond"></i></span>
                        <h3>Hitra &amp; Bresplacna dostava</h3>
                        <div class="separator clearfix"></div>
                        <a href="page-services.html" class="link-dark">Preberite vec<i
                                class="pl-5 fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="pv-30 ph-20 feature-box text-center object-non-visible"
                         data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                        <span class="icon default-bg"><i class="icon-lock"></i></span>
                        <h3>Nekaj novega</h3>
                        <div class="separator clearfix"></div>
                        <!--
                        <p>Iure sequi unde hic. Sapiente quaerat sequi inventore.</p>
                        -->
                        <a href="page-services.html" class="link-dark">Preberite vec<i
                                class="pl-5 fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-md-3 col-sm-6">
                    <div class="pv-30 ph-20 feature-box text-center object-non-visible"
                         data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                        <span class="icon default-bg"><i class="icon-globe"></i></span>
                        <h3 class="pl-10 pr-10">za vas</h3>
                        <div class="separator clearfix"></div>
                        <a href="page-services.html" class="link-dark">Preberite vec<i
                                class="pl-5 fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="pv-30 ph-20 feature-box text-center object-non-visible"
                         data-animation-effect="fadeInDownSmall" data-effect-delay="250">
                        <span class="icon default-bg"><i class="icon-thumbs-up"></i></span>
                        <h3>24/7 Customer Support</h3>
                        <div class="separator clearfix"></div>
                        <a href="page-services.html" class="link-dark">Preberite vec<i
                                class="pl-5 fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <!--
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="title"><strong>Subscribe</strong> To Our Newsletter</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus error pariatur
                                    deserunt laudantium nam, mollitia quas nihil inventore, quibusdam?</p>
                                <div class="separator"></div>
                                <form class="form-inline margin-clear">
                                    <div class="form-group has-feedback">
                                        <label class="sr-only" for="subscribe3">Email address</label>
                                        <input type="email" class="form-control form-control-lg" id="subscribe3"
                                               placeholder="Enter email" name="subscribe3" required="">
                                        <i class="fa fa-envelope form-control-feedback"></i>
                                    </div>
                                    <button type="submit"
                                            class="btn btn-lg btn-gray-transparent btn-animated margin-clear">Submit <i
                                            class="fa fa-send"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
        </div>
    </section>
    <!-- section end -->

@endsection
