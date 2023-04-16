@extends('layouts.app')
@section('content')

    <div class="content p-1 d-flex flex-column-fluid position-relative">
        <div class="container py-4">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-5 col-xl-4">
                    <!--Logo-->
                    <div id="logo" class="logo text-center">
                        <a href="{{route('frontend.index')}}"><img id="logo_img" style="width: 70px; padding: 5px"
                                                                   src="/assets/img/logo.jpg"
                                                                   alt="The Project"></a>
                    </div>
                    <!--Card-->
                    <div class="card card-body p-4">
                        <h4 class="text-center">Welcome Back!</h4>
                        <p class="mb-4 text-muted text-center">
                            Please Sign In with details...
                        </p>
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="w-100 btn btn-lg btn-primary"
                            ">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
