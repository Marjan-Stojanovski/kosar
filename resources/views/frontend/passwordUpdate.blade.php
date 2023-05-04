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
    <div class="main-container dark-translucent-bg">
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


                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-floating mb-3">
                        <label for="email"
                               class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                               autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <label for="password"
                               class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password"
                               required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <label for="password-confirm"
                               class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control"
                               name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Reset Password') }}
                    </button>
                </form>
                <!-- main end -->
            </div>
        </div>
    </div>
    <!-- main-container end -->
@endsection
