@extends('welcome')
@section('content')

    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="../index.html">Home</a></li>
                <li class="active">Register User</li>
            </ol>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- main-container start -->
    <!-- ================ -->
    <div class="main-container dark-translucent-bg" style="background-image: url(/assets/img/zgane.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;background-position: 50% 30%;">
        <div class="container">
            <div class="row">
                <div class="main object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                    <div class="form-block center-block p-30 light-gray-bg border-clear">
                        <h2 class="title text-center">Register User</h2>
                        <form class="form-horizontal" action="{{ route('register')}}" method="POST">
                            @csrf
                            <div class="form-group has-feedback">
                                <label for="firstName" class="col-sm-3 control-label">First Name <span
                                        class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="First Name" id="firstName" class="form-control"
                                           name="firstName"
                                           required autofocus>
                                    @if ($errors->has('firstName'))
                                        <span class="text-danger">{{ $errors->first('firstName') }}</span>
                                    @endif
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="LastName" class="col-sm-3 control-label">Last Name <span
                                        class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="Last Name" id="lastName" class="form-control"
                                           name="lastName"
                                           required autofocus>
                                    @if ($errors->has('lastName'))
                                        <span class="text-danger">{{ $errors->first('lastName') }}</span>
                                    @endif
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback" hidden>
                                <label hidden for="role_id" class="col-sm-3 control-label">Role <span
                                        class="text-danger small">*</span></label>
                                <div class="col-sm-8" hidden>
                                    <input type="text" placeholder="role_id" hidden id="role_id" class="form-control"
                                           name="role_id"
                                           value="2">
                                    @if ($errors->has('role_id'))
                                        <span class="text-danger">{{ $errors->first('role_id') }}</span>
                                    @endif
                                    <i class="fa fa-pencil form-control-feedback" hidden></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="email" class="col-sm-3 control-label">Email <span
                                        class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                                    <input type="email" placeholder="Email" id="email_address" class="form-control"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="password" class="col-sm-3 control-label">Password <span
                                        class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                    <i class="fa fa-lock form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                            <label for="password-confirm"
                                   class="col-sm-3 control-label">{{ __('Confirm Password') }} <span
                                    class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password"
                                   name="password_confirmation" required autocomplete="new-password">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                    <i class="fa fa-lock form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-group btn-default btn-animated">Register<i
                                            class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-container end -->
@endsection
