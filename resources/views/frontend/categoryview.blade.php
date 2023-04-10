@extends('welcome')
@section('content')

    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}"
                                                                   style="color: black">Domov</a></li>
                            <li class="active">{{$category->name}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section dark-bg" style="background-position: 50% 52%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="title">{{$category->name}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <br>
                <div class="col-md-12">
                    <!-- pills start -->
                    <!-- ================ -->
                    <!-- Nav tabs -->
                    <!--
                    <ul class="nav nav-pills" role="tablist">
                        <li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="Latest Arrivals"><i
                                    class="icon-star"></i> Latest Arrivals</a></li>
                        <li><a href="#pill-2" role="tab" data-toggle="tab" title="Featured"><i class="icon-heart"></i>
                                Featured</a></li>
                        <li><a href="#pill-3" role="tab" data-toggle="tab" title="Top Sellers"><i
                                    class=" icon-up-1"></i> Top Sellers</a></li>
                    </ul>
                    -->
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
															<a href="{{$product->brand->weblink}}"
                                                               class="btn-sm-link"><i
                                                                    class="fa fa-heart-o pr-10"></i>{{$product->title}}</a>
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
                                                    <!--<span class="price"><del>$100.00</del> $70.00</span>-->
                                                    <span class="price"> &nbsp;€{{$product->price}}</span>
                                                    <a href="#"
                                                       class="pull-right margin-clear btn btn-gray-transparent btn-sm btn-animated">Add
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
@endsection
