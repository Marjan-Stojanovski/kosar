@extends('welcome')
@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}" style="color: black">Domov</a>
                </li>
                <li class="active" style="color: black">O Nas</li>
            </ol>
        </div>
    </div>
    <!-- breadcrumb end -->
    <!-- main-container start -->
    <section class="main-container padding-bottom-clear">
        <div class="container">
            <div class="row">
                <div class="main col-md-12">
                    <h1 class="title">O Nas</h1>
                    <div class="separator-2"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                {!! $company->description !!}
                            </p>

                        </div>
                        <div class="col-md-6">
                            <div class="overlay-container"
                                 style="background-image: url(/assets/img/company_info/medium/{{$company->image}}); background-size: contain; background-repeat: no-repeat; background-position: center;width: auto">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="light-gray-bg pv-40 section mt-20">
            <div class="container">
                <h4 class="title mb-20">Tim <strong>Stojanovski</strong></h4>
                <div class="row grid-space-10">
                    @foreach($employees as $employee)
                        <div class="col-sm-4">
                            <div class="team-member image-box style-2 bordered shadow text-center">
                                <img src="images/team-member-1.jpg" alt="">
                                <div class="body">
                                    <h3 class="margin-clear">{{ $employee->name}}</h3>
                                    <small>{{ $employee->position }}</small>
                                    <div class="separator mt-10"></div>
                                    <p class="small margin-clear">
                                        {!! $employee->description !!}
                                    </p>
                                    <div class="separator mt-10"></div>
                                    <ul class="social-links colored margin-clear">
                                        <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    <div class="separator mt-10 mb-10"></div>
                                    <a href="tel:123123123123123" class="margin-clear btn btn-md-link link-dark"><i
                                            class="pr-10 fa fa-phone"></i>Call</a>
                                    <a href="mailto:info@theproject.com" class="margin-clear btn btn-md-link link-dark"><i
                                            class="pr-10 fa fa-envelope-o"></i>Contact</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
