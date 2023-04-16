@extends('layouts.app')
@section('content')

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
                        <form action="{{ route('register') }}" method="POST"
                              class="z-index-1 position-relative needs-validation" novalidate="">
                            @csrf

                            <div class="form-floating mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <label for="address"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                                <input id="address" type="text"
                                       class="form-control @error('address') is-invalid @enderror" name="address"
                                       value="{{ old('address') }}" required autocomplete="address" autofocus>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <label for="country_id" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>
                                <!--select-->
                                <select name="country_id" id="country_id"
                                        class="form-control @error('country_id') is-invalid @enderror">
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                    @error('country_id')
                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                    @enderror
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">

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
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
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
