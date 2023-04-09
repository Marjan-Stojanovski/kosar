@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form method="post" action="{{route('comments.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12">
                        <!--Card-->
                        <div class="card mb-3 mb-lg-5">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12">
                                        <h3>Креирај коментар</h3>
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
                                                   id="subject" name="subject">
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
                                                id="message" name="message"></textarea>
                                            @error('message')
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
                                    <a href="{{route('comments.index')}}" class="btn btn-secondary"
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




