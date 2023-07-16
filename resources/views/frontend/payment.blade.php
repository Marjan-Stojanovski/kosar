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
                    <h1 class="page-title text-center">Payment Details</h1>
                    <br>
                    <!-- page-title end -->
                    <fieldset>
                        <form action="{{ route('frontend.savePaymentInfo') }}" role="form" method="post"
                              class="form-horizontal"
                              id="payment-information">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="methodForPayment" id="optionsRadios1"
                                                   value="Credit Card"
                                                   checked>
                                            Credit Card<i class="fa fa-cc-visa pl-10"></i><i
                                                class="fa fa-cc-amex pl-10"></i><i
                                                class="fa fa-cc-mastercard pl-10"></i>
                                        </label>
                                    </div>
                                    <div class="space-bottom"></div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label for="paymentFullName" class="col-md-3 control-label">Full Name<small
                                                class="text-default">*</small></label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class=" col-lg-9 col-md-4 col-xs-6 col-sm-2">
                                                    <input type="text"
                                                           class="form-control @error('paymentFullName') is-invalid @enderror"
                                                           name="paymentFullName">
                                                    @error('paymentFullName')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cardName" class="col-md-3 control-label">Credit Card<small
                                                class="text-default">*</small></label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <select class="form-control" name="cardName">
                                                        <option value="visa" selected="selected">VISA</option>
                                                        <option value="master-card">Master Card</option>
                                                        <option value="american-express">American Express</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cardNumber" class="col-md-3 control-label">Card Number<small
                                                class="text-default">*</small></label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class=" col-lg-9 col-md-4 col-xs-6 col-sm-2">
                                                    <input type="text"
                                                           class="form-control @error('cardNumber') is-invalid @enderror"
                                                           name="cardNumber">
                                                    @error('cardNumber')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="expDate" class="col-md-3 control-label">Expiration Date<small
                                                class="text-default">*</small></label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-2">
                                                    <input placeholder="Month"
                                                        class="form-control @error('expDateMonth') is-invalid @enderror"
                                                        name="expDateMonth">
                                                    @error('expDateMonth')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="col-xs-6 col-sm-2">
                                                    <input placeholder="Year"
                                                        class="form-control @error('expDateYear') is-invalid @enderror"
                                                        name="expDateYear">
                                                    @error('expDateYear')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="csv" class="col-md-3 control-label">CVS<small
                                                class="text-default">*</small></label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-2">
                                                    <input type="text"
                                                           class="form-control @error('csv') is-invalid @enderror"
                                                           name="csv">
                                                    @error('csv')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
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
                                            <input type="radio" name="methodForPayment" id="optionsRadios3"
                                                   value="Profaktura">
                                            Plati so Profaktura
                                        </label>
                                    </div>
                                    <div class="space-bottom"></div>
                                </div>
                                <div class="col-lg-9 radio">
                                    <p>Isporaka posle platena profaktura.</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <a href="" class="btn btn-group btn-default"><i
                                        class="icon-left-open-big"></i> Back</a>
                                <button class="btn btn-group btn-default" type="submit">Complete Your Order
                                    <i class="icon-right-open-big"></i></button>
                            </div>
                        </form>
                    </fieldset>

                </div>
            </div>
            <!-- main end -->

        </div>
        </div>
    </section>
    <!-- main-container end -->
@endsection
