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
                                    <h3>Измени категорија</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-end">
                                    <form action="{{ route('categories.destroy', $category->id )}}" method="post">
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
                                <img class="img-responsive" class="img-responsive" src="/assets/img/categories/thumbnails/{{ $category->image }}" alt="image-"/>
                            </div>
                        </div>
                        <br>
                        <form class="row g-3" method="post" action="{{ route('categories.update', $category->id) }}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="col-md-12">
                                <label for="image" data-tippy-placement="bottom"
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
                            <div class="col-md-12">
                                <label for="name" class="form-label">Наслов на категорија</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                       id="name" name="name" value="{{ $category->name }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="desc" class="form-label">Опис</label>
                                <textarea name="desc" id="desc" placeholder="Внеси опис на категоријата"
                                          class="form-control quill-editor">{{ $category->desc }}</textarea>
                                @error('desc')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="parent_id" class="form-label">Под категорија</label>
                                <select id="parent_id" class="form-select" name="parent_id">
                                    <option value="">Главна Категорија</option>
                                    {!! $categories !!}
                                </select>
                            </div>
                            <div class="text-end">
                                <div class="col-12 col-md-12 mb-4">
                                    <button class="btn btn-primary mb-2 me-2" data-tippy-content="Сочувај">
                                                <span class="material-symbols-rounded align-middle me-2">
                                                    save
                                                    </span> Сочувај
                                    </button>
                                    <a href="{{route('categories.index')}}" class="btn btn-secondary mb-2 me-2"
                                       data-tippy-content="Назад кон категории">
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
            @section('scripts')
                <script>
                    $('#parent_id option[value="{{ $category->parent_id }}"]').prop('selected', true);
                </script>
@endsection
