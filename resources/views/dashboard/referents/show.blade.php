@extends('layouts.dashboard');
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <div class="table-responsive">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-2">
                                <a href="{{route('referents.create')}}"
                                   class="nav-link d-flex align-items-center text-truncate btn btn-primary"
                                   style="color: white; width: 200px">
                                            <span class="sidebar-icon">
                                                <span class="material-symbols-rounded">
                                                 add
                                                </span>
                                            </span>
                                    <span class="sidebar-text">Креирај референт</span>
                                </a>
                            </div>
                        </div>

                        <br>
                        <!--Begin::table card-->
                        <div class="  table-nowrap mb-3 mb-lg-5">
                            <div class="table-responsive table-card table-nowrap">
                                <table class="table align-middle table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th class="text-center">Слика</th>
                                        <th class="text-center">Име</th>
                                        <th class="text-center">Опис</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$referents->id}}</td>
                                            <td class="text-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <img src="/assets/img/referents/medium/{{ $referents->image }}"
                                                             class="mb-0 img-responsive" style="width: 50px">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">{{$referents->name}}</h6>
                                                        <small class="text-muted">{{$referents->email}}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">{{strip_tags($referents->description)}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-end">
                                <a href="{{route('referents.index')}}" class="btn btn-secondary mb-2 me-2"
                                   data-tippy-content="Назад кон референти">
                                                <span class="material-symbols-rounded align-middle me-2">
                                                    arrow_back_ios
                                                    </span> Назад</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
