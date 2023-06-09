@extends('welcome')
@section('content')

    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}"
                                                       style="color: black">Domov</a></li>
                <li class="active" style="color: black"><a href="{{route('frontend.brands')}}"
                                                           style="color: black">Brands</a></li>
            </ol>
            <br>
        </div>
    </div>
    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title text-center">Brands</h1>
                    <div class="separator"></div>
                    <br>
                    <br>
                </div>

                <div class="col-md-12">
                    <div class="tab-content clear-style">
                        @foreach($brands as $brand)
                        <div class="listing-item mb-20">
                            <div class="row grid-space-0">
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <br>
                                    <div class="overlay-container" style="padding: 20px">
                                        <img style="width: auto; height: 100%; margin: 0 auto; background-size: auto;"
                                            src="/assets/img/brands/thumbnails/{{$brand->image}}"
                                             alt="{{$brand->name}}">
                                        <a class="overlay-link" href="{{route('frontend.brandView', $brand->name)}}"></a>

                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-8 col-lg-9" style="padding: 20px">
                                    <div class="body">
                                        <h2 class="margin-clear"><a href="{{route('frontend.brandView', $brand->name)}}">{{$brand->name}}</a></h2>
                                        <p>{!! $brand->description !!}</p>
                                    </div>
                                    <div class="pull-right">
                                        <a class="text-center btn btn-gray-transparent btn-animated"  href="{{URL::to('/e-shop/?brand[]='.$brand->id)}}">{{$brand->name}} Products<i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="separator"></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
