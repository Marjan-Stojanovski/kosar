@extends('layouts.dashboard');
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-2">
                <a href="{{route('company_info.edit', $company->id)}}"
                   class="nav-link d-flex align-items-center text-truncate btn btn-primary"
                   style="color: white; width: 230px">
                                            <span class="sidebar-icon">
                                                <span class="material-symbols-rounded">
                                                 settings
                                                </span>
                                            </span>
                    <span class="sidebar-text" data-tippy-content="Додади информации">Промени подесувања</span>
                </a>
                <br>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card table-card table-wrap">
                    <div class="text-center">
                        <br>
                        <img src="/assets/img/company_info/medium/{{$company->image}}" alt="slika"
                             class="img-responsive rounded-5 mb-3 mb-lg-0 shadow-lg" style="width: 400px">
                    </div>
                    <div class="card-header">
                        <h5>{{$company->name}}</h5>
                        <small class="text-muted"></small>
                        <br>
                        <small class="text-muted">Последна промена: {{$company->created_at->diffForHumans()}}</small>
                    </div>

                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="card table-card table-nowrap">
                    <div class="card-header">
                        <h5 class="mb-0">Линкови</h5>
                    </div>
                    <table class="table">
                        <thead class="small bg-body text-uppercase text-muted">
                        <tr class="align-middle" style="height: 50px">
                            <th>Network</th>
                            <th>Линк</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="align-middle" style="height: 50px">
                            <td>Facebook</td>
                            <td>
                                <div class="fs-6 d-flex justify-content-between align-items-center link-primary"><a href="{{$company->facebook}}">{{$company->facebook}}</a></div>
                            </td>
                        </tr>
                        <tr class="align-middle" style="height: 50px">
                            <td>Instagram</td>
                            <td>
                                <div class="fs-6 d-flex justify-content-between align-items-center link-primary"><a href="{{$company->instagram}}">{{$company->instagram}}</a></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="card table-card table-wrap">
                    <div class="card table-card table-nowrap">
                        <div class="card-header">
                            <h5 class="mb-0">Линкови</h5>
                        </div>
                        <table class="table">
                            <tbody>
                            <tr class="align-middle" style="height: 50px">
                                <td>
                                    <div class="fs-6 d-flex justify-content-between align-items-center"><h6>Адреса</h6></div>
                                    <small class="text-muted">{{$company->address}}</small>
                                </td>
                            </tr>
                            <tr class="align-middle" style="height: 50px">
                                <td>
                                    <div class="fs-6 d-flex justify-content-between align-items-center"><h6>Телефон</h6></div>
                                    <small class="text-muted">{{$company->phone}}</small>
                                </td>
                            </tr>
                            <tr class="align-middle" style="height: 50px">
                                <td>
                                    <div class="fs-6 d-flex justify-content-between align-items-center"><h6>Email</h6></div>
                                    <small class="text-muted">{{$company->mail}}</small>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 mb-3 mb-lg-5">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h5 class="mb-0">Опис на компанијата</h5>
                    </div>
                    <div class="card-body" style="min-height: 5rem;">
                        {!! $company->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection


