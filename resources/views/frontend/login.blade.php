@extends('welcome')
@section('content')


        <div class="breadcrumb-container">
            <div class="container">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home pr-10"></i><a href="{{ route('frontend.index') }}">Home</a></li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- main-container start -->
        <!-- ================ -->
        <div class="main-container dark-translucent-bg" style="background-image:url('/assets/img/zgane.jpg');">
            <div class="container">
                <div class="row">
                    <!-- main start -->
                    <!-- ================ -->
                    <div class="main object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                        <div class="form-block center-block p-30 light-gray-bg border-clear">
                            <h2 class="title">Login</h2>
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    @csrf
                                <div class="form-group has-feedback">
                                    <label for="inputUserName" class="col-sm-3 control-label">User Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                               autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        <i class="fa fa-user form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-8">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Remember me.
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-group btn-default btn-animated">Log In <i class="fa fa-user"></i></button>
                                        <span> or </span>
                                        <a class="btn btn-group btn-default btn-animated" href="{{ route('frontend.register') }}" style="color: white">Register <i class="fa fa-user"></i></a>
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
