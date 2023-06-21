@extends('welcome')
@section('content')

    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}" style="color: black">Domov</a>
                </li>
                <li class="active" style="color: black">Checkout</li>
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
                    <h1 class="page-title">Cart Checkout</h1>
                    <div class="separator-2"></div>
                    <!-- page-title end -->

                    <table class="table cart">
                        <thead>
                        <tr>
                            <th class="text-center">Image</th>
                            <th class="text-center">Product</th>
                            <th class="text-center">Brand</th>
                            <th class="text-center">Unit Price</th>
                            <th class="text-center">Quantity</th>
                            <th class="amount text-center">Unit Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                                <?php
                                $sub = $product['productAmount'];
                                $subTotal = number_format($sub, 2);
                                ?>
                            <tr class="remove-data">
                                <td class="image-box">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <img src="/assets/img/products/thumbnails/{{$product['image']}}"
                                                 class="mb-0 img-responsive" style="width: 50px">
                                        </div>
                                    </div>
                                </td>
                                <td class="product text-center"><a>{{$product['name']}}</a></td>
                                <td class="product text-center"><a>{{$product['brand']}}</a></td>
                                <td class="price text-center">€ {{$product['unitPrice']}}</td>
                                <td class="quantity text-center">{{$product['quantity']}} pcs</td>
                                <td class="amount text-center">{{ $subTotal }} €</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2"></td>
                            <td class="total-quantity text-center" colspan="2">Subtotal</td>
                            <td></td>
                            <?php
                            $totalAmount = number_format($total, 2)
                            ?>
                            <td class="amount">$ {{ $totalAmount }}</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td class="total-quantity text-center" colspan="2">
                                <label for="coupon">Coupon</label>
                            </td>
                            <td></td>
                            <td class="amount">
                                <input id="coupon" style="width: 100px"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td class="total-quantity text-center" colspan="2">Total 8 Items</td>
                            <td></td>
                            <td class="total-amount">$ {{ $totalAmount }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="space-bottom"></div>
                    @if(Auth::user())
                        <ul class="nav nav-tabs style-1" role="tablist">
                            <li class="active"><a href="#tab1" role="tab" data-toggle="tab"><i
                                        class="fa fa-user pr-10"></i>Fizicko Lice</a>
                            </li>
                            <li><a href="#tab2" role="tab" data-toggle="tab"><i class="fa fa-map-marker pr-10"></i>Kompanija</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1">
                                <div class="panel-group collapse-style-1" id="accordion-faq">
                                    <form action="{{ route('frontend.saveOrder') }}" method="post">
                                        @csrf
                                        <!--Client information-->
                                        <fieldset>
                                            <legend class="text-center">Client information</legend>
                                            <div class="form-horizontal" id="billing-information">
                                                <div class="checkbox padding-top-clear">
                                                    <label>
                                                        <input type="checkbox" id="shipping-info-check" checked>Ship to
                                                        client
                                                        address.
                                                    </label>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h3 class="title">Personal Info</h3>
                                                    </div>
                                                    <div class="col-lg-8 col-lg-offset-1">
                                                        <div class="form-group">
                                                            <label for="firstName" class="col-md-2 control-label">First
                                                                Name<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="firstName"
                                                                       value="{{ $shippingDetails->firstName }}"
                                                                       name="firstName" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="lastName" class="col-md-2 control-label">Last
                                                                Name<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="lastName"
                                                                       value="{{ $shippingDetails->lastName }}"
                                                                       name="lastName" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phoneNumber" class="col-md-2 control-label">Telephone<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="phoneNumber"
                                                                       value="{{ $shippingDetails->phoneNumber }}"
                                                                       name="phoneNumber" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email"
                                                                   class="col-md-2 control-label">Email<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="email" class="form-control" id="email"
                                                                       value="{{ $shippingDetails->email }}"
                                                                       name="email" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space"></div>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h3 class="title">Your Address</h3>
                                                    </div>
                                                    <div class="col-lg-8 col-lg-offset-1">
                                                        <div class="form-group">
                                                            <label for="address"
                                                                   class="col-md-2 control-label">Address<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="address"
                                                                       value="{{ $shippingDetails->address }}"
                                                                       name="address" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="country_id"
                                                                   class="col-md-2 control-label">Country<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <select name="country_id" id="country_id"
                                                                        class="form-control">
                                                                    <option
                                                                        value="{{ $shippingDetails->country_id }}">{{ $shippingDetails->country->name }}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="city" class="col-md-2 control-label">City<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="city"
                                                                       value="{{ $shippingDetails->city }}" name="city"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="zipcode" class="col-md-2 control-label">Zip
                                                                Code<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="zipcode"
                                                                       value="{{ $shippingDetails->zipcode }}"
                                                                       name="zipcode" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space"></div>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label for="comment" class="title">Additional comments</label>
                                                    </div>
                                                    <div class="col-lg-8 col-lg-offset-1">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                            <textarea class="form-control" rows="4"
                                                                      name="comment"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <!--Shipping information-->
                                        <fieldset>
                                            <legend class="text-center">Shipping information</legend>
                                            <div class="form-horizontal" id="shipping-information-container">
                                                <div id="shipping-information" class="space-bottom">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h3 class="title">Contact Info</h3>
                                                        </div>
                                                        <div class="col-lg-8 col-lg-offset-1">
                                                            <div class="form-group">
                                                                <label for="shipFirstName"
                                                                       class="col-md-2 control-label">First
                                                                    Name<small class="text-default">*</small></label>
                                                                <div class="col-md-10">
                                                                    <input type="text" class="form-control"
                                                                           id="shipFirstName"
                                                                           name="shipFirstName">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="shipLastName"
                                                                       class="col-md-2 control-label">Last
                                                                    Name<small
                                                                        class="text-default">*</small></label>
                                                                <div class="col-md-10">
                                                                    <input type="text" class="form-control"
                                                                           id="shipLastName"
                                                                           name="shipLastName">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="shipPhoneNumber"
                                                                       class="col-md-2 control-label">Telephone<small
                                                                        class="text-default">*</small></label>
                                                                <div class="col-md-10">
                                                                    <input type="text" class="form-control"
                                                                           id="shipPhoneNumber"
                                                                           name="shipPhoneNumber">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="shipEmail"
                                                                       class="col-md-2 control-label">Email<small
                                                                        class="text-default">*</small></label>
                                                                <div class="col-md-10">
                                                                    <input type="email" class="form-control"
                                                                           id="shipEmail"
                                                                           name="shipEmail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space"></div>
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <h3 class="title">Contact Address</h3>
                                                        </div>
                                                        <div class="col-lg-8 col-lg-offset-1">
                                                            <div class="form-group">
                                                                <label for="shipAddress"
                                                                       class="col-md-2 control-label">Address<small
                                                                        class="text-default">*</small></label>
                                                                <div class="col-md-10">
                                                                    <input type="text" class="form-control"
                                                                           id="shipAddress"
                                                                           name="shipAddress">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="shipCountry_id"
                                                                       class="col-md-2 control-label">Country<small
                                                                        class="text-default">*</small></label>
                                                                <div class="col-md-10">
                                                                    <select name="shipCountry_id" id="shipCountry_id"
                                                                            class="form-control">
                                                                        @foreach($countries as $country)
                                                                            <option
                                                                                value="{{ $country->id }}">{{ $country->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="shipCity"
                                                                       class="col-md-2 control-label">City<small
                                                                        class="text-default">*</small></label>
                                                                <div class="col-md-10">
                                                                    <input type="text" class="form-control"
                                                                           id="shipCity"
                                                                           name="shipCity">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="shipZipcode"
                                                                       class="col-md-2 control-label">Zip
                                                                    Code<small class="text-default">*</small></label>
                                                                <div class="col-md-10">
                                                                    <input type="text" class="form-control"
                                                                           id="shipZipcode"
                                                                           name="shipZipcode">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="space"></div>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label for="comment" class="title">Additional
                                                                    comments</label>
                                                            </div>
                                                            <div class="col-lg-8 col-lg-offset-1">
                                                                <div class="form-group">
                                                                    <div class="col-md-12">
                                                            <textarea class="form-control" rows="4"
                                                                      name="comment"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <button class="btn btn-primary pull-right" type="submit">Next Step</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <div class="panel-group collapse-style-1" id="accordion-faq-2">
                                    <form action="{{ route('frontend.saveOrder') }}" method="post">
                                        @csrf
                                        <!--Shipping Kompanija information-->
                                        <fieldset>
                                            <legend class="text-center">Shipping Kompanija information</legend>
                                            <div class="form-horizontal" id="billing-information">
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h3 class="title">Company Info</h3>
                                                    </div>
                                                    <div class="col-lg-8 col-lg-offset-1">
                                                        <div class="form-group">
                                                            <label for="companyName" class="col-md-2 control-label">Company
                                                                Name<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="companyName"
                                                                       value="{{ $shippingDetails->company }}"
                                                                       name="companyName">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="taxNumber" class="col-md-2 control-label">Tax
                                                                Number
                                                                <small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="taxNumber"
                                                                       value="{{ $shippingDetails->taxNumber }}"
                                                                       name="taxNumber">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="firstName" class="col-md-2 control-label">First
                                                                Name<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="firstName"
                                                                       value="{{ $shippingDetails->firstName }}"
                                                                       name="firstName">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="lastName" class="col-md-2 control-label">Last
                                                                Name<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="lastName"
                                                                       value="{{ $shippingDetails->lastName }}"
                                                                       name="lastName">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phoneNumber" class="col-md-2 control-label">Telephone<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="phoneNumber"
                                                                       value="{{ $shippingDetails->phoneNumber }}"
                                                                       name="phoneNumber">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email"
                                                                   class="col-md-2 control-label">Email<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="email" class="form-control" id="email"
                                                                       value="{{ $shippingDetails->email }}"
                                                                       name="email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space"></div>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h3 class="title">Your Address</h3>
                                                    </div>
                                                    <div class="col-lg-8 col-lg-offset-1">
                                                        <div class="form-group">
                                                            <label for="address"
                                                                   class="col-md-2 control-label">Address<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="address"
                                                                       value="{{ $shippingDetails->address }}"
                                                                       name="address">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="country_id"
                                                                   class="col-md-2 control-label">Country<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <select name="country_id" id="country_id"
                                                                        class="form-control">
                                                                    <option
                                                                        value="{{ $shippingDetails->country_id }}">{{ $shippingDetails->country->name }}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="city" class="col-md-2 control-label">City<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="city"
                                                                       value="{{ $shippingDetails->city }}" name="city">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="zipcode" class="col-md-2 control-label">Zip
                                                                Code<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="zipcode"
                                                                       value="{{ $shippingDetails->zipcode }}"
                                                                       name="zipcode">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space"></div>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label for="comment" class="title">Additional comments</label>
                                                    </div>
                                                    <div class="col-lg-8 col-lg-offset-1">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                            <textarea class="form-control" rows="4"
                                                                      name="comment"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <button class="btn btn-primary pull-right" type="submit">Next Step</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @elseif(!(Auth::user()))
                        <ul class="nav nav-tabs style-1" role="tablist">
                            <li class="active"><a href="#tab1" role="tab" data-toggle="tab"><i
                                        class="fa fa-user pr-10"></i>Fizicko Lice</a>
                            </li>
                            <li><a href="#tab2" role="tab" data-toggle="tab"><i class="fa fa-map-marker pr-10"></i>Kompanija</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1">
                                <div class="panel-group collapse-style-1" id="accordion-faq">
                                    <form action="{{ route('frontend.saveOrder') }}" method="post">
                                        @csrf
                                        <fieldset>
                                            <legend class="text-center">Client information</legend>
                                            <div class="form-horizontal" id="billing-information">
                                                <br>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h3 class="title">Personal Info</h3>
                                                    </div>
                                                    <div class="col-lg-8 col-lg-offset-1">
                                                        <div class="form-group">
                                                            <label for="firstName" class="col-md-2 control-label">First
                                                                Name<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="firstName"
                                                                       name="firstName" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="lastName" class="col-md-2 control-label">Last
                                                                Name<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="lastName"
                                                                       name="lastName" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phoneNumber" class="col-md-2 control-label">Telephone<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="phoneNumber"
                                                                       name="phoneNumber" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email"
                                                                   class="col-md-2 control-label">Email<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="email" class="form-control" id="email"
                                                                       name="email" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space"></div>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h3 class="title">Your Address</h3>
                                                    </div>
                                                    <div class="col-lg-8 col-lg-offset-1">
                                                        <div class="form-group">
                                                            <label for="address"
                                                                   class="col-md-2 control-label">Address<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="address"
                                                                       name="address" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="country_id"
                                                                   class="col-md-2 control-label">Country<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <select name="country_id" id="country_id"
                                                                        class="form-control" required>
                                                                    @foreach($countries as $country)
                                                                        <option
                                                                            value="{{ $country->id }}">{{ $country->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="city" class="col-md-2 control-label">City<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="city"
                                                                       name="city" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="zipcode" class="col-md-2 control-label">Zip
                                                                Code<small
                                                                    class="text-default">*</small></label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="zipcode"
                                                                       name="zipcode" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space"></div>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label for="comment" class="title">Additional comments</label>
                                                    </div>
                                                    <div class="col-lg-8 col-lg-offset-1">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                            <textarea class="form-control" rows="4"
                                                                      name="comment"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <button class="btn btn-primary pull-right" type="submit">Next Step</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <div class="panel-group collapse-style-1" id="accordion-faq-2">
                                    <form action="{{ route('frontend.saveOrder') }}" method="post">
                                        @csrf
                                    <fieldset>
                                        <legend class="text-center">Shipping Kompanija information</legend>
                                        <div class="form-horizontal" id="billing-information">
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <h3 class="title">Personal Info</h3>
                                                </div>
                                                <div class="col-lg-8 col-lg-offset-1">
                                                    <div class="form-group">
                                                        <label for="companyName" class="col-md-2 control-label">Company
                                                            Name<small
                                                                class="text-default">*</small></label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="companyName"
                                                                   name="companyName" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="taxNumber" class="col-md-2 control-label">Tax
                                                            Number
                                                            <small
                                                                class="text-default">*</small></label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="taxNumber"
                                                                   name="taxNumber" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="firstName" class="col-md-2 control-label">First
                                                            Name<small
                                                                class="text-default">*</small></label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"
                                                                   id="firstName"
                                                                   name="firstName" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="lastName" class="col-md-2 control-label">Last
                                                            Name<small
                                                                class="text-default">*</small></label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"
                                                                   id="lastName"
                                                                   name="lastName" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phoneNumber" class="col-md-2 control-label">Telephone<small
                                                                class="text-default">*</small></label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"
                                                                   id="phoneNumber"
                                                                   name="phoneNumber" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email"
                                                               class="col-md-2 control-label">Email<small
                                                                class="text-default">*</small></label>
                                                        <div class="col-md-10">
                                                            <input type="email" class="form-control" id="email"
                                                                   name="email" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space"></div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <h3 class="title">Your Address</h3>
                                                </div>
                                                <div class="col-lg-8 col-lg-offset-1">
                                                    <div class="form-group">
                                                        <label for="address"
                                                               class="col-md-2 control-label">Address<small
                                                                class="text-default">*</small></label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="address"
                                                                   name="address" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="country_id"
                                                               class="col-md-2 control-label">Country<small
                                                                class="text-default">*</small></label>
                                                        <div class="col-md-10">
                                                            <select name="country_id" id="country_id"
                                                                    class="form-control" required>
                                                                @foreach($countries as $country)
                                                                    <option
                                                                        value="{{ $country->id }}">{{ $country->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="city"
                                                               class="col-md-2 control-label">City<small
                                                                class="text-default">*</small></label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="city"
                                                                   name="city" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="zipcode" class="col-md-2 control-label">Zip
                                                            Code<small
                                                                class="text-default">*</small></label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" id="zipcode"
                                                                   name="zipcode" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space"></div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="comment" class="title">Additional
                                                        comments</label>
                                                </div>
                                                <div class="col-lg-8 col-lg-offset-1">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <textarea class="form-control" rows="4"
                                                                      name="comment"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                        <button class="btn btn-primary pull-right" type="submit">Next Step</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    @endif
                </div>
                <!-- main end -->
            </div>
        </div>
    </section>
    <!-- main-container end -->

@endsection
