@extends('layouts.dashboard');
@section('content')

<div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <div class="table-responsive">
                      <div class="card-body">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-2">
                                        <a href="{{route('users.create')}}"
                                           class="nav-link d-flex align-items-center text-truncate btn btn-primary" style="color: white; width: 200px">
                                            <span class="sidebar-icon">
                                                <span class="material-symbols-rounded">
                                                 person_add
                                                </span>
                                            </span>
                                            <span class="sidebar-text">Креирај корисник</span>
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
                                                <th class="text-center">Име</th>
                                                <th class="text-center">Улога</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0">{{$user->name}}</h6>
                                                                <small class="text-muted">{{$user->email}}</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="fs-6">{{$user->role->name}}</span>
                                                    </td>

                                                    <td class="">
                                                        <div class="d-flex justify-content-end align-items-center">
                                                            <a href="{{route('users.show', $user->id)}}"
                                                               data-tippy-content="View user">
                                                                <span
                                                                    class="material-symbols-rounded align-middle fs-5 text-body">visibility</span>
                                                            </a>
                                                            <!--Divider line-->
                                                            <span class="border-start mx-2 d-block height-20"></span>
                                                            <a href="{{route('users.edit', $user->id)}}"
                                                               data-tippy-content="Edit user">
                                                                <span
                                                                    class="material-symbols-rounded align-middle fs-5 text-body">edit</span>
                                                            </a>
                                                            <!--Divider line-->
                                                            <span class="border-start mx-2 d-block height-20"></span>


                                                            <form style="padding-top: 18px" method="post"
                                                                  action="{{ route('users.destroy', $user->id) }}">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button
                                                                    style="outline: none; border: none; background-color: white"
                                                                    type="submit" data-tippy-content="Delete user">
                                                                    <span
                                                                        class="material-symbols-rounded align-middle fs-5 text-body">delete</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
