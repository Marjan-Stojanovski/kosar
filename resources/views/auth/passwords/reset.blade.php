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
                        <h4 class="text-center">{{ __('Reset Password') }}</h4>
                        <p class="mb-4 text-muted text-center">
                            Please provide details...
                        </p>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
