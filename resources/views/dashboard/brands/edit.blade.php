@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form method="post" action="{{route('brands.update', $brands->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-lg-12">
                        <!--Card-->
                        <div class="card mb-3 mb-lg-5">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12">
                                        <h3>Измени бренд</h3>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3 d-inline-block">
                                        <!-- First name -->
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label" for="name">Име</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Име на брендот"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   id="name" name="name" value="{{$brands->name}}">
                                            @error('name')
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
                                            <label class="form-label" for="weblink">Линк</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Линк"
                                                   class="form-control @error('weblink') is-invalid @enderror"
                                                   id="weblink" name="weblink" value="{{$brands->weblink}}">
                                            @error('weblink')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
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
                                    <div class="col-12 col-md-6 mb-3 d-inline-block">
                                        <!-- First name -->
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label" for="region">Регион</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Регион"
                                                   class="form-control @error('region') is-invalid @enderror"
                                                   id="region" name="region" value="{{$brands->region}}">
                                            @error('region')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
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
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-md-6 mb-3">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label" for="description">Опис на брендот</label>
                                            <!-- Input -->
                                            <textarea
                                                class="form-control quill-editor @error('description') is-invalid @enderror"
                                                id="description" name="description">{{$brands->description}}</textarea>
                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" id="profile_save" class="btn btn-primary" data-tippy-content="Сочувај">
                                        <span class="material-symbols-rounded align-middle me-2">
                                                    save
                                                    </span>Сочувај
                                    </button>
                                    <a href="{{route('brands.index')}}" class="btn btn-secondary"
                                       data-tippy-content="Назад кон брендови">
                                                <span class="material-symbols-rounded align-middle me-2">
                                                    arrow_back_ios
                                                    </span> Назад</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection




