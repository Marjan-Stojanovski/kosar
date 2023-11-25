
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
                <h1 class="page-title text-center">Order {{ $orderInfo->id }}Details</h1>
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
                        @if(isset($orderInfo->companyName))
                            <div class="col-sm-offset-3 col-sm-3">
                                <p class="text-right small"><strong>Invoice #{{ $orderInfo->id }}
                                        /</strong> <br> </p>
                                <h5 class="text-right"> {{ $orderInfo->firstName }}  {{ $orderInfo->lastName }}</h5>
                                <p class="text-right small">
                                    <strong>Name:</strong>
                                    <span> {{ $orderInfo->firstName }}  {{ $orderInfo->lastName }}</span> <br>
                                    <strong>Company:</strong> John Doe <br>
                                    <strong>Address:</strong> {{ $orderInfo->address }} <br>
                                    <strong>Tel:</strong> {{ $orderInfo->phoneNumber }} <br>
                                    <strong>Vat:</strong> 1231231231
                                </p>
                            </div>
                        @endif
                        @if(!isset($orderInfo->companyName))
                            <div class="col-sm-offset-3 col-sm-3">
                                <p class="text-right small"><strong>Invoice #{{ $orderInfo->id }}
                                        /</strong> <br> </p>
                                <br>
                                <h5 class="text-right"> {{ $orderInfo->firstName }}  {{ $orderInfo->lastName }}</h5>
                                <p class="text-right small">
                                    <br>
                                    <strong>Address:</strong> {{ $orderInfo->address }} <br>
                                    <strong>Country:</strong> {{ $orderInfo->country->name }} <br>
                                    <strong>Tel:</strong> {{ $orderInfo->phoneNumber }} <br>
                                </p>
                            </div>
                        @endif
                    </div>
                    <p class="small"><strong>Comments/PO:</strong>{{ $orderInfo->comment }}</p>
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
                        @foreach($orderProducts as $orderProduct)
                            <tr>
                                <td class="text-center">
                                    <img style="width: 50px;position: center"
                                         src="/assets/img/products/thumbnails/{{ $orderProduct->product->image }}"
                                         alt="{{ $orderProduct->product->title }}">
                                </td>
                                <td class="text-center product"><a
                                        href="shop-product.html">{{ $orderProduct->product->title }}</a>
                                    <small>{{ $orderProduct->product->brand->name }}</small></td>
                                @if(isset($orderProduct->product->action))
                                    <td class="text-center price">{{ $orderProduct->product->action }} €</td>
                                @endif
                                @if(!isset($orderProduct->product->action))
                                    <td class="text-center price">{{ $orderProduct->product->price }} €</td>
                                @endif
                                <td class="text-center quantity">{{ $orderProduct->quantity }} </td>
                                <td class="amount text-end">{{ $orderProduct->price }} €</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2"></td>
                            <td class="total-quantity text-center" colspan="2">Subtotal</td>
                            <td class="amount">{{ number_format($subTotal, 2) }} €</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td class="total-quantity text-center" colspan="2">Discount &nbsp&nbsp&nbsp {{ $orderInfo->discount }} %</td>
                            <td class="amount">{{  $orderInfo->discount }} €</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td class="total-quantity text-center" colspan="2">Shipping</td>
                            <td class="amount">{{ number_format($orderInfo->shippingCharges, 2) }} €</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td class="total-quantity text-center" colspan="2">Total {{ $orderProductsCount }} Items</td>
                            <td class="total-amount">{{ number_format($orderInfo->total, 2) }} €</td>
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
