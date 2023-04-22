@extends('welcome')
@section('content')

    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}"
                                                       style="color: black">Domov</a></li>
                <li class="active" style="color: black">{{$brand->name}}</li>
            </ol>
        </div>
    </div>
    <section class="section dark-bg" style="background-position: 50% 52%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="title">{{$brand->name}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="main col-md-12">
                    <br>
                    <div class="process">
                        <div class="tab-content clear-style">
                            <div class="tab-pane active" id="pill-pr-1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="title">Opis {{$brand->name}} company</h4>
                                        <p>{!! $brand->description !!}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="overlay-container">
                                            <img
                                                style="width: auto; height: 100%; margin: 0 auto; background-size: contain;"
                                                src="/assets/img/brands/medium/{{$brand->image}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                <h2 class="page-title text-center">Izdelki</h2>
                <div class="separator"></div>
                <div class="col-md-12">
                    <div class="tab-content clear-style">
                        <div class="tab-pane active" id="pill-1">
                            <div class="row masonry-grid-fitrows grid-space-10">
                                @foreach($products as $product)
                                    <div class="col-md-3 col-sm-6 masonry-grid-item">
                                        <div class="listing-item white-bg bordered mb-20">
                                            <div class="overlay-container">
                                                <img src="/assets/img/products/medium/{{$product->image}}" alt="">
                                                <div class="overlay-to-top links">
														<span class="small">
															<a href="{{$product->brand->weblink}}"
                                                               class="btn-sm-link"><i
                                                                    class="fa fa-heart-o pr-10"></i>{{$product->title}}</a>
															<a href="{{route('frontend.productView', $product->slug)}}"
                                                               class="btn-sm-link"><i
                                                                    class="icon-link pr-5"></i>View Details</a>
														</span>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <h3>
                                                    <a href="{{route('frontend.productView', $product->slug)}}">{{$product->title}}</a>
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
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
