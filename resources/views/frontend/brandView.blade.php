@extends('welcome')
@section('content')

    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}"
                                                       style="color: black">Domov</a></li>
                <li class="active" style="color: black"><a href="{{route('frontend.brands')}}"
                                                           style="color: black">Brands</a></li>
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
                                        <h3 class="title">{{$brand->name}} History</h3>
                                        <br>
                                        <br>
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
                <br>
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
                                                <img src="/assets/img/products/medium/{{$product->image}}" alt="{{$product->title}}">
                                                <span class="badge" style="color: red; border: 1px solid red">{{$product->discount}}% OFF</span>
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
                                                <div class="separator-3"></div>
                                                <h3>
                                                    <a href="{{route('frontend.productView', $product->slug)}}"><strong>{{$product->title}}</strong></a>
                                                </h3>
                                                <p class="small"> {{strip_tags($product->brand->name)}}</p>
                                                <div class="row grid-space-10">
                                                    <form action="{{ route('add.to.cart')}}" method="POST" class="clearfix"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <span class="product price" style="color: red"><s class="small text-muted">{{$product->price}}</s> {{$product->action}}&nbsp;€</span>
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
                                    </div>
                                    <?php } else { ?>
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
                                                <div class="separator-3"></div>
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
                                                                    <span class="product price">{{$product->price}}&nbsp;€</span>
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
                                    </div>
                                    <?php } ?>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
