@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content p-1 d-flex flex-column-fluid position-relative">
    <div class="container py-4">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-8 col-lg-5 col-xl-4">
                <!--Logo-->
                <div id="logo" class="logo text-center">
                    <a href="{{route('frontend.index')}}"><img id="logo_img" style="width: 70px; padding: 5px"
                                                               src="/assets/img/logo.jpg"
                                                               alt="The Project"></a>
                </div>
                <!--Card-->
                <div class="card card-body p-4">
                    <h4 class="text-center">Hello!</h4>
                    <p class="mb-4 text-center text-muted">
                        To get started, Please signup with details...
                    </p>
                    <form action="{{ route('register') }}" method="POST" class="z-index-1 position-relative needs-validation" novalidate="">
                        @csrf

                        <div class="form-floating mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>


















                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" required=""
                                   id="floatingInputEmail" placeholder="name@example.com">
                            <label for="floatingInputEmail">Email address</label>
                            <span class="invalid-feedback">Please enter a valid email address</span>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" required="" class="form-control"
                                   id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            <span class="invalid-feedback">Enter the password</span>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" required="" class="form-control"
                                   id="floatingPassword2" placeholder="Password">
                            <label for="floatingPassword2">Confirm Password</label>
                            <span class="invalid-feedback">Enter the same password as above</span>
                        </div>
                        <div class="d-flex align-items-strech justify-content-between mb-3">
                            <div class="form-check">
                                <input class="form-check-input me-1" required id="terms"
                                       type="checkbox" value="">
                                <label class="form-check-label" for="terms">Agree to our <a
                                        href="#!.html">Terms & conditions</a></label>
                                <span class="invalid-feedback">You must be agree to terms &
                                                        conditions</span>
                            </div>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
                        <hr class="mt-4">
                        <p class="text-muted text-center">
                            Alread have an account? <a href="{{route('login')}}"
                                                       class="ms-2 text-body">LogIn</a>

                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
