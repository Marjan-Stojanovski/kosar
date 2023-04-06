@extends('welcome')
@section('content')

    <!-- main-container start -->
    <!-- ================ -->
    <div class="container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}" style="color: black">Domov</a>
                </li>
                <li class="active">{{$products->title}}</li>
            </ol>
        </div>
    </div>
    <section class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="tab-content clear-style">
                        <img src="/assets/img/products/medium/{{$products->image}}" alt="">
                    </div>
                </div>
                <div class="col-md-7 pv-30">
                    <h2>{{$products->title}}</h2>
                    <p>{{strip_tags($products->description)}}</p>
                    <hr class="mb-10">
                    <div class="clearfix mb-20">
										<span>
											<i class="fa fa-star text-default"></i>
											<i class="fa fa-star text-default"></i>
											<i class="fa fa-star text-default"></i>
											<i class="fa fa-star text-default"></i>
											<i class="fa fa-star"></i>
										</span>
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
                            <td class="text-right">{{$products->brand->name}}</td>
                        </tr>
                        <tr>
                            <td>Drzava</td>
                            <td class="text-right">{{$products->brand->country->name}}</td>
                        </tr>
                        <tr>
                            <td>Alkoholna stopnja</td>
                            <td class="text-right">{{$products->alcohol}}%</td>
                        </tr>
                        <tr class="text-end">
                            <td>Volumen</td>
                            <td class="text-right">{{$products->volume->volume}}</td>
                        </tr>

                        </tbody>
                    </table>
                    <!--
                    <div class="row grid-space-10">
                        <form role="form" class="clearfix">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control" value="1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Color</label>
                                    <select class="form-control">
                                        <option>Red</option>
                                        <option>White</option>
                                        <option>Black</option>
                                        <option>Blue</option>
                                        <option>Orange</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Size</label>
                                    <select class="form-control">
                                        <option>5.3"</option>
                                        <option>5.7"</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">

                            </div>
                        </form>
                    </div>
                    -->

                    <div class=" p-20 bordered clearfix">
                        <span class="product price">{{$products->price}}&nbsp;€</span>
                        <div class="product elements-list pull-right clearfix">
                            <input type="submit" value="Add to Cart" class="margin-clear btn btn-default">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main end -->
    </section>
    <!-- main-container end -->

    <!-- section start -->
    <!-- ================ -->
    <section class="pv-30 light-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs style-4" role="tablist">
                        <li class="active"><a href="#h2tab2" role="tab" data-toggle="tab"><i
                                    class="fa fa-files-o pr-5"></i>Specifications</a></li>
                        <li><a href="#h2tab3" role="tab" data-toggle="tab"><i class="fa fa-star pr-5"></i>(3)
                                Reviews</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content padding-top-clear padding-bottom-clear">
                        <div class="tab-pane fade in active" id="h2tab2">
                            <h4 class="space-top">Specifications</h4>
                            <hr>
                            <dl class="dl-horizontal">
                                {{strip_tags($products->description)}}
                            </dl>
                            <hr>
                        </div>
                        <div class="tab-pane fade" id="h2tab3">
                            <!-- comments start -->
                            <div class="col-md-7">
                            <div class="comments margin-clear space-top">
                                <!-- comment start -->
                                <div class="comment clearfix">
                                    <div class="comment-avatar">
                                        <img class="img-circle" src="images/avatar.jpg" alt="avatar">
                                    </div>
                                    <header>
                                        <h3>Amazing!</h3>
                                        <div class="comment-meta"><i class="fa fa-star text-default"></i> <i
                                                class="fa fa-star text-default"></i> <i
                                                class="fa fa-star text-default"></i> <i
                                                class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today,
                                            12:31
                                        </div>
                                    </header>
                                    <div class="comment-content">
                                        <div class="comment-body clearfix">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo </p>
                                            <a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i
                                                    class="fa fa-reply"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- comment end -->
                            </div>
                            <!-- comments end -->
                            </div>
                            <div class="col-md-5">
                            <!-- comments form start -->
                            <div class="comments-form">
                                <h2 class="title">Add your Review</h2>
                                <form role="form" id="comment-form">
                                    <div class="form-group has-feedback">
                                        <label for="name4">Name</label>
                                        <input type="text" class="form-control" id="name4" placeholder="" name="name4"
                                               required>
                                        <i class="fa fa-user form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="subject4">Subject</label>
                                        <input type="text" class="form-control" id="subject4" placeholder=""
                                               name="subject4" required>
                                        <i class="fa fa-pencil form-control-feedback"></i>
                                    </div>
                                    <div class="form-group">
                                        <label>Rating</label>
                                        <select class="form-control" id="review">
                                            <option value="five">5</option>
                                            <option value="four">4</option>
                                            <option value="three">3</option>
                                            <option value="two">2</option>
                                            <option value="one">1</option>
                                        </select>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="message4">Message</label>
                                        <textarea class="form-control" rows="8" id="message4" placeholder=""
                                                  name="message4" required></textarea>
                                        <i class="fa fa-envelope-o form-control-feedback"></i>
                                    </div>
                                    <input type="submit" value="Submit" class="btn btn-default">
                                </form>
                            </div>
                            </div>
                            <!-- comments form end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

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
    <!-- ================ -->
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
                                        <!--
                                        <a class="overlay-link popup-img-single" href="/assets/frontend/images/product-1.jpg"><i class="fa fa-search-plus"></i></a>
                                        <span class="badge">30% OFF</span>
                                        -->
                                        <!--
                                        <div class="overlay-to-top links">
														<span class="small">
															<a href="{{route('frontend.productview', $categoryProduct->id)}}"
                                                               class="btn-sm-link"><i
                                                                    class="icon-link pr-5"></i>View Details</a>
														</span>
                                        </div>
                                        -->
                                    </div>
                                    <div class="body" style="margin: 30px">
                                        <h3>
                                            <a href="{{route('frontend.productview', $categoryProduct->id)}}">{{$categoryProduct->title}}</a>
                                        </h3>
                                        <p class="small"> {{strip_tags($categoryProduct->brand->name)}}</p>
                                        <div class="elements-list clearfix">
                                            <!--<span class="price"><del>$100.00</del> $70.00</span>-->
                                            <span class="price"> &nbsp;€{{$categoryProduct->price}}</span>
                                            <a href="{{route('frontend.productview', $categoryProduct->id)}}"
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
