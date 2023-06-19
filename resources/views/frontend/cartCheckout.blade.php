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
                            <th>Product </th>
                            <th class="text-center">Brand</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Quantity</th>
                            <th class="amount">Total </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td class="product">
                                <a href="shop-product.html"></a>
                            </td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">
                                    <input type="text" class="form-control-sm" value="" disabled style="text-align: center; align-content: center; max-width: 70px">
                            </td>
                            <td class="amount">$</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="2"></td>
                            <td class="total-quantity text-center" colspan="2">Subtotal</td>

                            <td class="amount">$ </td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td class="total-quantity text-center" colspan="2">Discount Coupon</td>

                            <td class="amount">-20%</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td class="total-quantity text-center" colspan="2">Total 8 Items</td>

                            <td class="total-amount">$1597.00</td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="space-bottom"></div>
                    <fieldset>
                        <legend>Billing information</legend>
                        <form role="form" class="form-horizontal" id="billing-information">
                            <div class="row">
                                <div class="col-lg-3">
                                    <h3 class="title">Personal Info</h3>
                                </div>
                                <div class="col-lg-8 col-lg-offset-1">
                                    <div class="form-group">
                                        <label for="billingFirstName" class="col-md-2 control-label">First Name<small class="text-default">*</small></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="billingFirstName" value=">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="billingLastName" class="col-md-2 control-label">Last Name<small class="text-default">*</small></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="billingLastName" value="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="billingTel" class="col-md-2 control-label">Telephone<small class="text-default">*</small></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="billingTel" value="Telephone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="billingemail" class="col-md-2 control-label">Email<small class="text-default">*</small></label>
                                        <div class="col-md-10">
                                            <input type="email" class="form-control" id="billingemail" value=">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space"></div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <h3 class="title">Your Address</h3>
                                </div>
                                <div class="col-lg-8 col-lg-offset-1">
                                    <div class="form-group">
                                        <label for="billingAddress" class="col-md-2 control-label">Address<small class="text-default">*</small></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="billingAddress" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Country<small class="text-default">*</small></label>
                                        <div class="col-md-10">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="billingCity" class="col-md-2 control-label">City<small class="text-default">*</small></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="billingCity" value="City">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="billingPostalCode" class="col-md-2 control-label">Zip Code<small class="text-default">*</small></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="billingPostalCode" value="Postal Code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space"></div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <h3 class="title">Additional Info</h3>
                                </div>
                                <div class="col-lg-8 col-lg-offset-1">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                    <fieldset>
                        <legend>Shipping information</legend>
                        <form role="form" class="form-horizontal" id="shipping-information-container">
                            <div id="shipping-information" class="space-bottom">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <h3 class="title">Personal Info</h3>
                                    </div>
                                    <div class="col-lg-8 col-lg-offset-1">
                                        <div class="form-group">
                                            <label for="shippingFirstName" class="col-md-2 control-label">First Name<small class="text-default">*</small></label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="shippingFirstName" value="First Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shippingLastName" class="col-md-2 control-label">Last Name<small class="text-default">*</small></label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="shippingLastName" value="Last Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shippingTel" class="col-md-2 control-label">Telephone<small class="text-default">*</small></label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="shippingTel" value="Telephone">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shippingFax" class="col-md-2 control-label">Fax</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="shippingFax" value="Fax">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shippingemail" class="col-md-2 control-label">Email<small class="text-default">*</small></label>
                                            <div class="col-md-10">
                                                <input type="email" class="form-control" id="shippingemail" value="Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space"></div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <h3 class="title">Your Address</h3>
                                    </div>
                                    <div class="col-lg-8 col-lg-offset-1">
                                        <div class="form-group">
                                            <label for="shippingAddress1" class="col-md-2 control-label">Address 1<small class="text-default">*</small></label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="shippingAddress1" value="Address 1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shippingAddress2" class="col-md-2 control-label">Address 2</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="shippingAddress2" value="Address 2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Country<small class="text-default">*</small></label>
                                            <div class="col-md-10">
                                                <select class="form-control">
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shippingCity" class="col-md-2 control-label">City<small class="text-default">*</small></label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="shippingCity" value="City">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shippingPostalCode" class="col-md-2 control-label">Zip Code<small class="text-default">*</small></label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="shippingPostalCode" value="Postal Code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox padding-top-clear">
                                <label>
                                    <input type="checkbox" id="shipping-info-check" checked> My Shipping information is the same as my Billing information.
                                </label>
                            </div>
                        </form>
                    </fieldset>
                    <div class="text-right">
                        <a href="shop-cart.html" class="btn btn-group btn-default"><i class="icon-left-open-big"></i> Go Back To Cart</a>
                        <a href="shop-checkout-payment.html" class="btn btn-group btn-default">Next Step <i class="icon-right-open-big"></i></a>
                    </div>

                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->

@endsection
