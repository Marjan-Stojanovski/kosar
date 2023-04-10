@extends('welcome')
@section('content')
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}">Domov</a></li>
                <!--<li class="active">Blog Right Sidebar</li>-->
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
    <!-- ================ -->
    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content clear-style">
                        <div class="tab-pane active" id="pill-1">
                            <div class="row masonry-grid-fitrows grid-space-10">
                                @foreach($products as $product)
                                        <?php
                                    if (isset($product->action)) { ?>
                                    <div class="col-md-3 col-sm-6 masonry-grid-item">
                                        <div class="listing-item white-bg bordered mb-20">
                                            <div class="overlay-container">
                                                <img src="/assets/img/products/medium/{{$product->image}}" alt="">
                                                <span class="badge" style="color: red; border: 1px solid red">{{$product->discount}}% OFF</span>
                                                <div class="overlay-to-top links">
														<span class="small">
															<a href="{{route('frontend.productview', $product->id)}}" class="btn-sm-link"><i
                                                                    class="icon-link pr-5"></i>View Details</a>
														</span>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <h3><a href="{{route('frontend.productview', $product->id)}}">{{$product->title}}</a></h3>
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
                                    <div class="col-md-3 col-sm-6 masonry-grid-item">
                                        <div class="listing-item white-bg bordered mb-20">
                                            <div class="overlay-container">
                                                <img src="/assets/img/products/medium/{{$product->image}}" alt="">
                                                <div class="overlay-to-top links">
														<span class="small">
															<a href="{{route('frontend.productview', $product->id)}}" class="btn-sm-link"><i
                                                                    class="icon-link pr-5"></i>View Details</a>
														</span>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <h3><a href="{{route('frontend.productview', $product->id)}}">{{$product->title}}</a></h3>
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
        </div>
    </section>
    <!-- section end -->


@endsection
