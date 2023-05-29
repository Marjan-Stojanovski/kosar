@extends('welcome')
@section('content')

    <!-- main-container start -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}" style="color: black">Domov</a>
                </li>
                <li class="active" style="color: black">{{$product->title}}</li>
            </ol>
        </div>
    </div>
    <section class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="tab-content clear-style">
                        <img src="/assets/img/products/medium/{{$product->image}}" alt="">
                    </div>
                </div>
                <div class="col-md-7 pv-30">
                    <h2>{{$product->title}}</h2>
                    <p>{!! $product->description !!}</p>
                    <hr class="mb-10">
                    <div class="clearfix mb-20">
                        <a href="#" class="wishlist"><i class="fa fa-heart-o pl-10 pr-5"></i>Wishlist</a>
                        <ul class="pl-20 pull-right social-links circle small clearfix margin-clear animated-effect-1">
                            <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i
                                        class="fa fa-google-plus"></i></a></li>
                            <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i
                                        class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Blagovna Znamka</td>
                            <td class="text-right">{{$product->brand->name}}</td>
                        </tr>
                        <tr>
                            <td>Drzava</td>
                            <td class="text-right">{{$product->brand->country->name}}</td>
                        </tr>
                        <tr>
                            <td>Alkoholna stopnja</td>
                            <td class="text-right">{{$product->alcohol}}%</td>
                        </tr>
                        <tr class="text-end">
                            <td>Volumen</td>
                            <td class="text-right">{{$product->volume->volume}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <div class="row grid-space-10">
                        <form action="{{ route('add.to.cart')}}" method="POST" class="clearfix"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-7">
                                <div class="form-group">
                                    <span class="product price"><s class="small text-muted">149.00€</s> {{$product->price}}&nbsp;€</span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="text-center">
                                    <select class="form-control" name="quantity">
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
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main-container end -->

    <!-- section start -->
    <section class="pv-30 light-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs style-4" role="tablist">
                        <li class="active"><a href="#h2tab2" role="tab" data-toggle="tab"><i
                                    class="fa fa-files-o pr-5"></i>Specifications</a></li>
                        <li><a href="#h2tab3" role="tab" data-toggle="tab"><i class="fa fa-star pr-5"></i>(3)
                                Reviews</a></li>
                    </ul>
                    <div class="tab-content padding-top-clear padding-bottom-clear">
                        <div class="tab-pane fade in active" id="h2tab2">
                            <h4 class="space-top">Specifications</h4>
                            <hr>
                            <dl class="dl-horizontal">
                                {!! $product->description !!}
                            </dl>
                            <hr>
                        </div>
                        <div class="tab-pane fade" id="h2tab3">
                            <div class="col-md-7">
                                <div class="comments margin-clear space-top">
                                    @foreach($comments as $comment)
                                        <div class="comment clearfix">
                                            <div class="comment-avatar">
                                                <img class="img-circle" src="images/avatar.jpg" alt="avatar">
                                            </div>
                                            <header>
                                                <h3>{{$comment->subject}}!</h3>
                                                <div class="comment-meta">
                                                    <i class="fa fa-star text-default"></i>
                                                    <i class="fa fa-star text-default"></i>
                                                    <i class="fa fa-star text-default"></i>
                                                    <i class="fa fa-star text-default"></i>
                                                    <i class="fa fa-star text-default"></i>
                                                    | Today, 12:31
                                                </div>
                                            </header>
                                            <div class="comment-content">
                                                <div class="comment-body clearfix">
                                                    <p>{{$comment->message}}</p>
                                                    <a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i
                                                            class="fa fa-reply"></i> Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="comments-form">
                                    <h2 class="title">Add your Review</h2>
                                    <form method="post" role="form" id="comment-form"
                                          action="{{route('comment.save')}}">
                                        @csrf
                                        <div class="form-group has-feedback">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Ime"
                                                   name="name"
                                                   required>
                                            <i class="fa fa-user form-control-feedback"></i>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject" placeholder=""
                                                   name="subject" required>
                                            <i class="fa fa-pencil form-control-feedback"></i>
                                        </div>
                                        <div class="form-group" hidden>
                                            <label for="product_id" class="form-label"></label>
                                            <select name="product_id" id="product_id"
                                                    class="form-control">
                                                <option value="{{ $product->id }}"></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="rating">Rating</label>
                                            <select class="form-control" id="review" name="rating">
                                                <option value="5">5</option>
                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="message">Message</label>
                                            <textarea class="form-control" rows="8" id="message" placeholder=""
                                                      name="message" required></textarea>
                                            <i class="fa fa-envelope-o form-control-feedback"></i>
                                        </div>
                                        <input type="submit" value="Submit" class="btn btn-default">
                                    </form>
                                </div>
                            </div>
                        </div>
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
                                <h1 class="title">Slicni Proizvodi</h1>
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
                <div class="col-md-8 col-md-offset-2">
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="owl-carousel carousel-autoplay pl-10 pr-10">
                    @foreach($categoryProducts as $categoryProduct)
                        <div class="tab-content clear-style">
                            <div class="tab-pane active" id="pill-1">
                                <div class="row masonry-grid-fitrows grid-space-10">
                                    <div class="overlay-container" style="margin: 10px">
                                        <img src="/assets/img/products/medium/{{$categoryProduct->image}}" alt="">
                                    </div>
                                    <div class="body" style="margin: 30px">
                                        <h3>
                                            <a href="{{route('frontend.productView', $categoryProduct->id)}}">{{$categoryProduct->title}}</a>
                                        </h3>
                                        <p class="small"> {{strip_tags($categoryProduct->brand->name)}}</p>
                                        <div class="elements-list clearfix">
                                            <span class="price"> &nbsp;€{{$categoryProduct->price}}</span>
                                            <a href="{{route('frontend.productView', $categoryProduct->id)}}"
                                               class="pull-right text-right btn btn-info">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
