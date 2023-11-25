@extends('layouts.dashboard')
@section('content')


    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <!--Card-->
            <div class="card mb-3 mb-lg-5">
                <div class="card-body">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-12 text-center">
                            <h3>Примена порака</h3>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3 d-inline-block">
                            <div class="py-2 mb-1 px-3 bg-body rounded-3">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">Наслов*</p>
                                </div>
                                <br>
                                <h6 class="mb-0">
                                   <strong>{{ $originalMessage->subject }}</strong>
                                </h6>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3 d-inline-block">
                            <div class="py-2 mb-1 px-3 bg-body rounded-3">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">Име*</p>
                                </div>
                                <br>
                                <h6 class="mb-0">
                                    <strong>{{ $originalMessage->fullName }}</strong>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3 d-inline-block">
                            <div class="py-2 mb-1 px-3 bg-body rounded-3">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">Телефон*</p>
                                </div>
                                <br>
                                <h6 class="mb-0">
                                    <strong>{{ $originalMessage->phone }}</strong>
                                </h6>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3 d-inline-block">
                            <div class="py-2 mb-1 px-3 bg-body rounded-3">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">Е-Маил*</p>
                                </div>
                                <br>
                                <h6 class="mb-0">
                                    <strong>{{ $originalMessage->email }}</strong>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-6 d-inline-block">
                            <div class="py-2 mb-1 px-3 bg-body rounded-3">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">Порака*</p>
                                </div>
                                <br>
                                <h6 class="mb-0">
                                    <strong>{{ $originalMessage->message }}</strong>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-12 text-center">
                            <h3>Испрати Одговор</h3>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="contact-form">
                        <form action="{{route('message.response', $originalMessage->id)}}" method="post" class="margin-clear">
                            @csrf
                            <div class="form-group has-feedback">
                                <label for="messageResponse">Return Message*</label>
                                <textarea class="form-control @error('messageResponse') is-invalid @enderror" rows="6" id="messageResponse" name="messageResponse"
                                          placeholder=""></textarea>
                                @error('messageResponse')
                                <span style="color: red" class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                @enderror
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                            <br>
                            <div class="text-end">
                            <button type="submit" class="btn btn-primary">Испрати</button>
                            </div>
                        </form>
                    </div>











@endsection
