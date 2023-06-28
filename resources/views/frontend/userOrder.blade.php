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

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">

                    <!-- page-title start -->
                    <!-- ================ -->
                    <div class="text-center">
                        <h3 class="page-title">Order #{{ $order->id }} Details</h3>
                    </div>
                    <div class="separator"></div>
                    <!-- page-title end -->
                    <br>
                    <table class="table cart table-hover">
                        <thead>
                        <tr>
                            <th>Image </th>
                            <th class="text-center">Product </th>
                            <th class="text-center">Brand </th>
                            <th class="text-center">Unit Price </th>
                            <th class="text-center">Quantity</th>
                            <th class="amount text-center">Price </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orderProducts as $orderProduct)
                            <tr class="remove-data">
                                <td class="image-box">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <img src="/assets/img/products/thumbnails/{{$orderProduct->product->image}}"
                                                 class="mb-0 img-responsive" style="width: 50px">
                                        </div>
                                    </div>
                                </td>
                                <td class="product text-center"><a>{{$orderProduct->product->title}}</a></td>
                                <td class="product text-center"><a>{{$orderProduct->product->brand->name}}</a></td>
                                <td class="product text-center"><a>{{$orderProduct->unitPrice}}</a></td>
                                <td class="quantity text-center">{{$orderProduct->quantity}} pcs</td>
                                <td class="amount text-center">{{ number_format($orderProduct->price, 2) }} €</td>
                            </tr>

                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td class="total-quantity" colspan="4"></td>
                            <td class="total-amount text-center">Total Items</td>
                            <td class="total-amount text-right">{{$orderProducts->count()}}</td>
                        </tr>
                        <tr>
                            <td class="total-quantity" colspan="4"></td>
                            <td class="total-amount text-center">Discount</td>
                            <td class="total-amount text-right">{{$order->discount}}</td>
                        </tr>
                        <tr>
                            <td class="total-quantity" colspan="4"></td>
                            <td class="total-amount text-center">Shipping</td>
                            <td class="total-amount text-right">{{ $order->shippingCharges }} €</td>
                        </tr>
                        <tr>
                            <td class="total-quantity" colspan="4"></td>
                            <td class="total-amount text-center">Total Price</td>
                            <td class="total-amount text-right">{{ number_format($order->total, 2) }} €</td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="text-right">
                        <a href="{{route('frontend.details')}}" class="btn btn-group btn-default">Back</a>
                    </div>

                </div>
                <!-- main end -->

            </div>
        </div>
    </section>

@endsection
