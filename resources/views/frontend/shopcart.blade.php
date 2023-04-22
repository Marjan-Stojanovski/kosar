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
                            <th class="text-center">Unit Price </th>
                            <th>Quantity</th>
                            <th class="text-center">Remove </th>
                            <th class="amount text-center">Total </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($collections as $collection)
                                <?php
                                $unitPrice = $collection->price;
                                $unitCount = $collection->quantity;
                                $subTotal = $unitCount * $unitPrice;
                                $total +=$subTotal
                                ?>
                        <tr class="remove-data">
                            <td class="product"><a>{{$collection->name}}</a></td>
                            <td class="price text-center">{{$unitPrice}}</td>
                            <td class="quantity">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{$collection->quantity}}">
                                </div>
                            </td>
                            <td class="remove text-center">
                                <form action="{{route('cart.destroy', $collection->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger mb-2 me-2">Delete</button>
                                </form>
                            </td>
                            <td class="amount text-center">{{$subTotal}} €</td>
                        </tr>
                        @endforeach
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
