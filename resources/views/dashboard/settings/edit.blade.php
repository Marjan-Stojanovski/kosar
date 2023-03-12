@extends('layouts.dashboard');
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form method="post" action="{{route('settings.update', $settings->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-lg-12">
                        <!--Card-->
                        <div class="card mb-3 mb-lg-5">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12">
                                        <h3>Подесувања</h3>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3 d-inline-block">
                                        <!-- First name -->
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label" for="title">Име на компанијата</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Внесете име на компанијата"
                                                   class="form-control @error('title') is-invalid @enderror"
                                                   id="title" name="title" value="{{$settings->title}}">
                                            @error('title')
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
                                            <label class="form-label" for="mainurl">Линк</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Линк до веб страна"
                                                   class="form-control @error('mainurl') is-invalid @enderror"
                                                   id="mainurl" name="mainurl" value="{{$settings->mainurl}}">
                                            @error('mainurl')
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
                                            <label class="form-label" for="email">Email</label>
                                            <!-- Input -->
                                            <input type="email" placeholder="Внеси Email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   id="email" name="email" value="{{$settings->email}}">
                                            @error('email')
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
                                            <label class="form-label" for="address">Адреса</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Внеси адреса"
                                                   class="form-control @error('address') is-invalid @enderror"
                                                   id="address" name="address" value="{{$settings->address}}">
                                            @error('address')
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
                                            <label class="form-label" for="phone">Телефон</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Внеси телефон"
                                                   class="form-control @error('phone') is-invalid @enderror"
                                                   id="phone" name="phone" value="{{$settings->phone}}">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="col-md-12">
                                            <br>
                                            <label for="image" data-tippy-placement="bottom"
                                                   data-tippy-content="Изберете Лого" class="btn btn-primary me-3">
                                                <span class="material-symbols-rounded align-middle me-2">
                                                    image
                                                    </span>
                                                Изберете Лого
                                            </label>
                                            <input type="file"
                                                   class="form-control d-none w-0 h-0 position-absolute @error('image') is-invalid @enderror"
                                                   id="image" name="image">
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
                                            <label class="form-label" for="description">Опис</label>
                                            <!-- Input -->
                                            <textarea
                                                class="form-control quill-editor @error('description') is-invalid @enderror"
                                                id="description" name="description">{{$settings->description}}</textarea>
                                            @error('description')
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
                                            <label class="form-label" for="link">Линк</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Внеси Линк"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   id="link" name="link" value="{{$settings->link}}">
                                            @error('link')
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
                                            <label class="form-label" for="facebook">Facebook</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Линк до профилот"
                                                   class="form-control @error('facebook') is-invalid @enderror"
                                                   id="facebook" name="facebook" value="{{$settings->facebook}}">
                                            @error('facebook')
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
                                            <label class="form-label" for="twitter">Twitter</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Линк до профилот"
                                                   class="form-control @error('twitter') is-invalid @enderror"
                                                   id="twitter" name="twitter" value="{{$settings->twitter}}">
                                            @error('twitter')
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
                                            <label class="form-label" for="skype">Skype</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Линк до профилот"
                                                   class="form-control @error('skype') is-invalid @enderror"
                                                   id="skype" name="skype" value="{{$settings->skype}}">
                                            @error('skype')
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
                                            <label class="form-label" for="linkedin">LinkedIn</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Линк до профилот"
                                                   class="form-control @error('linkedin') is-invalid @enderror"
                                                   id="linkedin" name="linkedin" value="{{$settings->linkedin}}">
                                            @error('linkedin')
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
                                            <label class="form-label" for="youtube">Youtube</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Линк до профилот"
                                                   class="form-control @error('youtube') is-invalid @enderror"
                                                   id="youtube" name="youtube" value="{{$settings->youtube}}">
                                            @error('youtube')
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
                                            <label class="form-label" for="flickr">Flickr</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Линк до профилот"
                                                   class="form-control @error('flickr') is-invalid @enderror"
                                                   id="flickr" name="flickr" value="{{$settings->flickr}}">
                                            @error('flickr')
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
                                            <label class="form-label" for="pinterest">Pinterest</label>
                                            <!-- Input -->
                                            <input type="text" placeholder="Линк до профилот"
                                                   class="form-control @error('pinterest') is-invalid @enderror"
                                                   id="pinterest" name="pinterest" value="{{$settings->pinterest}}">
                                            @error('pinterest')
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
                                            <label for="user_id" class="form-label">Улога</label>
                                            <!--select-->
                                            <select name="user_id" id="user_id"
                                                    class="form-control @error('user_id') is-invalid @enderror">
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                                @error('user_id')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="text-end">
                                                <button type="submit" id="profile_save" class="btn btn-primary"
                                                        data-tippy-content="Сочувај">
                                        <span class="material-symbols-rounded align-middle me-2">
                                                    save
                                                    </span>Сочувај
                                                </button>
                                                <a href="{{route('settings.index')}}" class="btn btn-secondary"
                                                   data-tippy-content="Назад кон продукти">
                                                <span class="material-symbols-rounded align-middle me-2">
                                                    arrow_back_ios
                                                    </span> Назад</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection




