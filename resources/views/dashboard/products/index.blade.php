@extends('layouts.dashboard');
@section('content')

    <div class="card table-card table-nowrap mb-3 mb-lg-5">
        <div class="table-responsive table-card">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-2">
                        <a href="{{route('products.create')}}"
                           class="nav-link d-flex align-items-center text-truncate btn btn-primary"
                           style="color: white; width: 200px">
                                            <span class="sidebar-icon">
                                                <span class="material-symbols-rounded">
                                                 add
                                                </span>
                                            </span>
                            <span class="sidebar-text" data-tippy-content="Додади нов продукт">Креирај производ</span>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-end">
                            <br>
                            <button class="btn btn-success mb-2 me-2" data-tippy-content="Број на продукти">
                                Број на продукти <h2>{{$productsCount}}</h2>
                            </button>

                        </div>
                    </div>
                </div>

                <br>
                <!--Begin::table card-->

                <table class="table table-responsive align-middle table-hover mb-0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th class="text-center">Слика</th>
                        <th class="text-center">Наслов</th>
                        <th class="text-center">Опис</th>
                        <th class="text-center">Категорија</th>
                        <th class="text-center">Слајдер</th>
                        <th class="text-center">Фајл</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td><a class="btn btn-info" style="width: 40px" data-tippy-content="Прикажи/Измени продукт"
                                   href="{{route('products.edit', $product->id)}}">{{$product->id}}</a></td>
                            @csrf
                            <td class="text-center">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <img src="/assets/img/products/thumbnails/{{ $product->image }}"
                                             class="mb-0 img-responsive" style="width: 50px">
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="text">{{$product->title}}</span>
                            </td>

                            <td class="text-center">
                                <span class="text">{{ $product->slug }}</span>
                            </td>
                            <td class="text-center">
                                <h6>{{$product->category->name}}</h6>
                            </td>
                            <td class="text-center">
                                <div class="align-middle">
                                    <label for="inputImage"
                                           data-tippy-content="Изберете слика" class="btn btn-sm btn-outline-dark">
                                                <span class="material-symbols-rounded align-middle" style="width: 20px">
                                                    add
                                                    </span>
                                        <span style="font-size: x-small">Изберете слика</span>
                                    </label>
                                    <input type="file"
                                           class="form-control d-none w-0 h-0 position-absolute @error('image') is-invalid @enderror"
                                           id="inputImage" name="image">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="align-middle">
                                    <label for="inputImage"
                                           data-tippy-content="Изберете слика" class="btn btn-sm btn-outline-dark">
                                                <span class="material-symbols-rounded align-middle" style="width: 20px">
                                                    add
                                                    </span>
                                        <span style="font-size: x-small">Изберете слика</span>
                                    </label>
                                    <input type="file"
                                           class="form-control d-none w-0 h-0 @error('image') is-invalid @enderror"
                                           id="inputImage" name="image">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
