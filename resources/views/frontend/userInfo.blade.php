@extends('welcome')
@section('content')

    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}">Home</a></li>
                <li class="active">Account Details</li>
            </ol>
        </div>
    </div>
    <section class="main-container">
        <div class="container">
            <div class="row">
                <div class="main col-md-12">
                    <h1 class="page-title">User Profile</h1>
                    <div class="separator-2"></div>
                    <ul class="nav nav-tabs style-1" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab"><i class="fa fa-user pr-10"></i>User
                                Info</a>
                        </li>
                        <li><a href="#tab2" role="tab" data-toggle="tab"><i class="fa fa-map-marker pr-10"></i>Shipping
                                Details</a></li>
                        <li><a href="#tab3" role="tab" data-toggle="tab"><i
                                    class="fa fa-comments pr-10"></i>Messages</a></li>
                        <li><a href="#tab4" role="tab" data-toggle="tab"><i class="fa fa-database pr-10"></i>Orders</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1">
                            <div class="panel-group collapse-style-1" id="accordion-faq">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="text-center">Full Name</th>
                                            <th class="text-center">Username/Email</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">{{$loggedUser->firstName}} {{$loggedUser->lastName}}</td>
                                            <td class="text-center">{{$loggedUser->email}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2">
                            <div class="panel-group collapse-style-1" id="accordion-faq-2">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th class="text-center" colspan="2">Details</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if (!empty($details->company)) {
                                            ?>
                                        <tr>
                                            <td class="text-start"><strong>Company Name</strong></td>
                                            <td class="text-start">{{$details->company}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Company Tax Number</strong></td>
                                            <td class="text-start">{{$details->taxNumber}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>First Name</strong></td>
                                            <td class="text-start">{{$details->firstName}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Last Name</strong></td>
                                            <td class="text-start">{{$details->lastName}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Phone Number</strong></td>
                                            <td class="text-start">{{$details->phoneNumber}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Email</strong></td>
                                            <td class="text-start">{{$details->email}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Address</strong></td>
                                            <td class="text-start">{{$details->address}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>City</strong></td>
                                            <td class="text-start">{{$details->city}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>ZIP</strong></td>
                                            <td class="text-start">{{$details->zipcode}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Country</strong></td>
                                            <td class="text-start">{{$details->country->name}}</td>
                                        </tr>
                                            <?php
                                        } else {
                                            ?>
                                        <tr>
                                            <td class="text-start"><strong>First Name</strong></td>
                                            <td class="text-start">{{$details->firstName}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Last Name</strong></td>
                                            <td class="text-start">{{$details->lastName}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Phone Number</strong></td>
                                            <td class="text-start">{{$details->phoneNumber}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Email</strong></td>
                                            <td class="text-start">{{$details->email}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Address</strong></td>
                                            <td class="text-start">{{$details->address}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>City</strong></td>
                                            <td class="text-start">{{$details->city}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>ZIP</strong></td>
                                            <td class="text-start">{{$details->zipcode}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start"><strong>Country</strong></td>
                                            <td class="text-start">{{$details->country->name}}</td>
                                        </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a class="btn btn-warning" href="{{route('frontend.showDetails', $details->id)}}">Change
                                        your
                                        info</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3">
                            <div class="panel-group collapse-style-1" id="accordion-faq-2">
                                <div class="table-responsive">
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
                                        @if(isset($messages))
                                            @foreach($messages as $message)
                                                <tr>
                                                    <td class="text-center">
                                                        <a style="width: 40px"
                                                           data-tippy-content="Види ја пораката"
                                                           href="{{ route('frontend.userMessage', $message->id) }}"><i
                                                                class="fs-2 text-primary d-block mb-2 bi bi-chevron-compact-right"></i></a>
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
                                                    <span
                                                        class="text">{{ $message->created_at->diffForHumans() }}</span>
                                                    </td>
                                                    <td class="text-center">
                                                    <span
                                                        class="text">{{ $message->updated_at->diffForHumans() }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab4">
                            <div class="panel-group collapse-style-1" id="accordion-faq-2">
                                <div class="table-responsive">
                                    <table class="table table-responsive align-middle table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th class="text-center">Број на нарачка</th>
                                            <th class="text-center">Сума</th>
                                            <th class="text-center">Креирана</th>
                                            <th class="text-center">Статус</th>
                                            <th class="text-center">Види</th>
                                            <th class="text-center">Избриши</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($orders))
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td class="text-center">
                                                        <span class="text">{{ $order->id }}</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="text">{{ number_format($order->total, 2) }}</span>
                                                    </td>
                                                    <td class="text-center">
                                                    <span
                                                        class="text">{{ $order->created_at->diffForHumans() }}</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="text">{{ $order->order_status }}</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-primary btn-sm" style="margin-top: 0px"
                                                           href="{{ route('user.viewOrder', $order->id) }}"><i
                                                                class="fa fa-search-plus pr-10"></i>Види</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <div>
                                                            <form style="margin: 0px" method="post"
                                                                  action="{{ route('order.delete', $order->id) }}">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button class="btn btn-danger btn-sm"
                                                                        style="margin: 0px"
                                                                        type="submit" data-tippy-content="Delete user">
                                                                    <i class="fa fa-remove pr-10"></i>Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                                @if(!empty($orders))
                                    <div class="col-md-12 text-center">
                                        {{ $orders->links() }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
