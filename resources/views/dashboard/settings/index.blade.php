@extends('layouts.dashboard');
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-2">
                <a href="{{route('settings.edit', $settings->id)}}"
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
                        <img src="/assets/img/settings/medium/{{$settings->image}}" alt="slika"
                             class="img-responsive rounded-5 mb-3 mb-lg-0 shadow-lg" style="width: 400px">
                    </div>
                    <div class="card-header">
                        <h5>{{$settings->title}}</h5>
                        <small class="text-muted">{{$settings->mainurl}}</small>
                        <br>
                        <small class="text-muted">Последна промена: {{$settings->created_at->diffForHumans()}}</small>
                    </div>

                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7">
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
                            <td>Twitter</td>
                            <td>
                                <div class="fs-6 d-flex justify-content-between align-items-center link-primary"><a href="{{$settings->twitter}}">{{$settings->twitter}}</a></div>
                            </td>
                        </tr>
                        <tr class="align-middle" style="height: 50px">
                            <td>Facebook</td>
                            <td>
                                <div class="fs-6 d-flex justify-content-between align-items-center link-primary"><a href="{{$settings->facebook}}">{{$settings->facebook}}</a></div>
                            </td>
                        </tr>
                        <tr class="align-middle" style="height: 50px">
                            <td>Skype</td>
                            <td>
                                <div class="fs-6 d-flex justify-content-between align-items-center link-primary"><a href="{{$settings->skype}}">{{$settings->skype}}</a></div>
                            </td>
                        </tr>

                        <tr class="align-middle" style="height: 50px">
                            <td>LinkedIn</td>
                            <td>
                                <div class="fs-6 d-flex justify-content-between align-items-center link-primary"><a href="{{$settings->linkedin}}">{{$settings->linkedin}}</a></div>
                            </td>
                        </tr>
                        <tr class="align-middle" style="height: 50px">
                            <td>Youtube</td>
                            <td>
                                <div class="fs-6 d-flex justify-content-between align-items-center link-primary"><a href="{{$settings->youtube}}">{{$settings->youtube}}</a></div>
                            </td>
                        </tr>
                        <tr class="align-middle" style="height: 50px">
                            <td>Flickr</td>
                            <td>
                                <div class="fs-6 d-flex justify-content-between align-items-center link-primary"><a href="{{$settings->flickr}}">{{$settings->flickr}}</a></div>
                            </td>
                        </tr>
                        <tr class="align-middle" style="height: 50px">
                            <td>Pinterest</td>
                            <td>
                                <div class="fs-6 d-flex justify-content-between align-items-center link-primary"><a href="{{$settings->pinterest}}">{{$settings->pinterest}}</a></div>
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
                                    <small class="text-muted">{{$settings->address}}</small>
                                </td>
                            </tr>
                            <tr class="align-middle" style="height: 50px">
                                <td>
                                    <div class="fs-6 d-flex justify-content-between align-items-center"><h6>Телефон</h6></div>
                                    <small class="text-muted">{{$settings->phone}}</small>
                                </td>
                            </tr>
                            <tr class="align-middle" style="height: 50px">
                                <td>
                                    <div class="fs-6 d-flex justify-content-between align-items-center"><h6>Email</h6></div>
                                    <small class="text-muted">{{$settings->email}}</small>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection


