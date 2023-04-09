@extends('layouts.dashboard');
@section('content')

    <div class="card table-card table-nowrap mb-3 mb-lg-5">
        <div class="table-responsive table-card">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-2">
                        <a href="{{route('comments.create')}}"
                           class="nav-link d-flex align-items-center text-truncate btn btn-primary"
                           style="color: white; width: 200px">
                                            <span class="sidebar-icon">
                                                <span class="material-symbols-rounded">
                                                 add
                                                </span>
                                            </span>
                            <span class="sidebar-text" data-tippy-content="Додади нов продукт">Креирај коментар</span>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-end">
                            <br>
                            <button class="btn btn-success mb-2 me-2" data-tippy-content="Број на коментари">
                                Број на Коментари <h2>{{$commentsCount}}</h2>
                            </button>

                        </div>
                    </div>
                </div>

                <br>
                <!--Begin::table card-->

                <table class="table table-responsive align-middle table-hover mb-0">
                    <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Име</th>
                        <th class="text-center">Наслов</th>
                        <th class="text-center">Оцена</th>
                        <th class="text-center">Пијалок</th>
                        <th class="text-center">Коментар</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td class="text-center"><a class="btn btn-info" style="width: 40px" data-tippy-content="Прикажи/Измени коментар"
                                   href="{{route('comments.edit', $comment->id)}}">{{$comment->id}}</a></td>
                            @csrf
                            <td class="text-center">
                                <span class="text">{{$comment->name}}</span>
                            </td>
                            <td class="text-center">
                                <span class="text">{{ $comment->subject }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text">{{ $comment->rating }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text">{{ $comment->product_id }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text">{{ $comment->message }}</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
