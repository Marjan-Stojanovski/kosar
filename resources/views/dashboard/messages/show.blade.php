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
                            <h3>Порака</h3>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-md col-12">
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="" class="btn btn-primary">Одговори</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="" class="btn btn-danger">Избриши</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <hr class="my-4">

                    <form action="{{ route('message.update', $message->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label" for="fullName">
                                        Full Name
                                    </label>
                                    <input type="text" class="form-control"
                                           id="fullName" name="fullName"
                                           value="{{ $message->fullName }}">
                                </div>

                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label" for="subject">
                                        Subject
                                    </label>
                                    <input type="text" class="form-control"
                                           id="subject" name="subject"
                                           value="{{ $message->subject }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="phone">
                                    Phone
                                </label>
                                <input class="form-control" type="text"
                                       id="phone" name="phone" value="{{ $message->phone }}">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="email">
                                    Email
                                </label>
                                <input class="form-control" id="email" type="email"
                                       name="email" value="{{ $message->email }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 mb-6">
                                <label class="form-label" for="message">
                                    Message
                                </label>
                                <textarea class="form-control" type="text"
                                          id="message" name="message" rows="5" value="">{{ $message->message }}</textarea>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Save
                                Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
@endsection
