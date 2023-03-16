@extends('layouts.dashboard');
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <div class="table-responsive">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-2">
                                <a href="{{route('brands.create')}}"
                                   class="nav-link d-flex align-items-center text-truncate btn btn-primary"
                                   style="color: white; width: 180px">
                                            <span class="sidebar-icon">
                                                <span class="material-symbols-rounded">
                                                 add
                                                </span>
                                            </span>
                                    <span class="sidebar-text">Креирај бренд</span>
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
                                        <th class="text-center">Земја</th>
                                        <th class="text-center">Регион</th>
                                        <th class="text-center">Линк</th>
                                        <th class="text-end">Акција</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($brands as $brand)
                                        <tr>
                                            <td>{{$brand->id}}</td>
                                            <td class="text-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <img src="/assets/img/brands/medium/{{ $brand->image }}"
                                                             class="mb-0 img-responsive" style="width: 50px">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">{{$brand->name}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">{{strip_tags($brand->description)}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">{{$brand->country->name}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">{{$brand->region}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">{{$brand->weblink}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <a href="{{route('brands.show', $brand->id)}}"
                                                       data-tippy-content="Прикажи бренд">
                                                                <span
                                                                    class="material-symbols-rounded align-middle fs-5 text-body">visibility</span>
                                                    </a>
                                                    <!--Divider line-->
                                                    <span class="border-start mx-2 d-block height-20"></span>
                                                    <a href="{{route('brands.edit', $brand->id)}}"
                                                       data-tippy-content="Измени бренд">
                                                                <span
                                                                    class="material-symbols-rounded align-middle fs-5 text-body">edit</span>
                                                    </a>
                                                    <!--Divider line-->
                                                    <span class="border-start mx-2 d-block height-20"></span>


                                                    <form style="padding-top: 18px" method="post"
                                                          action="{{ route('brands.destroy', $brand->id) }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button
                                                            style="outline: none; border: none; background-color: white"
                                                            type="submit" data-tippy-content="Избриши бренд">
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

@endsection
