@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form method="post" action="{{route('employees.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12">
                        <!--Card-->
                        <div class="card mb-3 mb-lg-5">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12">
                                        <h3>Креирај Вработен</h3>
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
                                            <input type="text" placeholder="Внесете Име"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   id="name" name="name">
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
                                            <label class="form-label" for="position">Позиција</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Внесете Работна Позиција"
                                                   class="form-control @error('position') is-invalid @enderror"
                                                   id="position" name="position">
                                            @error('position')
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
                                            <label class="form-label" for="description">Опис</label>
                                            <!-- Input -->
                                            <textarea
                                                class="form-control quill-editor @error('description') is-invalid @enderror"
                                                placeholder="Внесете Опис за вработениот"
                                                id="description" name="description"></textarea>
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
                                    <a href="{{route('employees.index')}}" class="btn btn-secondary"
                                       data-tippy-content="Назад кон коментари">
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




