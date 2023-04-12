@extends('welcome')
@section('content')
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}" style="color: black">Domov</a>
                </li>
                <li class="active" style="color: black">E-Trgovina</li>
            </ol>
        </div>
    </div>

    <!-- PRODUCTS -->
    <section class="section dark-bg" style="background-position: 50% 52%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="title">Izdelki</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section start -->
    <section class="main-container">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- main start -->
                    <!-- ================ -->
                    <div class="main col-md-8 col-lg-offset-1 col-md-push-4 col-lg-push-3">
                        <!-- page-title start -->
                        <!-- ================ -->
                        <h1 class="page-title text-center">Blog Left Sidebar</h1>
                        <div class="separator-2"></div>
                        <!-- page-title end -->
                        <div class="col-md-12">
                            <div class="tab-content clear-style">
                                <div class="tab-pane active" id="pill-1">
                                    <div class="row masonry-grid-fitrows grid-space-10">
                                        @foreach($products as $product)
                                                <?php
                                            if (isset($product->action)) { ?>
                                            <div class="col-md-4 col-sm-6 masonry-grid-item">
                                                <div class="listing-item white-bg bordered mb-20">
                                                    <div class="overlay-container">
                                                        <img src="/assets/img/products/medium/{{$product->image}}"
                                                             alt="">
                                                        <span class="badge" style="color: red; border: 1px solid red">{{$product->discount}}% OFF</span>
                                                        <div class="overlay-to-top links">
														<span class="small">
															<a href="{{route('frontend.productview', $product->id)}}"
                                                               class="btn-sm-link"><i
                                                                    class="icon-link pr-5"></i>View Details</a>
														</span>
                                                        </div>
                                                    </div>
                                                    <div class="body">
                                                        <h3>
                                                            <a href="{{route('frontend.productview', $product->id)}}">{{$product->title}}</a>
                                                        </h3>
                                                        <p class="small"> {{strip_tags($product->brand->name)}}</p>
                                                        <div class="elements-list clearfix">
                                                            <span class="price"><del>{{$product->price}}</del></span>
                                                            <span class="price"> &nbsp;€{{$product->action}}</span>
                                                            <a href="#"
                                                               class="pull-right margin-clear btn btn-gray-transparent btn-sm btn-animated">Add
                                                                To Cart<i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } else { ?>
                                            <div class="col-md-4 col-sm-6 masonry-grid-item">
                                                <div class="listing-item white-bg bordered mb-20">
                                                    <div class="overlay-container">
                                                        <img src="/assets/img/products/medium/{{$product->image}}"
                                                             alt="">
                                                        <div class="overlay-to-top links">
														<span class="small">
															<a href="{{route('frontend.productview', $product->id)}}"
                                                               class="btn-sm-link"><i
                                                                    class="icon-link pr-5"></i>View Details</a>
														</span>
                                                        </div>
                                                    </div>
                                                    <div class="body">
                                                        <h3>
                                                            <a href="{{route('frontend.productview', $product->id)}}">{{$product->title}}</a>
                                                        </h3>
                                                        <p class="small"> {{strip_tags($product->brand->name)}}</p>
                                                        <div class="elements-list clearfix">
                                                            <span class="price"> &nbsp;€{{$product->price}}</span>
                                                            <a href="#"
                                                               class="pull-right margin-clear btn btn-gray-transparent btn-sm btn-animated">Add
                                                                To Cart<i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php } ?>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- pills end -->
                        </div>
                        <div class="col-md-12 text-center">
                            {{ $products->links() }}
                        </div>
                    </div>
                    <!-- main end -->

                    <!-- sidebar start -->
                    <!-- ================ -->
                    <aside class="col-md-3 col-lg-3 col-md-pull-8 col-lg-pull-9">
                        <div class="sidebar">
                            <h3 class="title">Filteri</h3>
                            <div class="separator-2"></div>
                            <div class="block clearfix">
                                <h3 class="title">Kategorija</h3>
                                <nav>
                                    <ul class="nav nav-pills nav-stacked">
                                        @foreach($categories as $category)
                                            <li><input type="checkbox">   {{$category->name}}</li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                            <div class="block clearfix">
                                <h3 class="title">Brand</h3>
                                <nav>
                                    <ul class="nav nav-pills nav-stacked">
                                        @foreach($brands as $brand)
                                        <li><input type="checkbox">   {{$brand->name}}</li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                            <div class="block clearfix">
                                <h3 class="title">Volumen</h3>
                                <nav>
                                    <ul class="nav nav-pills nav-stacked" >
                                        @foreach($volumes as $volume)
                                            <li><input type="checkbox" data-toggle="collapse">   {{$volume->volume}}</a></li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-short" style="color: black"></i> Kategorija
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul class="nav nav-pills nav-stacked">
                                            @foreach($categories as $category)
                                                <li><input type="checkbox">   {{$category->name}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-short" style="color: black"></i> Brand
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul class="nav nav-pills nav-stacked">
                                            @foreach($brands as $brand)
                                                <li><input type="checkbox">   {{$brand->name}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-short" style="color: black"></i> Volumen
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <ul class="nav nav-pills nav-stacked" >
                                            @foreach($volumes as $volume)
                                                <li><input type="checkbox" data-toggle="collapse">   {{$volume->volume}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- sidebar end -->
                </div>
            </div>
        </div>
    </section>
    <!-- ================ -->

    <!-- section end -->

@endsection
