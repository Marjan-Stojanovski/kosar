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
                </div>
                <!-- main end -->
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3 text-center">
                        <p>Login or Register to continue</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                        <a href="{{ route('frontend.register') }}" class="btn btn-primary">Register</a>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Continue as guest</p>
                        <a href="" class="btn btn-primary">Continue</a>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- main-container end -->

@endsection
