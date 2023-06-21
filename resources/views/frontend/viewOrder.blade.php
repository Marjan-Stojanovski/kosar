@extends('welcome')
@section('content')
    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="../index.html">Home</a></li>
                <li class="active">Product Title</li>
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
                    <h1 class="page-title text-center">Order Details</h1>
                    <div class="separator"></div>
                    <!-- page-title end -->

                    <div id="invoice-container" class="invoice-container">
                        <div class="row">
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
                            <div class="col-sm-offset-3 col-sm-3">
                                <p class="text-right small"><strong>Invoice #001</strong> <br> May 15, 2015</p>
                                <h5 class="text-right">Client</h5>
                                <p class="text-right small">
                                    <strong>Name:</strong> <span>John Doe</span> <br>
                                    <strong>Company:</strong> John Doe <br>
                                    <strong>Address:</strong> 795 Folsom Ave, Suite 600 <br>
                                    <strong>Tel:</strong> +12 123 123 1234 <br>
                                    <strong>Vat:</strong> 1231231231
                                </p>
                            </div>
                        </div>
                        <p class="small"><strong>Comments/PO:</strong> Lorem ipsum dolor sit amet, consectetur.</p>
                        <table class="table cart table-bordered">
                            <thead>
                            <tr>
                                <th>Description </th>
                                <th>Price </th>
                                <th>Quantity</th>
                                <th class="amount">Total </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td class="product"><a href="shop-product.html">{{ $orderDetail->product->title }}</a> <small>{{ $orderDetail->product->brand->name }}</small></td>
                                <td class="price">$ {{ $orderDetail->product->price }} </td>
                                <td class="quantity">{{ $orderDetail->quantity }} </td>
                                <td class="amount">$199.00 </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td class="total-quantity" colspan="3">Subtotal</td>
                                <td class="amount">$1997.00</td>
                            </tr>
                            <tr>
                                <td class="total-quantity" colspan="1">Discount Coupon</td>
                                <td class="price">TheProject25672</td>
                                <td class="price">-20%</td>
                                <td class="amount">-$399.40</td>
                            </tr>
                            <tr>
                                <td class="total-quantity" colspan="2">Sales Tax</td>
                                <td class="price">+10%</td>
                                <td class="amount">$159.76</td>
                            </tr>
                            <tr>
                                <td class="total-quantity" colspan="3">Shipping</td>
                                <td class="amount">$12.00</td>
                            </tr>
                            <tr>
                                <td class="total-quantity" colspan="3">Total 8 Items</td>
                                <td class="total-amount">${{ $lastOrder->total }}</td>
                            </tr>
                            </tbody>
                        </table>
                        <p class="small">If you have any questions concerning this invoice, contact <strong>The Project Inc.</strong>, tel: <strong>+12 123 123 1234</strong>, email: <strong>theproject@info.com</strong> <br> Thank you for your business!</p>
                        <hr>
                    </div>
                    <div class="text-right">
                        <button onclick="print_window();" class="btn btn-print btn-default-transparent btn-hvr hvr-shutter-out-horizontal">Print <i class="fa fa-print pl-10"></i></button>
                    </div>
                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->

@endsection
