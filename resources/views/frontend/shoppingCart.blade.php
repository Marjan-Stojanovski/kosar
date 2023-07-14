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
                            <th>Image </th>
                            <th>Product </th>
                            <th class="text-center">Brand </th>
                            <th class="text-center">Unit Price </th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Remove </th>
                            <th class="amount text-center">Price </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($carts as $cart)
                        <tr class="remove-data">
                            <td class="image-box">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <img src="/assets/img/products/thumbnails/{{$cart['image']}}"
                                             class="mb-0 img-responsive" style="width: 50px">
                                    </div>
                                </div>
                            </td>
                            <td class="product"><a href="{{ route('frontend.productView', $cart['slug'])}}">{{$cart['name']}}</a></td>
                            <td class="product text-center"><a href="{{ route('frontend.brandView', $cart['brand'])}}">{{$cart['brand']}}</a></td>
                            <td class="price text-center">€ {{$cart['unitPrice']}}</td>
                            <td class="price text-center">{{$cart['quantity']}} pcs</td>
                            <td class="remove text-center">
                                <form action="{{route('delete.cart', $cart['product_id'])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm mb-2 me-2">Delete</button>
                                </form>
                            </td>
                            <td class="amount text-center">{{number_format($cart['productAmount'], 2)}} €</td>
                        </tr>

                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td class="total-quantity" colspan="4">Total</td>
                            <td class="total-quantity" colspan="1">{{ count((array) session('cart')) }} Items</td>
                            <td class="total-amount text-center">Subtotal</td>
                            <td class="total-amount text-right">{{ number_format($subTotal, 2) }}€ </td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="text-right">
                        <a href="{{route('frontend.shop')}}" class="btn btn-group btn-default">Continue Shopping</a>
                        <a href="{{route('frontend.orderDetails')}}" class="btn btn-group btn-default">Checkout</a>
                    </div>

                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->

@endsection
