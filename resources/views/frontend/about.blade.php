@extends('welcome')
@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}" style="color: black">Domov</a></li>
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
                            <p>Nekolku mnogu ubavi zborovi</p>
                            <p>Zosto naseto podjetje e najbolji</p>
                            <ul class="list-icons">
                                <li><i class="icon-check-1"></i> We are here to support you</li>
                                <li><i class="icon-check-1"></i> Free updates</li>
                                <li><i class="icon-check-1"></i> Unlimited options and variations</li>
                                <li><i class="icon-check-1"></i> ipsam asperiores fugiat quo</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="overlay-container overlay-visible">
                                <img src="images/page-about-2.jpg" alt="">
                                <div class="overlay-bottom hidden-xs">
                                    <div class="text">
                                        <h3 class="title">We Love To Code</h3>
                                    </div>
                                </div>
                                <a href="images/page-about-2.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
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
                    <div class="col-sm-4">
                        <div class="team-member image-box style-2 bordered shadow text-center">
                            <img src="images/team-member-1.jpg" alt="">
                            <div class="body">
                                <h3 class="margin-clear">Elena Stojanovska</h3>
                                <small>THE BOSS</small>
                                <div class="separator mt-10"></div>
                                <p class="small margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates praesentium nulla cupiditate!</p>
                                <div class="separator mt-10"></div>
                                <ul class="social-links colored margin-clear">
                                    <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <div class="separator mt-10 mb-10"></div>
                                <a href="tel:123123123123123" class="margin-clear btn btn-md-link link-dark"><i class="pr-10 fa fa-phone"></i>Call</a>
                                <a href="mailto:info@theproject.com" class="margin-clear btn btn-md-link link-dark"><i class="pr-10 fa fa-envelope-o"></i>Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member image-box style-2 bordered shadow text-center">
                            <img src="images/team-member-2.jpg" alt="">
                            <div class="body">
                                <h3 class="margin-clear">Darko Stojanovski</h3>
                                <small>Vraboten</small>
                                <div class="separator mt-10"></div>
                                <p class="small margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates praesentium nulla cupiditate!</p>
                                <div class="separator mt-10"></div>
                                <ul class="social-links colored margin-clear">
                                    <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <div class="separator mt-10 mb-10"></div>
                                <a href="tel:123123123123123" class="margin-clear btn btn-md-link link-dark"><i class="pr-10 fa fa-phone"></i>Call</a>
                                <a href="mailto:info@theproject.com" class="margin-clear btn btn-md-link link-dark"><i class="pr-10 fa fa-envelope-o"></i>Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="team-member image-box style-2 bordered shadow text-center">
                            <img src="images/team-member-3.jpg" alt="">
                            <div class="body">
                                <h3 class="margin-clear">Kalia</h3>
                                <small>Ke bide kako ja so ke kazam:)</small>
                                <div class="separator mt-10"></div>
                                <p class="small margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates praesentium nulla cupiditate!</p>
                                <div class="separator mt-10"></div>
                                <ul class="social-links colored margin-clear">
                                    <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <div class="separator mt-10 mb-10"></div>
                                <a href="tel:123123123123123" class="margin-clear btn btn-md-link link-dark"><i class="pr-10 fa fa-phone"></i>Call</a>
                                <a href="mailto:info@theproject.com" class="margin-clear btn btn-md-link link-dark"><i class="pr-10 fa fa-envelope-o"></i>Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
