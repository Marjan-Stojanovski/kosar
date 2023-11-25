@extends('welcome')
@section('content')

    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}">Home</a></li>
                <li class="active">Reset Password</li>
            </ol>
        </div>
    </div>
    <!-- breadcrumb end -->
    <!-- main-container start -->
    <!-- ================ -->
    <div class="main-container dark-translucent-bg" style="background-image: url(/assets/img/zgane.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;background-position: 50% 30%;">
        <div class="container">
            <div class="row">
                <!-- main start -->
                <!-- ================ -->
                <div class="main object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                    <div class="form-block center-block p-30 light-gray-bg border-clear">
                        <h4 class="text-center" style="color: black">Reset Password</h4>
                        <p class="mb-4 text-muted text-center">
                            Your e-mail address...
                        </p>
                        @if (session('status'))
                            <div class="text-center">
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group has-feedback">
                                <label for="email" class="col-sm-3 control-label">{{ __('Email Address') }}</label>
                                <div class="col-sm-8">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email"
                                           autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <i class="fa fa-user form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit"
                                            class="btn btn-group btn-default btn-animated">{{ __('Send Password Reset Link') }}
                                        <i
                                            class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- main end -->
            </div>
        </div>
    </div>
    <!-- main-container end -->
@endsection
