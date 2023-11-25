@extends('welcome')
@section('content')
    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="../index.html">Home</a></li>
                <li class="active">Checkout Review</li>
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
                    <h1 class="page-title">Checkout Review</h1>
                    <div class="separator-2"></div>
                    <!-- page-title end -->


                    <table class="table cart table-bordered " style="table-layout: fixed;width: 100%">
                        <thead>
                        <tr>
                            <th class="text-start" style="width:10%">Image</th>
                            <th class="text-center" style="width:30%">Product</th>
                            <th class="text-center" style="width:20%">Description</th>
                            <th class="text-center" style="width:15%">Unit price</th>
                            <th class="text-center" style="width:15%">Quantity</th>
                            <th class="text-right" style="width:10%">Price</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($products as $product)
                            <tr class="remove-data">
                                <td class="text-center">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <img src="/assets/img/products/thumbnails/{{$product['image']}}"
                                                 class="img-responsive" style="width: 50px">
                                        </div>
                                    </div>
                                </td>
                                <td class="product text-center"><a
                                        href="{{ route('frontend.productView', $product['slug']) }}">{{$product['name']}}</a>
                                </td>
                                <td class="product text-center"><a
                                        href="{{ route('frontend.brandView', $product['brand']) }}">{{$product['brand']}}</a>
                                </td>
                                <td class="price text-center">€ {{$product['unitPrice']}}</td>
                                <td class="quantity text-center">{{$product['quantity']}} pcs</td>
                                <td class="amount text-center">{{number_format($product['productAmount'], 2)}} €</td>
                            </tr>
                        @endforeach

                        <tr>
                            <td colspan="3"></td>
                            <td class="total-quantity text-center" colspan="2">Subtotal</td>
                            <td class="amount">{{ number_format( $orderInfo['subTotal'], 2) }} €</td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td class="total-quantity text-center" colspan="2">Discount
                                &nbsp&nbsp&nbsp {{ $orderInfo['discount'] }} %
                            </td>
                            <td class="amount">{{  number_format( $orderInfo['discountPrice'], 2) }} €</td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td class="total-quantity text-center" colspan="2">Shipping</td>
                            <td class="amount">{{ number_format($orderInfo['shippingCharges'], 2) }} €</td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td class="total-quantity text-center" colspan="2">Total Price</td>
                            <td class="total-amount">{{ number_format($orderInfo['total'], 2) }} €</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="space-bottom"></div>
                    @if(!isset($orderInfo['shipFirstName']))
                        <table class="table">
                            <thead>
                            <tr>
                                <th colspan="2">Shipping Information</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>Full Name</td>
                                <td class="information">{{ $orderInfo['firstName'] }} {{ $orderInfo['lastName'] }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td class="information">{{ $orderInfo['email'] }} </td>
                            </tr>
                            <tr>
                                <td>Telephone</td>
                                <td class="information">{{ $orderInfo['phoneNumber'] }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td class="information">{{ $orderInfo['address'] }}</td>
                            </tr>
                            <tr>
                                <td>City/State</td>
                                <td class="information">{{ $orderInfo['zipcode'] }}, {{ $orderInfo['city'] }}
                                    , {{ $orderInfo['country'] }}</td>
                            </tr>
                            <tr>
                                <td>Additional Info</td>
                                <td class="information">{{ $orderInfo['comment'] }}</td>
                            </tr>
                            </tbody>
                        </table>
                    @else

                        <table class="table">
                            <thead>
                            <tr>
                                <th colspan="2">Billing Information</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Full Name</td>
                                <td class="information">{{ $orderInfo['firstName'] }} {{ $orderInfo['lastName'] }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td class="information">{{ $orderInfo['email'] }} </td>
                            </tr>
                            <tr>
                                <td>Telephone</td>
                                <td class="information">{{ $orderInfo['phoneNumber'] }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td class="information">{{ $orderInfo['address'] }}</td>
                            </tr>
                            <tr>
                                <td>City/State</td>
                                <td class="information">{{ $orderInfo['zipcode'] }}, {{ $orderInfo['city'] }}
                                    , {{ $orderInfo['country'] }}</td>
                            </tr>
                            <tr>
                                <td>Additional Info</td>
                                <td class="information">{{ $orderInfo['comment'] }}</td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table">
                            <thead>
                            <div class="space-bottom"></div>
                            <tr>
                                <th colspan="2">Shipping Information</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>Full Name</td>
                                <td class="information">{{ $orderInfo['shipFirstName'] }} {{ $orderInfo['shipLastName'] }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td class="information">{{ $orderInfo['shipEmail'] }} </td>
                            </tr>
                            <tr>
                                <td>Telephone</td>
                                <td class="information">{{ $orderInfo['shipPhoneNumber'] }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td class="information">{{ $orderInfo['shipAddress'] }}</td>
                            </tr>
                            <tr>
                                <td>City/State</td>
                                <td class="information">{{ $orderInfo['shipZipcode'] }}, {{ $orderInfo['shipCity'] }}
                                    , {{ $orderInfo['shipCountry'] }}</td>
                            </tr>
                            </tbody>
                        </table>
                    @endif


                    <div class="space-bottom"></div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th colspan="2">Payment</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Payment Method</td>
                            <td class="information">{{ $paymentInfo['methodForPayment'] }} </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="text-right">
                        <a href="{{ route('frontend.processOrder') }}" class="btn btn-group btn-default"><i
                                class="icon-check"></i> Complete Your Order</a>
                    </div>

                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->

@endsection
