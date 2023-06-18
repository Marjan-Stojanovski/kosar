@extends('layouts.dashboard');
@section('content')
    <div class="card table-card table-nowrap mb-3 mb-lg-5">
        <div class="table-responsive table-card">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-2">
                        <p>Пораки</p>
                    </div>
                </div>
                <br>
                <!--Begin::table card-->
                <table class="table table-responsive align-middle table-hover mb-0">
                    <thead>
                    <tr>
                        <th class="text-center">Акција</th>
                        <th class="text-center">Име</th>
                        <th class="text-center">Е-Маил</th>
                        <th class="text-center">Телефон</th>
                        <th class="text-center">Наслов</th>
                        <th class="text-center">Порака</th>
                        <th class="text-center">Креирана</th>
                        <th class="text-center">Модифицирана</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($messages as $message)
                        <tr>
                            <td class="text-center">
                                <a style="width: 40px" data-tippy-content="Одговори/Избриши ја пораката"
                                   href="{{ route('message.show', $message->id) }}"><i class="fs-2 text-primary d-block mb-2 bi bi-chevron-compact-right"></i></a>
                            </td>
                            <td class="text-center">
                                <span class="text">{{ $message->fullName }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text">{{ $message->email }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text">{{ $message->phone }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text">{{ $message->subject }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text">{{ $message->message }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text">{{ $message->created_at->diffForHumans() }}</span>
                            </td>
                            <td class="text-center">
                                <span class="text">{{ $message->updated_at->diffForHumans() }}</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
