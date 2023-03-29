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
                            data-saveperformance="on" data-title="Get 50% Sales">
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
                                 data-easing="easeOutQuad">Dogotki<br>
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
                                 data-endspeed="600">
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
															<a href="{{route('frontend.productview', $product->slug)}}" class="btn-sm-link"><i
                                                                    class="icon-link pr-5"></i>View Details</a>
														</span>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <h3>
                                                    <a href="{{route('frontend.productview', $product->slug)}}">{{$product->title}}</a>
                                                    </h3>
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
    <section class="section dark-bg" style="background-position: 50% 52%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="title">PARTNERJI</h1>
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
    <!-- section start -->
    <!-- ================ -->
    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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



@endsection
