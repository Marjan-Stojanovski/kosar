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
                                    <h3>Измени коментар</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-end">
                                    <form action="{{ route('comments.destroy', $comment->id )}}" method="post">
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
                        <form class="row g-3" method="post" action="{{ route('comments.update', $comment->id) }}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3 d-inline-block">
                                    <!-- First name -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="form-label" for="name">Име</label>
                                        <!-- Input -->
                                        <input type="text" placeholder="Внесете Име"
                                               class="form-control @error('name') is-invalid @enderror"
                                               id="name" name="name" value="{{$comment->name}}">
                                        @error('name')
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
                                        <label class="form-label" for="subject">Наслов</label>
                                        <!-- Input -->
                                        <input type="text" placeholder="Внесете Наслов"
                                               class="form-control @error('subject') is-invalid @enderror"
                                               id="subject" name="subject" value="{{$comment->subject}}">
                                        @error('subject')
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
                                        <label class="form-label" for="rating">Rating</label>
                                        <select class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating">
                                            <option value="5">5</option>
                                            <option value="4">4</option>
                                            <option value="3">3</option>
                                            <option value="2">2</option>
                                            <option value="1">1</option>
                                        </select>
                                        @error('rating')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label for="product_id" class="form-label">Продукт</label>
                                        <!--select-->
                                        <select name="product_id" id="product_id"
                                                class="form-control @error('product_id') is-invalid @enderror">
                                            @foreach($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->title }}, {{$product->brand->name}}</option>
                                            @endforeach
                                            @error('product_id')
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
                                        <label class="form-label" for="message">Коментар</label>
                                        <!-- Input -->
                                        <textarea
                                            class="form-control @error('message') is-invalid @enderror"
                                            id="message" name="message">{{$comment->message}}</textarea>
                                        @error('message')
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
                                    <a href="{{route('comments.index')}}" class="btn btn-secondary mb-2 me-2"
                                       data-tippy-content="Назад кон кометари">
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

