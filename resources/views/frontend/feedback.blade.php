@extends('welcome')
@section('content')

    <div class="container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}" style="color: black">Domov</a></li>
                <li class="active">Kontakt</li>
            </ol>
        </div>
    </div>
    <div class="banner dark-translucent-bg" style="background-position: 50% 30%;">
        <!-- breadcrumb start -->
        <!-- ================ -->

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
    <!-- ================ -->
    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
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
                <!-- main end -->

                <!-- sidebar start -->
                <!-- ================ -->
                <!--
                <aside class="col-md-3 col-lg-offset-1">
                    <div class="sidebar">
                        <div class="side vertical-divider-left">
                            <h3 class="title logo-font">The <span class="text-default">Project</span></h3>
                            <div class="separator-2 mt-20"></div>
                            <ul class="list">
                                <li><i class="fa fa-home pr-10"></i>795 Folsom Ave, Suite 600<br><span class="pl-20">San Francisco, CA 94107</span></li>
                                <li><i class="fa fa-phone pr-10"></i><abbr title="Phone">P:</abbr> (123) 456-7890</li>
                                <li><i class="fa fa-mobile pr-10 pl-5"></i><abbr title="Phone">M:</abbr> (123) 456-7890</li>
                                <li><i class="fa fa-envelope pr-10"></i><a href="mailto:info@idea.com">info@theproject.com</a></li>
                            </ul>
                            <ul class="social-links circle small margin-clear clearfix animated-effect-1">
                                <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                                <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                                <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
                                <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                            <div class="separator-2 mt-20 "></div>
                            <a class="btn btn-gray collapsed map-show btn-animated" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">Show Map <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </aside>
                -->
                <!-- sidebar end -->
            </div>
        </div>
    </section>
    <!-- main-container end -->
@endsection
