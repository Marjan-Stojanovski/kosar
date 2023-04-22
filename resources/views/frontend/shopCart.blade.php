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
                            <th class="amount text-center">Total </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($userLists as $userList)
                                <?php
                                $unitPrice = $userList->price;
                                $unitCount = $userList->quantity;
                                $subTotal = $unitCount * $unitPrice;
                                $totalAmount +=$subTotal
                                ?>
                        <tr class="remove-data">
                            <td class="image-box">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <img src="/assets/img/products/thumbnails/{{ $userList->image }}"
                                             class="mb-0 img-responsive" style="width: 50px">
                                    </div>
                                </div>
                            </td>
                            <td class="product"><a>{{$userList->name}}</a></td>
                            <td class="product text-center"><a>{{$userList->product->brand->name}}</a></td>
                            <td class="price text-center">€ {{$unitPrice}}</td>
                            <td class="price text-center">{{$userList->quantity}} pcs</td>
                            <td class="remove text-center">
                                <form action="{{route('cart.destroy', $userList->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger mb-2 me-2">Delete</button>
                                </form>
                            </td>
                            <td class="amount text-center">{{$subTotal}} €</td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td class="total-quantity" colspan="4">Total</td>
                            <td class="total-quantity" colspan="1">{{$shoppingListsCount}} Items</td>
                            <td class="total-amount text-center">Total Price</td>
                            <td class="total-amount text-right">€ {{$totalAmount}}</td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="text-right">
                        <a href="{{route('frontend.cartCheckout')}}" class="btn btn-group btn-default">Checkout</a>
                    </div>

                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->

@endsection
