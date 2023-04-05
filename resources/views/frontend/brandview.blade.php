@extends('welcome')
@section('content')

    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}" style="color: black">Domov</a></li>
                            <li class="active">{{$brand->name}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="main col-md-12">
                    <!-- page-title start -->
                    <!-- ================ -->
                    <div class="separator"></div>
                    <h1 class="page-title text-center">{{$brand->name}}</h1>
                    <div class="separator"></div>
                    <br>
                    <div class="process">
                        <div class="tab-content clear-style">
                            <div class="tab-pane active" id="pill-pr-1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="title">Opis {{$brand->name}} company</h4>
                                        <p>Ipsum dolor sit amet, consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea sit enim sint deleniti saepe esse nisi nesciunt fuga eaque dicta tenetur, cupiditate illo, consequuntur unde dolores quis dolore rem ex asperiores error. Labore saepe beatae harum quod fuga ipsam! Iusto earum iste similique, quam esse rerum, quae atque inventore consequuntur voluptatum amet deserunt mollitia? Tempore fugit, cumque dolor eaque doloremque iusto nostrum excepturi unde! Similique ipsum fugit eius laboriosam nihil quos, quia et! Earum iure, sapiente. Molestiae unde earum fugiat voluptate incidunt.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repellendus autem corporis obcaecati, laboriosam ipsam ea, alias saepe libero ab consequuntur.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="//player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
                                            <p><a href="http://vimeo.com/29198414">Introducing Vimeo Music Store</a> from <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
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
                                                <!--
                                                <a class="overlay-link popup-img-single" href="/assets/frontend/images/product-1.jpg"><i class="fa fa-search-plus"></i></a>
                                                <span class="badge">30% OFF</span>
                                                -->
                                                <div class="overlay-to-top links">
														<span class="small">
															<a href="{{$product->brand->weblink}}" class="btn-sm-link"><i
                                                                    class="fa fa-heart-o pr-10"></i>{{$product->title}}</a>
															<a href="{{route('frontend.productview', $product->slug)}}" class="btn-sm-link"><i
                                                                    class="icon-link pr-5"></i>View Details</a>
														</span>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <h3><a href="{{route('frontend.productview', $product->slug)}}">{{$product->title}}</a></h3>
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
                </div>
            </div>
        </div>
    </section>
@endsection
