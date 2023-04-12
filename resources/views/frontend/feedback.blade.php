@extends('welcome')
@section('content')

    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}" style="color: black">Domov</a>
                </li>
                <li class="active" style="color: black">Kontakt</li>
            </ol>
        </div>
    </div>
    <div class="banner dark-translucent-bg" style="background-position: 50% 30%;">
        <!-- breadcrumb start -->
        <!-- breadcrumb end -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center col-md-offset-2 pv-20">
                    <h2 class="title">Kontaktirajte nas</h2>
                    <div class="separator mt-10"></div>
                    <p class="text-center">Nekateri tekst tukaj</p>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->
    <!-- main-container start -->
    <section class="main-container">
        <div class="container">
            <div class="row">
                <!-- main start -->
                <div class="main col-md-12 space-bottom">
                    <p class="lead">It would be great to hear from you! Just drop us a line and ask for anything with
                        which you think we could be helpful. We are looking forward to hearing from you!</p>
                    <div class="alert alert-success hidden" id="MessageSent">
                        We have received your message, we will contact you very soon.
                    </div>
                    <div class="alert alert-danger hidden" id="MessageNotSent">
                        Oops! Something went wrong, please verify that you are not a robot or refresh the page and try
                        again.
                    </div>
                    <div class="contact-form">
                        <form id="contact-form-with-recaptcha" class="margin-clear" role="form">
                            <div class="form-group has-feedback">
                                <label for="name">Name*</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="">
                                <i class="fa fa-user form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="">
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="subject">Subject*</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="">
                                <i class="fa fa-navicon form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="message">Message*</label>
                                <textarea class="form-control" rows="6" id="message" name="message"
                                          placeholder=""></textarea>
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                            <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                            <input type="submit" value="Submit" class="submit-button btn btn-default">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main-container end -->
@endsection
