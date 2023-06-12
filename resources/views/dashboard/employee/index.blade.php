@extends('layouts.dashboard');
@section('content')
    <div class="card table-card table-nowrap mb-3 mb-lg-5">
        <div class="table-responsive table-card">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <div class="col-2">
                        <br>
                        <a href="{{route('employees.create')}}"
                           class="nav-link d-flex align-items-center text-truncate btn btn-primary"
                           style="color: white; width: 200px">
                                            <span class="sidebar-icon">
                                                <span class="material-symbols-rounded">
                                                 add
                                                </span>
                                            </span>
                            <span class="sidebar-text" data-tippy-content="Додади нов продукт">Креирај вработен</span>
                        </a>
                    </div>
                </div>

                <br>
                <!--Begin::table card-->

                <table class="table table-responsive align-middle table-hover mb-0">
                    <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Име</th>
                        <th class="text-center">Позиција</th>
                        <th class="text-center">Опис</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td class="text-center"><a class="btn btn-info" style="width: 40px" data-tippy-content="Прикажи/Измени коментар"
                                   href="{{ route('employees.edit', $employee->id) }}">{{ $employee->id }}</a></td>
                            @csrf
                            <td class="text-center">
                                <span class="text">{{ $employee->name }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text">{{ $employee->position }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text">{!! $employee->description !!}</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
