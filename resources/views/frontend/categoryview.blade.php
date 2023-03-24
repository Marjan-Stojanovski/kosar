@extends('welcome')
@section('content')

    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">

                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title">Shop Product</h1>
                    <div class="separator-2"></div>
                    <!-- page-title end -->

                    <div class="row">
                        <div class="col-md-5">

                            <!-- Tab panes -->
                            <div class="tab-content clear-style">

                                <img src="/assets/img/products/medium/{{$products->image}}" alt="">

                            </div>

                            <!-- pills end -->
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
                                    <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
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

                            <div class="light-gray-bg p-20 bordered clearfix">
                                <span class="product price"><i class="icon-tag pr-10"></i>{{$products->price}}&nbsp;€</span>
                                <div class="product elements-list pull-right clearfix">
                                    <input type="submit" value="Add to Cart" class="margin-clear btn btn-default">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->

    <!-- section start -->
    <!-- ================ -->
    <section class="pv-30 light-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs style-4" role="tablist">
                        <li class="active"><a href="#h2tab2" role="tab" data-toggle="tab"><i class="fa fa-files-o pr-5"></i>Specifications</a></li>
                        <li><a href="#h2tab3" role="tab" data-toggle="tab"><i class="fa fa-star pr-5"></i>(3) Reviews</a></li>
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
                            <div class="comments margin-clear space-top">
                                <!-- comment start -->
                                <div class="comment clearfix">
                                    <div class="comment-avatar">
                                        <img class="img-circle" src="images/avatar.jpg" alt="avatar">
                                    </div>
                                    <header>
                                        <h3>Amazing!</h3>
                                        <div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 12:31</div>
                                    </header>
                                    <div class="comment-content">
                                        <div class="comment-body clearfix">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                            <a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- comment end -->

                                <!-- comment start -->
                                <div class="comment clearfix">
                                    <div class="comment-avatar">
                                        <img class="img-circle" src="images/avatar.jpg" alt="avatar">
                                    </div>
                                    <header>
                                        <h3>Really Nice!</h3>
                                        <div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 10:31</div>
                                    </header>
                                    <div class="comment-content">
                                        <div class="comment-body clearfix">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                            <a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- comment end -->

                                <!-- comment start -->
                                <div class="comment clearfix">
                                    <div class="comment-avatar">
                                        <img class="img-circle" src="images/avatar.jpg" alt="avatar">
                                    </div>
                                    <header>
                                        <h3>Worth to Buy!</h3>
                                        <div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 09:31</div>
                                    </header>
                                    <div class="comment-content">
                                        <div class="comment-body clearfix">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                            <a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- comment end -->
                            </div>
                            <!-- comments end -->

                            <!-- comments form start -->
                            <div class="comments-form">
                                <h2 class="title">Add your Review</h2>
                                <form role="form" id="comment-form">
                                    <div class="form-group has-feedback">
                                        <label for="name4">Name</label>
                                        <input type="text" class="form-control" id="name4" placeholder="" name="name4" required>
                                        <i class="fa fa-user form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="subject4">Subject</label>
                                        <input type="text" class="form-control" id="subject4" placeholder="" name="subject4" required>
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
                                        <textarea class="form-control" rows="8" id="message4" placeholder="" name="message4" required></textarea>
                                        <i class="fa fa-envelope-o form-control-feedback"></i>
                                    </div>
                                    <input type="submit" value="Submit" class="btn btn-default">
                                </form>
                            </div>
                            <!-- comments form end -->
                        </div>
                    </div>
                </div>

                <!-- sidebar start -->
                <!-- ================ -->
                <aside class="col-md-4 col-lg-3 col-lg-offset-1">
                    <div class="sidebar">
                        <div class="block clearfix">
                            <h3 class="title">Related Products</h3>
                            <div class="separator-2"></div>
                            <div class="media margin-clear">
                                <div class="media-left">
                                    <div class="overlay-container">
                                        <img class="media-object" src="images/product-5.jpg" alt="blog-thumb">
                                        <a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"><a href="shop-product.html">Lorem ipsum dolor sit amet</a></h6>
                                    <p class="margin-clear">
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star text-default"></i>
                                    </p>
                                    <p class="price">$99.00</p>
                                </div>
                                <hr>
                            </div>
                            <div class="media margin-clear">
                                <div class="media-left">
                                    <div class="overlay-container">
                                        <img class="media-object" src="images/product-6.jpg" alt="blog-thumb">
                                        <a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"><a href="shop-product.html">Eum repudiandae ipsam</a></h6>
                                    <p class="margin-clear">
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                    <p class="price">$299.00</p>
                                </div>
                                <hr>
                            </div>
                            <div class="media margin-clear">
                                <div class="media-left">
                                    <div class="overlay-container">
                                        <img class="media-object" src="images/product-7.jpg" alt="blog-thumb">
                                        <a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"><a href="shop-product.html">Quia aperiam velit fuga</a></h6>
                                    <p class="margin-clear">
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                    <p class="price">$9.99</p>
                                </div>
                                <hr>
                            </div>
                            <div class="media margin-clear">
                                <div class="media-left">
                                    <div class="overlay-container">
                                        <img class="media-object" src="images/product-8.jpg" alt="blog-thumb">
                                        <a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"><a href="shop-product.html">Fugit non natus officiis</a></h6>
                                    <p class="margin-clear">
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star text-default"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                    <p class="price">$399.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- sidebar end -->

            </div>
        </div>
    </section>
    <!-- section end -->

@endsection
