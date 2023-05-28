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
    <section class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container mt-4">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <h1 class="page-title text-center">Blog Left Sidebar</h1>
                    <br>
                    <br>
                    <!-- sidebar start -->
                    <aside class="col-md-3 ">
                        <form action="{{ route('frontend.shop') }}" method="GET">
                            <div class="sidebar">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="title">Filteri</h3>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary btn-sm text-end">Show</button>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="panel-group" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default" style="border-top-left-radius: 30px; border-top-right-radius: 30px">
                                    <div class="panel-heading" style="background-color: #0c9ec7; color: whitesmoke; border-radius: 30px">
                                        <h4 class="panel-title">
                                            <a class="collapsed"
                                               data-parent="#accordion" href="#collapseOne" aria-expanded="false"
                                               aria-controls="collapseOne">
                                                Kategorija
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="" role="tabpanel"
                                         aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <ul class="nav nav-pills nav-stacked list-group">
                                                @foreach($categories as $category)
                                                        <?php
                                                        $checked = [];
                                                        if (isset($_GET['category'])) {
                                                            $checked = $_GET['category'];
                                                        }
                                                        ?>
                                                    <div class="mb-1">
                                                        <input type="checkbox" name="category[]"
                                                               value="{{ $category->id }}"
                                                               @if(in_array($category->id, $checked)) checked @endif
                                                        />
                                                        {{ $category->name }}
                                                    </div>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="panel panel-default" style="border-top-left-radius: 30px; border-top-right-radius: 30px">
                                    <div class="panel-heading" style="background-color: #0c9ec7; color: whitesmoke; border-radius: 30px">
                                        <h4 class="panel-title">
                                            <a class="collapsed"
                                               data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                               aria-controls="collapseTwo">
                                                Brand
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="" role="tabpanel"
                                         aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <ul class="nav nav-pills nav-stacked list-group">
                                                @foreach($brands as $brand)
                                                        <?php
                                                        $checked = [];
                                                        if (isset($_GET['brand'])) {
                                                            $checked = $_GET['brand'];
                                                        }
                                                        ?>
                                                    <li><input type="checkbox" name="brand[]" value="{{ $brand->id }}"
                                                               @if(in_array($brand->id, $checked)) checked @endif
                                                        /> {{$brand->name}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="panel panel-default" style="border-top-left-radius: 30px; border-top-right-radius: 30px">
                                    <div class="panel-heading" style="background-color: #0c9ec7; color: whitesmoke; border-radius: 30px">
                                        <h4 class="panel-title">
                                            <a role="button"
                                               href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                Volume
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="" role="tabpanel"
                                         aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <ul class="nav nav-pills nav-stacked list-group">
                                                @foreach($volumes as $volume)
                                                        <?php
                                                        $checked = [];
                                                        if (isset($_GET['volume'])) {
                                                            $checked = $_GET['volume'];
                                                        }
                                                        ?>
                                                    <li><input type="checkbox" name="volume[]" value="{{ $volume->id }}"
                                                               @if(in_array($volume->id, $checked)) checked @endif
                                                        /> {{$volume->volume}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="panel panel-default" style="border-top-left-radius: 30px; border-top-right-radius: 30px">
                                    <div class="panel-heading"
                                         style="background-color: #0c9ec7; color: white; border-radius: 30px">
                                        <h4 class="panel-title">
                                            <a role="button"
                                               href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                Drzava
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="nav nav-pills nav-stacked list-group">
                                            @foreach($countries as $country)
                                                    <?php
                                                    $checked = [];
                                                    if (isset($_GET['country'])) {
                                                        $checked = $_GET['country'];
                                                    }
                                                    ?>
                                                <li><input type="checkbox" name="country[]"
                                                           value="{{ $country->id }}"
                                                           @if(in_array($country->id, $checked)) checked @endif
                                                    /> {{$country->name}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </aside>
                    <!-- sidebar end -->
                    <div class="col-md-9 ">

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
                                                        <img class="img-responsive"
                                                             style="margin-left: auto; margin-right: auto"
                                                             src="/assets/img/products/thumbnails/{{$product->image}}"
                                                             alt="{{$product->title}}">
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
                                                        <div class="separator-3"></div>
                                                        <h3>
                                                            <a href="{{route('frontend.productView', $product->id)}}"><strong>{{$product->title}}</strong></a>
                                                        </h3>
                                                        <p class="small"> {{strip_tags($product->brand->name)}}</p>
                                                        <div class="elements-list clearfix">
                                                            <span style="color: red;"><del> €{{$product->price}}</del></span>
                                                            <span class="price"> &nbsp;€{{$product->action}}</span>
                                                            <form action="{{ route('add.to.cart')}}" method="POST"
                                                                  enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="number" placeholder="1" name="quantity"
                                                                       style="width: 50px" value="1"> Quantity
                                                                <input type="hidden" value="{{ $product->id }}"
                                                                       name="id">
                                                                <input type="hidden" value="{{ $product->title }}"
                                                                       name="title">
                                                                <input type="hidden" value="{{$product->brand->name}}"
                                                                       name="brand">
                                                                <input type="hidden" value="{{ $product->action }}"
                                                                       name="price">
                                                                <input type="hidden" value="{{ $product->image }}"
                                                                       name="image">
                                                                <button type="submit"
                                                                        class="pull-right margin-clear btn btn-gray-transparent btn-sm btn-animated">
                                                                    Add<i class="fa fa-shopping-cart"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } else { ?>
                                            <div class="col-md-4 col-sm-6 masonry-grid-item">
                                                <div class="listing-item white-bg bordered mb-20">
                                                    <div class="overlay-container">
                                                        <img class="img-responsive"
                                                             style="margin-left: auto; margin-right: auto"
                                                             src="/assets/img/products/thumbnails/{{$product->image}}"
                                                             alt="{{$product->title}}">
                                                        <div class="overlay-to-top links">
														<span class="small">
															<a href="{{route('frontend.productView', $product->id)}}"
                                                               class="btn-sm-link"><i
                                                                    class="icon-link pr-5"></i>View Details</a>
														</span>
                                                        </div>
                                                    </div>
                                                    <div class="body">
                                                        <div class="separator-3"></div>
                                                        <h3>
                                                            <a href="{{route('frontend.productView', $product->id)}}"><strong>{{$product->title}}</strong></a>
                                                        </h3>
                                                        <p class="small"> {{$product->brand->name}}</p>
                                                        <div class="elements-list clearfix">
                                                            <span class="price"> &nbsp;€{{$product->price}}</span>
                                                            <form action="{{ route('add.to.cart')}}" method="POST">
                                                                @csrf
                                                                <input type="number" placeholder="1" name="quantity"
                                                                       style="width: 50px" value="1"> Quantity
                                                                <input type="hidden" value="{{ $product->id }}"
                                                                       name="id">
                                                                <input type="hidden" value="{{ $product->title }}"
                                                                       name="title">
                                                                <input type="hidden" value="{{$product->brand->name}}"
                                                                       name="brand">
                                                                <input type="hidden" value="{{ $product->price }}"
                                                                       name="price">
                                                                <input type="hidden" value="{{ $product->image }}"
                                                                       name="image">
                                                                <button type="submit"
                                                                        class="pull-right margin-clear btn btn-gray-transparent btn-sm btn-animated">
                                                                    Add<i class="fa fa-shopping-cart"></i></button>
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
                        <div class="col-md-12 text-center">
                            {{ $products->links() }}
                        </div>
                    </div>
                    <!-- main end -->

                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
