@extends('welcome')
@section('content')
    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="../index.html">Home</a></li>
                <li class="active">Order</li>
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
                    <h2 class="page-title text-center">Order Details</h2>
                    <div class="separator"></div>
                    <!-- page-title end -->

                    <div id="invoice-container" class="invoice-container">
                        <div class="row">
                            <!-- Company info SELLER -->
                            <div class="col-sm-6">
                                <img style="width: 50px"
                                     src="/assets/img/logo.jpg"
                                     alt="The Project">
                                <p class="invoice-slogan"></p>
                                <address class="small">
                                    <strong>{{ $company->name }}</strong><br>
                                    {{ $company->info }}<br>
                                    <br>
                                    {{ $company->address }}<br>
                                    <abbr title="Phone">P:</abbr> {{ $company->phone }}<br>
                                    E-mail: <a href="mailto:{{ $company->mail }}">{{ $company->mail }}</a>
                                </address>
                            </div>
                            <!-- Recipient info -->
                            @if(isset($orderInfo['companyName']))
                                <div class="col-sm-offset-3 col-sm-3">
                                    <h5 class="text-right"> {{ $orderInfo['companyName'] }}</h5>
                                    <h6 class="text-right">Vat - {{ $orderInfo['taxNumber'] }}</h6>
                                    <br>
                                    <p class="text-right small">
                                        <strong>Name: </strong>{{ $orderInfo['firstName'] }}  {{ $orderInfo['lastName'] }}<br>
                                        <strong>Address:</strong> {{ $orderInfo['address'] }} <br>
                                        <strong>Country:</strong> {{ $orderInfo['country'] }} <br>
                                        <strong>Tel:</strong> {{ $orderInfo['phoneNumber'] }} <br>
                                    </p>
                                </div>
                            @else
                                <div class="col-sm-offset-3 col-sm-3">
                                    <h6 class="text-right">Ship to:</h6>
                                    <br>
                                    <h5 class="text-right"> {{ $orderInfo['firstName'] }}  {{ $orderInfo['lastName'] }}</h5>
                                    <p class="text-right small">
                                        <br>
                                        <strong>Address:</strong> {{ $orderInfo['address'] }} <br>
                                        <strong>Country:</strong> {{ $orderInfo['country'] }} <br>
                                        <strong>Tel:</strong> {{ $orderInfo['phoneNumber'] }} <br>
                                    </p>
                                </div>
                            @endif
                        </div>
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
                                    <td class="product text-center"><a href="{{ route('frontend.productView', $product['slug']) }}">{{$product['name']}}</a></td>
                                    <td class="product text-center"><a href="{{ route('frontend.brandView', $product['brand']) }}">{{$product['brand']}}</a></td>
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
                                <td class="total-quantity text-center" colspan="2">Discount &nbsp&nbsp&nbsp {{ $orderInfo['discount'] }} %</td>
                                <td class="amount">{{  number_format( $orderInfo['discountPrice'], 2) }} €</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td class="total-quantity text-center" colspan="2">Shipping</td>
                                <td class="amount">{{ number_format($orderInfo['shippingCharges'], 2) }} €</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td class="total-quantity text-center" colspan="2">Total  Items</td>
                                <td class="total-amount">{{ number_format($orderInfo['total'], 2) }} €</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5>Comments: *</h5>
                        <p class="small">{{ $orderInfo['comment'] }}</p>

                        <p class="small">Dear <br>If you have any questions concerning this invoice, contact <br><br>
                            <strong>{{ $company->name }}</strong>, <br> tel: <strong>{{ $company->phone }}</strong>,<br>
                            email:
                            <strong>{{ $company->mail }}</strong><br><br> Thank you for your order!</p>
                        <hr>
                    </div>
                    <div class="text-right">
                        <a href="{{ route('pdf.preview')}}" class="btn btn-primary">View PDF</a>
                        <a href="{{ route('frontend.payment') }}" class="btn btn-primary">Proceed to payment</a>

                    </div>
                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->

@endsection
