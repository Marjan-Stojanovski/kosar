@extends('welcome')
@section('content')
    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="../index.html">Home</a></li>
                <li class="active">Checkout Payment</li>
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
                    <h1 class="page-title text-center">Checkout Payment</h1>
                    <div class="separator"></div>
                    <!-- page-title end -->

                    <fieldset>
                        <legend>Payment</legend>
                        <form role="form" class="form-horizontal" id="payment-information">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                            Credit Card<i class="fa fa-cc-visa pl-10"></i><i class="fa fa-cc-amex pl-10"></i><i class="fa fa-cc-mastercard pl-10"></i>
                                        </label>
                                    </div>
                                    <div class="space-bottom"></div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label for="paymentFullName" class="col-md-3 control-label">Full Name<small class="text-default">*</small></label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class=" col-lg-9 col-md-4 col-xs-6 col-sm-2">
                                                    <input type="text" class="form-control" id="paymentFullName" name="paymentFullName" ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Name -->
                                    <!--
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Credit Card<small class="text-default">*</small></label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <select class="form-control">
                                                        <option value="visa" selected="selected">VISA</option>
                                                        <option value="master-card">Master Card</option>
                                                        <option value="american-express">American Express</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    -->
                                    <div class="form-group">
                                        <label for="cardNumber" class="col-md-3 control-label">Card Number<small class="text-default">*</small></label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class=" col-lg-9 col-md-4 col-xs-6 col-sm-2">
                                                    <input type="text" class="form-control" id="cardNumber" name="cardNumber" ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Expiration Date<small class="text-default">*</small></label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-2">
                                                    <select class="form-control">
                                                        <option value="01" selected="selected">01</option>
                                                        <option value="03">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-6 col-sm-2">
                                                    <select class="form-control">
                                                        <option value="2014" selected="selected">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">CVS<small class="text-default">*</small></label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-2">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space"></div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                            Paypal<i class="fa fa-cc-paypal pl-10"></i>
                                        </label>
                                    </div>
                                    <div class="space-bottom"></div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label for="paymentEmail" class="col-md-3 control-label">Email<small class="text-default">*</small></label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <input type="email" class="form-control" id="paymentEmail" value="Email">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space"></div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                            Cash On Delivery
                                        </label>
                                    </div>
                                    <div class="space-bottom"></div>
                                </div>
                                <div class="col-lg-9">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, quo, non sint nisi, corrupti fuga qui quod autem totam, molestias reiciendis ex unde. Molestias, nostrum numquam, beatae totam esse ab.</p>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                    <div class="text-right">
                        <a href="shop-checkout.html" class="btn btn-group btn-default"><i class="icon-left-open-big"></i> Go Back</a>
                        <a href="shop-checkout-review.html" class="btn btn-group btn-default">Review and Complete Your Order <i class="icon-right-open-big"></i></a>
                    </div>

                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->
@endsection
