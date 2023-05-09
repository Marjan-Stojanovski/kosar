@extends('welcome')
@section('content')

    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}">Home</a></li>
                <li><a href="{{route('frontend.details')}}">Account Details</a></li>
                <li class="active">Update Account Details</li>
            </ol>
        </div>
    </div>
    <!-- breadcrumb end -->

    <section class="main-container">
        <div class="container">
            <div class="row">
                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">
                    <p class="title text-center" style="font-size: 25px; color: black">Enter user details</p>
                    <div class="separator"></div>
                    <br>
                    <div class="text-center">

                        <div class="col-md-3"></div>
                        <div class="col-md-3 text-center" style="padding-top: 7px">
                            <label for="type" class="">Choose Account Type <span
                                    class="text-danger small">*</span></label>
                        </div>
                        <div class="col-md-3">
                            <select type="text" id="type" class="form-control"
                                    name="type"
                                    required autofocus onchange='onSelectChangeHandler()'>
                                <option selected>Choose Type</option>
                                <option value="private">Private</option>
                                <option value="company">Company</option>
                            </select>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <br>
                    <br>


                    <form id="companyPrivate" style="display: none" class="form-horizontal"
                          action="{{route('frontend.updateDetails', $details->id)}}"
                          method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group has-feedback">
                            <label for="firstName" class="col-sm-3 control-label">First Name <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="First Name" id="firstName" class="form-control"
                                       name="firstName"
                                       autofocus value="{{$details->firstName}}">
                                @if ($errors->has('firstName'))
                                    <span class="text-danger">{{ $errors->first('firstName') }}</span>
                                @endif
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="lastName" class="col-sm-3 control-label">Last Name <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Last Name" id="lastName" class="form-control"
                                       name="lastName"
                                       required autofocus value="{{$details->lastName}}">
                                @if ($errors->has('lastName'))
                                    <span class="text-danger">{{ $errors->first('lastName') }}</span>
                                @endif
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="phoneNumber" class="col-sm-3 control-label">Phone Number <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Phone Number" id="phoneNumber" class="form-control"
                                       name="phoneNumber"
                                       required autofocus value="{{$details->phoneNumber}}">
                                @if ($errors->has('phoneNumber'))
                                    <span class="text-danger">{{ $errors->first('phoneNumber') }}</span>
                                @endif
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="email" class="col-sm-3 control-label">Email <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="email" placeholder="Email" id="email" class="form-control"
                                       name="email" required autofocus value="{{$details->email}}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="address" class="col-sm-3 control-label">Address <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Address" id="address" class="form-control"
                                       name="address" required autofocus value="{{$details->address}}">
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="city" class="col-sm-3 control-label">City <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="City" id="city" class="form-control"
                                       name="city" required autofocus value="{{$details->City}}">
                                @if ($errors->has('city'))
                                    <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="zipcode" class="col-sm-3 control-label">ZIP Code <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="number" placeholder="ZIP" id="zipcode" class="form-control"
                                       name="zipcode" required autofocus value="{{$details->zipcode}}">
                                @if ($errors->has('zipcode'))
                                    <span class="text-danger">{{ $errors->first('zipcode') }}</span>
                                @endif
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                        </div>


                        <div class="form-group has-feedback">
                            <label for="country_id" class="col-sm-3 control-label">Држава <span
                                    class="text-danger small">*</span></label>
                            <!--select-->
                            <div class="col-sm-8">
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
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" class="btn btn-group btn-default btn-animated">Save<i
                                        class="fa fa-check"></i></button>
                            </div>
                        </div>
                    </form>
                    <form id="companyCompany" style="display: none" class="form-horizontal"
                          action="{{route('frontend.updateDetails', $details->id)}}"
                          method="POST">
                        @csrf
                        <div id="companyName" class="form-group has-feedback">
                            <label for="company" class="col-sm-3 control-label">Company Name <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Company Name" id="company" class="form-control"
                                       name="company"
                                       autofocus value="{{$details->company}}">
                                @if ($errors->has('company'))
                                    <span class="text-danger">{{ $errors->first('company') }}</span>
                                @endif
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                        </div>
                        <div id="companyTax" class="form-group has-feedback">
                            <label for="taxNumber" class="col-sm-3 control-label">Company Tax Number <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="number" placeholder="Company Tax Number" id="taxNumber"
                                       class="form-control"
                                       name="taxNumber"
                                       autofocus value="{{$details->taxNumber}}">
                                @if ($errors->has('taxNumber'))
                                    <span class="text-danger">{{ $errors->first('taxNumber') }}</span>
                                @endif
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="firstName" class="col-sm-3 control-label">First Name <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="First Name" id="firstName" class="form-control"
                                       name="firstName"
                                       autofocus value="{{$details->firstName}}">
                                @if ($errors->has('firstName'))
                                    <span class="text-danger">{{ $errors->first('firstName') }}</span>
                                @endif
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="lastName" class="col-sm-3 control-label">Last Name <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Last Name" id="lastName" class="form-control"
                                       name="lastName"
                                       required autofocus value="{{$details->lastName}}">
                                @if ($errors->has('lastName'))
                                    <span class="text-danger">{{ $errors->first('lastName') }}</span>
                                @endif
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="phoneNumber" class="col-sm-3 control-label">Phone Number <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Phone Number" id="phoneNumber" class="form-control"
                                       name="phoneNumber"
                                       required autofocus value="{{$details->phoneNumber}}">
                                @if ($errors->has('phoneNumber'))
                                    <span class="text-danger">{{ $errors->first('phoneNumber') }}</span>
                                @endif
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="email" class="col-sm-3 control-label">Email <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="email" placeholder="Email" id="email" class="form-control"
                                       name="email" required autofocus value="{{$details->email}}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="address" class="col-sm-3 control-label">Address <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Address" id="address" class="form-control"
                                       name="address" required autofocus value="{{$details->address}}">
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="city" class="col-sm-3 control-label">City <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="City" id="city" class="form-control"
                                       name="city" required autofocus value="{{$details->city}}">
                                @if ($errors->has('city'))
                                    <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="zipcode" class="col-sm-3 control-label">ZIP Code <span
                                    class="text-danger small">*</span></label>
                            <div class="col-sm-8">
                                <input type="number" placeholder="ZIP" id="zipcode" class="form-control"
                                       name="zipcode" required autofocus value="{{$details->zipcode}}">
                                @if ($errors->has('zipcode'))
                                    <span class="text-danger">{{ $errors->first('zipcode') }}</span>
                                @endif
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" class="btn btn-group btn-default btn-animated">Save<i
                                        class="fa fa-check"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
