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
                        <h4 class="text-center">Reset Password</h4>
                        <p class="mb-4 text-muted text-center">
                            Your e-mail address...
                        </p>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button class="w-100 btn btn-lg btn-primary"
                                    type="submit">{{ __('Send Password Reset Link') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
