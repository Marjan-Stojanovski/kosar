@extends('welcome')
@section('content')

    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}"
                                                       style="color: black">Domov</a></li>
                <li class="active"><a href="{{route('frontend.categories')}}"
                                      style="color: black">Vrsta Pijac</a></li>
            </ol>
        </div>
    </div>
    <!-- breadcrumb end -->

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
                    <h1 class="page-title text-center">Vrsta zgane pijac</h1>
                    <div class="separator"></div>
                    <!-- page-title end -->
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit Illo quaerat <br> commodi excepturi dignissimos!</p>

                    <!-- isotope filters start -->

                    <!-- isotope filters end -->

                    <div class="isotope-container-fitrows row grid-space-10">
                        @foreach($categories as $category)
                        <div class="col-sm-6 isotope-item app-development" style="padding: 20px">
                            <div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
                                <div class="overlay-container" style="background-image: url(/assets/img/categories/medium/{{$category->image}}); background-size: cover; background-repeat: no-repeat; background-position: center">
                                    <div class="overlay-to-top">
                                        <p class="small margin-clear"><em>App development <br> Lorem ipsum dolor sit</em></p>
                                    </div>
                                </div>
                                <div class="body">
                                    <h3>{{ $category->name }}</h3>
                                    <div class="separator"></div>
                                    <a href="{{URL::to('/e-shop/?category[]='.$category->id)}}" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">View Products<i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
@endsection
