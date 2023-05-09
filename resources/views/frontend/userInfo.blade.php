@extends('welcome')
@section('content')

    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}">Home</a></li>
                <li class="active">Account Details</li>
            </ol>
        </div>
    </div>
    <section class="main-container">

        <div class="container">
            <div class="row">
                <div class="main col-md-12">
                    <h1 class="page-title">Frequently Asked Questions</h1>
                    <div class="separator-2"></div>
                    <ul class="nav nav-tabs style-1" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab"><i class="fa fa-user pr-10"></i>User Info</a>
                        </li>
                        <li><a href="#tab2" role="tab" data-toggle="tab"><i class="fa fa-map-marker pr-10"></i>Shipping
                                Details</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2">
                            <div class="panel-group collapse-style-1" id="accordion-faq-2">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th class="text-center" colspan="2">Details</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            if(!empty($details->company)) {
                                                ?>
                                        <tr>
                                            <td class="text-start"><strong>Company Name</strong></td>
                                            <td class="text-start">{{$details->company}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Company Tax Number</strong></td>
                                            <td class="text-start">{{$details->taxNumber}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>First Name</strong></td>
                                            <td class="text-start">{{$details->firstName}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Last Name</strong></td>
                                            <td class="text-start">{{$details->lastName}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Phone Number</strong></td>
                                            <td class="text-start">{{$details->phoneNumber}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Email</strong></td>
                                            <td class="text-start">{{$details->email}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Address</strong></td>
                                            <td class="text-start">{{$details->address}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>City</strong></td>
                                            <td class="text-start">{{$details->city}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>ZIP</strong></td>
                                            <td class="text-start">{{$details->zipcode}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Country</strong></td>
                                            <td class="text-start">{{$details->country_id}}</td>
                                        </tr>
                                        <?php
                                            } else {
                                                ?>
                                        <tr>
                                            <td class="text-start"><strong>First Name</strong></td>
                                            <td class="text-start">{{$details->firstName}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Last Name</strong></td>
                                            <td class="text-start">{{$details->lastName}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Phone Number</strong></td>
                                            <td class="text-start">{{$details->phoneNumber}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Email</strong></td>
                                            <td class="text-start">{{$details->email}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Address</strong></td>
                                            <td class="text-start">{{$details->address}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>City</strong></td>
                                            <td class="text-start">{{$details->city}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>ZIP</strong></td>
                                            <td class="text-start">{{$details->zipcode}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Country</strong></td>
                                            <td class="text-start">{{$details->country_id}}</td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="text-right">
                                    <a class="btn btn-warning" href="{{route('frontend.editDetails')}}">Change your
                                        info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
