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
                            @if(isset($orderDetail->companyName))
                                <div class="col-sm-offset-3 col-sm-3">
                                    <p class="text-right small"><strong>Invoice #{{ $lastOrder->id }}
                                            /{{ $dateYear }}</strong> <br> {{ $dateOrder }} </p>
                                    <h5 class="text-right"> {{ $lastOrder->firstName }}  {{ $lastOrder->lastName }}</h5>
                                    <p class="text-right small">
                                        <strong>Name:</strong>
                                        <span> {{ $lastOrder->firstName }}  {{ $lastOrder->lastName }}</span> <br>
                                        <strong>Company:</strong> John Doe <br>
                                        <strong>Address:</strong> {{ $lastOrder->address }} <br>
                                        <strong>Tel:</strong> {{ $lastOrder->phoneNumber }} <br>
                                        <strong>Vat:</strong> 1231231231
                                    </p>
                                </div>
                            @endif
                            @if(!isset($orderDetail->companyName))
                                <div class="col-sm-offset-3 col-sm-3">
                                    <p class="text-right small"><strong>Invoice #{{ $lastOrder->id }}
                                            /{{ $dateYear }}</strong> <br> {{ $dateOrder }} </p>
                                    <br>
                                    <h5 class="text-right"> {{ $lastOrder->firstName }}  {{ $lastOrder->lastName }}</h5>
                                    <p class="text-right small">
                                        <br>
                                        <strong>Address:</strong> {{ $lastOrder->address }} <br>
                                        <strong>Country:</strong> {{ $lastOrder->country->name }} <br>
                                        <strong>Tel:</strong> {{ $lastOrder->phoneNumber }} <br>
                                    </p>
                                </div>
                            @endif
                        </div>
                        <p class="small"><strong>Comments/PO:</strong>{{ $lastOrder->comment }}</p>
                        <table class="table cart table-bordered " style="table-layout: fixed;width: 100%">
                            <thead>
                            <tr>
                                <th class="text-center" style="width:8%">Product</th>
                                <th class="text-center" style="width:42%">Description</th>
                                <th class="text-center" style="width:15%">Unit price</th>
                                <th class="text-center" style="width:15%">Quantity</th>
                                <th class="text-right" style="width:20%">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $subTotal = 0;
                            ?>
                            @foreach($orderDetails as $orderDetail)
                                <tr>
                                        <?php
                                        $unitPrice = 0;
                                        if (isset($orderDetail->product->action)) {
                                            $unitPrice = $orderDetail->product->action;
                                        } else {
                                            $unitPrice = $orderDetail->product->price;
                                        }
                                        $sub = $unitPrice * $orderDetail->quantity;
                                        $price = number_format($sub, 2);
                                        $subTotal += $price;
                                        $discount = $subTotal * $lastOrder->discount /100;
                                        $grandTotal = $lastOrder->total + $lastOrder->shippingCharges - $discount;
                                        ?>
                                    <td class="text-center">
                                        <img style="width: 50px;position: center"
                                             src="/assets/img/products/thumbnails/{{ $orderDetail->product->image }}"
                                             alt="{{ $orderDetail->product->title }}">
                                    </td>
                                    <td class="text-center product"><a
                                            href="shop-product.html">{{ $orderDetail->product->title }}</a>
                                        <small>{{ $orderDetail->product->brand->name }}</small></td>
                                    @if(isset($orderDetail->product->action))
                                        <td class="text-center price">{{ $orderDetail->product->action }} €</td>
                                    @endif
                                    @if(!isset($orderDetail->product->action))
                                        <td class="text-center price">{{ $orderDetail->product->price }} €</td>
                                    @endif
                                    <td class="text-center quantity">{{ $orderDetail->quantity }} </td>
                                    <td class="amount text-end">{{ $price }} €</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="2"></td>
                                <td class="total-quantity text-center" colspan="2">Subtotal</td>
                                <td class="amount">{{ number_format($subTotal, 2) }} €</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td class="total-quantity text-center" colspan="2">Discount &nbsp&nbsp&nbsp {{ $lastOrder->discount }} %</td>
                                <td class="amount">{{  $discount }} €</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td class="total-quantity text-center" colspan="2">Shipping</td>
                                <td class="amount">{{ number_format($lastOrder->shippingCharges, 2) }} €</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td class="total-quantity text-center" colspan="2">Total {{ $orderProductsCount }} Items</td>
                                <td class="total-amount">{{ number_format($grandTotal, 2) }} €</td>
                            </tr>
                            </tbody>
                        </table>
                        <p class="small">Dear <br>If you have any questions concerning this invoice, contact <br><br>
                            <strong>{{ $company->name }}</strong>, <br> tel: <strong>{{ $company->phone }}</strong>,<br>
                            email:
                            <strong>{{ $company->mail }}</strong><br><br> Thank you for your business!</p>
                        <hr>
                    </div>
                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->

@endsection
