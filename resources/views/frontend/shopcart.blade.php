@extends('welcome')
@section('content')
    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}" style="color: black">Domov</a>
                </li>
                <li class="active" style="color: black">Shopping Cart</li>
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
                    <h1 class="page-title">Shopping Cart</h1>
                    <div class="separator-2"></div>
                    <!-- page-title end -->

                    <table class="table cart table-hover table-colored">
                        <thead>
                        <tr>
                            <th>Product </th>
                            <th>Price </th>
                            <th>Quantity</th>
                            <th>Remove </th>
                            <th class="amount">Total </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($collections as $collection)
                                <?php
                                $unitPrice = $collection->price;
                                $unitCount = $collection->total;
                                $subTotal = $unitCount * $unitPrice;
                                ?>
                        <tr class="remove-data">
                            <td class="product"><a href="shop-product.html">{{$collection->name}}</a></td>
                            <td class="price">{{$unitPrice}}</td>
                            <td class="quantity">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{$collection->total}}">
                                </div>
                            </td>
                            <td class="remove"><a class="btn btn-remove btn-sm btn-default">Remove</a></td>
                            <td class="amount">{{$subTotal}} €</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">Discount Coupon</td>
                            <td colspan="2">
                                <div class="form-group">
                                    <input type="text" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="total-quantity" colspan="4">Total {{$shoppingListsCount}} Items</td>
                            <td class="total-amount">€ {{$total}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="text-right">
                        <a href="shop-cart.html" class="btn btn-group btn-default">Update Cart</a>
                        <a href="shop-checkout.html" class="btn btn-group btn-default">Checkout</a>
                    </div>

                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->

@endsection
