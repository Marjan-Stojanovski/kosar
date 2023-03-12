@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="card card-body">
                <div class="table-responsive">
                    <div class="container">
                        <div class="row">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-2">
                                        <a class="btn btn-primary">Корисник</a>
                                    </div>
                                </div>
                                <br>
                                <!--Begin::table card-->
                                <div class=" table-nowrap mb-3 mb-lg-5">
                                    <div class="table-responsive table-card table-nowrap">
                                        <table class="table align-middle table-hover mb-0">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th class="text-center">Име</th>
                                                <th class="text-center">Улога</th>
                                                <th class="text-center">Држава</th>

                                            </tr>

                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>{{$users->id}}</td>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0">{{$users->name}}</h6>
                                                                <small class="text-muted">{{$users->email}}</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="badge bg-success fs-6">{{$users->role->name}}</span>
                                                    </td>

                                                    <td class="text-center">
                                                        <span class="mb-0">{{$users->country->name}}</span>
                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="{{route('users.index')}}" class="btn btn-secondary mb-2 me-2"
                               data-tippy-content="Назад кон корисници">
                                                <span class="material-symbols-rounded align-middle me-2">
                                                    arrow_back_ios
                                                    </span> Назад</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
