@extends('welcome')
@section('content')

    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}"
                                                       style="color: black">Domov</a></li>
                <li class="active" style="color: black">{{$category->name}}</li>
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
                    <div class="tab-content clear-style">
                        <div class="tab-pane active" id="pill-1">
                            <div class="row masonry-grid-fitrows grid-space-10">
                                @foreach($products as $product)
                                        <?php
                                    if (isset($product->action)) { ?>
                                    <div class="col-md-4 col-sm-6 masonry-grid-item">
                                        <div class="listing-item white-bg bordered mb-20">
                                            <div class="overlay-container">
                                                <img src="/assets/img/products/thumbnails/{{$product->image}}"
                                                     alt="">
                                                <span class="badge" style="color: red; border: 1px solid red">{{$product->discount}}% OFF</span>
                                                <div class="overlay-to-top links">
														<span class="small">
															<a href="{{route('frontend.productView', $product->id)}}"
                                                               class="btn-sm-link"><i
                                                                    class="icon-link pr-5"></i>View Details</a>
														</span>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <h3>
                                                    <a href="{{route('frontend.productView', $product->id)}}">{{$product->title}}</a>
                                                </h3>
                                                <p class="small"> {{strip_tags($product->brand->name)}}</p>
                                                <div class="elements-list clearfix">
                                                    <span style="color: red;"><del> €{{$product->price}}</del></span>
                                                    <span class="price"> &nbsp;€{{$product->action}}</span>
                                                    <form action="{{ route('cart.store')}}" method="POST"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                            <?php if(isset(Auth::user()->name)) { ?>
                                                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                                        <input type="hidden" value="{{ $product->action }}" name="price">
                                                        <input type="hidden" value="{{ $product->image }}" name="image">
                                                        <input type="number" placeholder="1" name="quantity" style="width: 50px"> Quantity
                                                        <button type="submit"
                                                                class="pull-right margin-clear btn btn-gray-transparent btn-sm btn-animated">
                                                            Add<i class="fa fa-shopping-cart"></i></button>
                                                        <?php } else { ?>
                                                        <a onclick="alertLogin()"
                                                           class="pull-right margin-clear btn btn-gray-transparent btn-sm btn-animated">
                                                            Add<i class="fa fa-shopping-cart"></i></a>
                                                        <?php } ?>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { ?>
                                    <div class="col-md-4 col-sm-6 masonry-grid-item">
                                        <div class="listing-item white-bg bordered mb-20">
                                            <div class="overlay-container">
                                                <img class="img-responsive" src="/assets/img/products/thumbnails/{{$product->image}}"
                                                     alt="">
                                                <div class="overlay-to-top links">
														<span class="small">
															<a href="{{route('frontend.productView', $product->id)}}"
                                                               class="btn-sm-link"><i
                                                                    class="icon-link pr-5"></i>View Details</a>
														</span>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <h3>
                                                    <a href="{{route('frontend.productView', $product->id)}}">{{$product->title}}</a>
                                                </h3>
                                                <p class="small"> {{$product->brand->name}}</p>
                                                <div class="elements-list clearfix">
                                                    <span class="price"> &nbsp;€{{$product->price}}</span>
                                                    <form action="{{ route('cart.store')}}" method="POST">
                                                        @csrf
                                                            <?php if(isset(Auth::user()->name)) { ?>
                                                        <input type="number" placeholder="1" name="quantity" style="width: 50px"> Quantity

                                                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                                        <input type="hidden" value="{{ $product->title }}" name="title">
                                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                                        <input type="hidden" value="{{ $product->image }}" name="image">


                                                        <button type="submit"
                                                                class="pull-right margin-clear btn btn-gray-transparent btn-sm btn-animated">
                                                            Add<i class="fa fa-shopping-cart"></i></button>
                                                        <?php } else { ?>
                                                        <p onclick="alertLogin()"
                                                           class="pull-right margin-clear btn btn-gray-transparent btn-sm btn-animated">
                                                            Add<i class="fa fa-shopping-cart"></i></p>
                                                        <?php } ?>
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
