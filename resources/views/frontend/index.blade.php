@extends('welcome')
@section('content')

    <!-- SLIDER -->
    <!-- banner start -->
    <div class="banner clearfix">
        <div class="slideshow">
            <!-- slider revolution start -->
            <div class="slider-banner-container">
                <div class="slider-banner-fullwidth-big-height">
                    <ul class="slides">
                        <!-- slide 1 start -->
                        <!-- ================ -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="500"
                            data-saveperformance="on" data-title="Dogotki">
                            <!-- main image -->
                            <img src="/assets/img/dogotki.jpg" alt="slidebg1"
                                 data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">
                            <!-- Transparent Background -->
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
                                 data-y="250"
                                 data-speed="500"
                                 data-start="1300"
                                 data-easing="easeOutQuad">
                                <div class="separator-2 light"></div>
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfb fadeout small_white text-center"
                                 data-x="left"
                                 data-y="350"
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
                            data-saveperformance="on" data-title="Zgane Pijace">

                            <!-- main image -->
                            <img src="/assets/img/zgane.jpg" alt="slidebg1"
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
                                 data-easing="easeOutQuad"><span class="text-default">Zgane</span><br> Pijace
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption sfb fadeout medium_white text-right hidden-xs"
                                 data-x="right"
                                 data-y="320"
                                 data-speed="500"
                                 data-start="1300"
                                 data-easing="easeOutQuad"
                                 data-endspeed="600">
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfb fadeout small_white text-right text-center"
                                 data-x="right"
                                 data-y="400"
                                 data-speed="500"
                                 data-start="1600"
                                 data-easing="easeOutQuad"
                                 data-endspeed="600"><a href="{{route('frontend.products')}}"
                                                        class="btn btn-default btn-animated">Pogledajte<i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </li>
                        <!-- slide 2 end -->

                        <!-- slide 3 start -->
                        <!-- ================ -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="500"
                            data-saveperformance="on" data-title="PUBLIKA PUB">

                            <!-- main image -->
                            <img src="/assets/img/publikapub.jpg" alt="slidebg1"
                                 data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">

                            <!-- Transparent Background -->
                            <div class="tp-caption"
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
                                 data-easing="easeOutQuad"><span style="color: black">PUBLIKA PUB</span>
                                <div class="separator-3 dark"></div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfb fadeout large_white tp-resizeme hidden-xs"
                                 data-x="right"
                                 data-y="300"
                                 data-speed="500"
                                 data-start="1300"
                                 data-easing="easeOutQuad"
                                 data-endspeed="600"><a href="{{route('frontend.products')}}"
                                                        class="btn btn-dark btn-animated">Pogledajte<i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </li>
                        <!-- slide 3 end -->
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
            <!-- slider revolution end -->
        </div>
    </div>
    <!-- banner end -->


    <!-- SLIDER END -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}" style="color: black">Domov</a>
                </li>
                <!--<li class="active">Blog Right Sidebar</li>-->
            </ol>
        </div>
    </div>

    <!-- PRODUCTS Naslov-->
    <section class="section dark-bg" style="background-position: 50% 52%;background-color: #0c9ec7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="title">Akciski Izdelki</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRODUCTS Naslov End -->
    <!-- PRODUCTS AKCIJA -->

    <!-- PRODUCTS AKCIJA  END -->

    <section class="section light-gray-bg clearfix">
        <div class="container">
            <div class="row">
                <div class="owl-carousel carousel-autoplay">
                    @foreach($products as $product)
                        <div class="listing-item" style="padding: 10px">
                            <div class="overlay-container bordered rounded-1 overlay-visible">
                                <img src="/assets/img/products/thumbnails/{{$product->image}}"
                                     alt="" width="260">
                                <span class="badge" style="color: red; border: 1px solid red; border-radius: 8px">{{$product->discount}}% OFF</span>
                                <div class="overlay-to-top links">
														<span class="small">
															<a href="{{route('frontend.productView', $product->slug)}}"
                                                               class="btn-sm-link"><i
                                                                    class="icon-link pr-5"></i>View Details</a>
														</span>
                                </div>
                            </div>
                            <div class="body">
                                <h3>
                                    <a href="{{route('frontend.productView', $product->slug)}}"><strong>{{$product->title}}</strong></a>
                                </h3>
                                <p class="small"><i>{{strip_tags($product->brand->name)}}</i></p>
                                <div class="row grid-space-10">
                                    <form action="{{ route('add.to.cart')}}" method="POST" class="clearfix"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <span class="product price" style="color: red"><s
                                                            class="small text-muted">{{$product->price}}€</s> {{$product->action}}&nbsp;€</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="text-center" style="padding-left: 10px">
                                                    <select class="form-control pull-left" name="quantity">
                                                        <option value="1" selected>1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group pull-right">
                                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                                    <input type="hidden" value="{{ $product->title }}" name="title">
                                                    <input type="hidden" value="{{$product->brand->name}}" name="brand">
                                                    <input type="hidden" value="{{ $product->action }}" name="price">
                                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                                    <button type="submit"
                                                            class="margin-clear btn btn-gray-transparent btn-animated">
                                                        Add<i class="fa fa-shopping-cart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- BRANDS Naslov-->
    <section class="section dark-bg" style="background-position: 50% 52%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <h2 style="padding-top: 10px" class="title">Brands</h2>
                            <p><a href="{{ route('frontend.brands') }}" class="btn btn-sm btn-default btn-animated">Preberite
                                    Vec<i
                                        class="fa fa-arrow-right pl-20"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BRANDS Naslov End-->

    <!-- BRANDS-->
    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="separator-2"></div>
                    <h4>Companies we work with!!!!.</h4>
                    <div class="clients-container">
                        <div class="clients">
                            <div class="row">
                                @foreach($brands as $brand)
                                    <div class="col-md-4">
                                        <div class="listing-item pl-10 pr-10 mb-20">
                                            <div class="overlay-container bordered overlay-visible">
                                                <img src="/assets/img/brands/thumbnails/{{$brand->image}}"
                                                     alt="{{$brand->name}}">
                                                <div class="overlay-to-top links">
														<span class="small">
															<a href="{{$brand->weblink}}" class="btn-sm-link"><i
                                                                    class="fa fa-external-link pr-10"></i>{{$brand->name}}</a>
															<a href="{{URL::to('/e-shop/?brand[]='.$brand->id)}}"
                                                               class="btn-sm-link"><i
                                                                    class="icon-link pr-5"></i>View Products</a>
														</span>
                                                </div>
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
    <!-- BRANDS END-->

    <!-- CATEGORIES Title -->
    <section class="section dark-bg" style="background-position: 50% 52%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="title">Vrsta Pijac</h1>
                                <p><a href="{{ route('frontend.categories') }}" class="btn btn-sm btn-default btn-animated">Preberite
                                        Vec<i
                                            class="fa fa-arrow-right pl-20"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CATEGORIES Title End -->
    <!-- CATEGORIES -->
    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="owl-carousel carousel-autoplay pl-10 pr-10">
            @foreach($categories as $category)
                <div class="listing-item rounded pl-8 pr-10 mb-20">
                    <div class="overlay-container bordered rounded-1 overlay-visible"
                         style="background-image: url(/assets/img/categories/medium/{{$category->image}}); background-size: cover; background-repeat: no-repeat; background-position: center">
                        <div class="overlay-bottom">
                            <div class="text">
                                <a href="{{URL::to('/e-shop/?category[]='.$category->id)}}" class="panel-title"
                                   style="font-size: 25px"><strong>{{$category->name}}</strong></a>
                                <div class="separator light"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- CATEGORIES End-->


    <!-- USLUGI start -->
    <!-- ================ -->
    <section class="section dark-translucent-bg pv-40"
             style="background-image:url('/assets/img/logo.jpg');background-position: 50% 40%; background-size: cover">
        <div class="container">
            <div class="row grid-space-10">
                <div class="col-md-4 col-sm-6">
                    <div class="pv-30 ph-10 feature-box text-center object-non-visible"
                         data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon default-bg"><i class="fa fa-diamond"></i></span>
                        <h3>Bresplacna dostava</h3>
                        <div class="separator clearfix"></div>
                        <p>For purchases more than 50 €</p>
                        <!--
                        <a href="{route('frontend.feedback')}}" class="link-dark">Preberite vec<i
                                class="pl-5 fa fa-angle-double-right"></i></a>
                                -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pv-30 ph-10 feature-box text-center object-non-visible"
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
                <div class="col-md-4 col-sm-6">
                    <div class="pv-30 ph-10 feature-box text-center object-non-visible"
                         data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                        <span class="icon default-bg"><i class="icon-globe"></i></span>
                        <h3 class="pl-10 pr-10">O nas</h3>
                        <div class="separator clearfix"></div>
                        <a href="{{ route('frontend.about') }}" class="link-dark">Preberite vec<i
                                class="pl-5 fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  USLUGI end -->


@endsection
