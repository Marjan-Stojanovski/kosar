@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 mb-lg-5">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-start">
                                    <h3>Измени продукт</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-end">
                                    <form action="{{ route('products.destroy', $product->id )}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger mb-2 me-2" data-tippy-content="Избриши">
                                            <span class="material-symbols-rounded align-middle me-2">
                                                delete
                                            </span> Избриши
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @if(Session::has('flash_message'))
                            <p class="alert alert-info">{{ Session::get('flash_message') }}</p>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img-responsive" class="img-responsive" src="/assets/img/products/thumbnails/{{ $product->image }}" alt="image-"/>
                            </div>
                        </div>
                        <form class="row g-3" method="post" action="{{ route('products.update', $product->id) }}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 d-inline-block">
                                    <!-- First name -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="form-label" for="title">Име</label>
                                        <!-- Input -->
                                        <input type="text" placeholder="Име на производот"
                                               class="form-control @error('title') is-invalid @enderror"
                                               id="title" name="title" value="{{$product->title}}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3 d-inline-block">
                                    <div class="form-group">
                                        <!-- Label -->
                                        <div class="col-md-12">
                                            <label for="category_id" class="form-label">Под категорија</label>
                                            <select id="category_id" class="form-select" name="category_id">
                                                <option value="{{$product->category->id}}">{{$product->category->name}}</option>
                                                {!! $categories !!}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="col-md-12">
                                        <br>
                                        <label for="inputImage" data-tippy-placement="bottom"
                                               data-tippy-content="Изберете слика" class="btn btn-primary me-3">
                                                <span class="material-symbols-rounded align-middle me-2">
                                                    image
                                                    </span>
                                            Изберете слика
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
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label for="user_id" class="form-label">Улога</label>
                                        <!--select-->
                                        <select name="user_id" id="user_id"
                                                class="form-control @error('user_id') is-invalid @enderror">
                                            @foreach($users as $user)
                                                <option value="{{ $product->user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                            @error('user_id')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-md-6 mb-3">
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="form-label" for="description">Опис на производот</label>
                                        <!-- Input -->
                                        <textarea
                                            class="form-control quill-editor @error('description') is-invalid @enderror"
                                            id="description" name="description">{{$product->description}}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-3 mb-3">
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label for="brand_id" class="form-label">Бренд</label>
                                        <!--select-->
                                        <select name="brand_id" id="brand_id"
                                                class="form-control @error('brand_id') is-invalid @enderror">
                                            @foreach($brands as $brand)
                                                <option value="{{ $product->brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                            @error('brand_id')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-3">
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label for="country_id" class="form-label">Држава</label>
                                        <!--select-->
                                        <select name="country_id" id="country_id"
                                                class="form-control @error('country_id') is-invalid @enderror">
                                            @foreach($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                            @error('country_id')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label for="volume_id" class="form-label">Волумен</label>
                                        <!--select-->
                                        <select name="volume_id" id="volume_id"
                                                class="form-control @error('volume_id') is-invalid @enderror">
                                            @foreach($volumes as $volume)
                                                <option value="{{ $product->volume->id }}">{{ $volume->volume }}</option>
                                            @endforeach
                                            @error('volume_id')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 d-inline-block">
                                    <!-- First name -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="form-label" for="alcohol">Алкохол %</label>
                                        <!-- Input -->
                                        <input type="text" placeholder="Процент на алкохол"
                                               class="form-control @error('alcohol') is-invalid @enderror"
                                               id="alcohol" name="alcohol" value="{{$product->alcohol}}">
                                        @error('alcohol')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3 d-inline-block">
                                    <!-- First name -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="form-label" for="price">Цена</label>
                                        <!-- Input -->
                                        <input type="text" placeholder="Цена"
                                               class="form-control @error('price') is-invalid @enderror"
                                               id="price" name="price" value="{{$product->price}}">
                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 d-inline-block">
                                    <!-- First name -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="form-label" for="action">Акциска Цена/Цена со попуст</label>
                                        <!-- Input -->
                                        <input type="text" placeholder="0.00"
                                               class="form-control @error('action') is-invalid @enderror"
                                               id="action" name="action" value="{{$product->action}}">
                                        @error('action')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3 d-inline-block">
                                    <!-- First name -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="form-label" for="discount">Попуст во %</label>
                                        <!-- Input -->
                                        <input type="text" placeholder="0.00"
                                               class="form-control @error('discount') is-invalid @enderror"
                                               id="discount" name="discount" value="{{$product->discount}}">
                                        @error('discount')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <div class="col-12 col-md-12 mb-4">
                                    <button class="btn btn-primary mb-2 me-2" data-tippy-content="Сочувај">
                                                <span class="material-symbols-rounded align-middle me-2">
                                                    save
                                                    </span> Сочувај
                                    </button>
                                    <a href="{{route('products.index')}}" class="btn btn-secondary mb-2 me-2"
                                       data-tippy-content="Назад кон продукти">
                                                <span class="material-symbols-rounded align-middle me-2">
                                                    arrow_back_ios
                                                    </span> Назад</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endsection

