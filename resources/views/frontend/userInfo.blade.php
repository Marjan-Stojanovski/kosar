@extends('welcome')
@section('content')


<!-- breadcrumb start -->
<!-- ================ -->
<div class="breadcrumb-container">
    <div class="container">
        <ol class="breadcrumb">
            <li><i class="fa fa-home pr-10"></i><a href="../index.html">Home</a></li>
            <li class="active">Frequently Asked Questions</li>
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
                <h1 class="page-title">Frequently Asked Questions</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ut quisquam ab harum hic enim quibusdam aut quasi recusandae temporibus quo voluptatibus, dolorem consectetur ipsam facere ipsa. Commodi sunt, inventore!</p>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs style-1" role="tablist">
                    <li class="active"><a href="#tab1" role="tab" data-toggle="tab"><i class="fa fa-user pr-10"></i>Info</a></li>
                    <li><a href="#tab2" role="tab" data-toggle="tab"><i class="fa fa-map-marker pr-10"></i>Shipping Details</a></li>
                    <li><a href="#tab3" role="tab" data-toggle="tab"><i class="fa fa-map-marker pr-10"></i>Company Details</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <!-- accordion start -->
                        <div class="panel-group collapse-style-1" id="accordion-faq">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Full Name</th>
                                        <th class="text-center">Username/Email</th>
                                        <th class="text-center">Password</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">{{$loggedUser->firstName}} {{$loggedUser->lastName}}</td>
                                        <td class="text-center">{{$loggedUser->email}}</td>
                                        <td class="text-center">{{$loggedUser->password}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-right">
                                <a class="btn btn-warning" href="">Edit your info</a>
                            </div>
                        </div>
                        <!-- accordion end -->
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        <!-- accordion start -->
                        <div class="panel-group collapse-style-1" id="accordion-faq-2">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th class="text-center" colspan="2">Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-start"><strong>First Name</strong></td>
                                        <td class="text-start">{{$loggedUser->firstName}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>Last Name</strong></td>
                                        <td class="text-start">{{$loggedUser->lastName}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>Phone Number</strong></td>
                                        <td class="text-start"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>Email</strong></td>
                                        <td class="text-start">{{$loggedUser->email}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>Address</strong></td>
                                        <td class="text-start"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>City</strong></td>
                                        <td class="text-start"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>ZIP</strong></td>
                                        <td class="text-start"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>Country</strong></td>
                                        <td class="text-start"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-right">
                                <a class="btn btn-warning" href="{{route('frontend.editDetails')}}">Edit your info</a>
                            </div>
                        </div>
                        <!-- accordion end -->
                    </div>

                    <div class="tab-pane fade" id="tab3">
                        <!-- accordion start -->
                        <div class="panel-group collapse-style-1" id="accordion-faq-3">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th class="text-center" colspan="2">Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-start"><strong>Company Name</strong></td>
                                        <td class="text-start"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>Company Tax Number</strong></td>
                                        <td class="text-start"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>First Name</strong></td>
                                        <td class="text-start">{{$loggedUser->firstName}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>Last Name</strong></td>
                                        <td class="text-start">{{$loggedUser->lastName}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>Phone Number</strong></td>
                                        <td class="text-start"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>Email</strong></td>
                                        <td class="text-start">{{$loggedUser->email}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>Address</strong></td>
                                        <td class="text-start"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>City</strong></td>
                                        <td class="text-start"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>ZIP</strong></td>
                                        <td class="text-start"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>Country</strong></td>
                                        <td class="text-start"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-right">
                                <a class="btn btn-warning" href="{{route('frontend.editDetails')}}">Edit your info</a>
                            </div>
                        </div>
                        <!-- accordion end -->
                    </div>
                </div>
            </div>
            <!-- main end -->
        </div>
    </div>
</section>
<!-- main-container end -->

@endsection
