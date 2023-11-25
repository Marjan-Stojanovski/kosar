@extends('layouts.dashboard');
@section('content')

    <div class="card table-card table-nowrap mb-3 mb-lg-5">
        <div class="table-responsive table-card">
            <div class="container-fluid">
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-start">
                            <h3>Choose your actions</h3>
                        </div>
                    </div>
                    <div class="col-md-9 text-end">
                        <form action="{{ route('orders.update', $order->id )}}" method="post">
                            @csrf
                            @method('put')
                            <input type="text" value="shipped" class="form-control" hidden
                                   id="status" name="status">
                            <button type="submit" class="btn btn-success">Change to shipped
                            </button>
                        </form>
                        <form action="{{ route('orders.update', $order->id )}}" method="post">
                            @csrf
                            @method('put')
                            <input type="text" value="cancelled" class="form-control" hidden
                                   id="status" name="status">
                            <button type="submit" class="btn btn-danger">Change to cancelled
                            </button>
                        </form>
                    </div>
                </div>
                <br>
                <!--Begin::table card-->
                <div class="row">
                    <div class="col-12 mb-3 mb-lg-5">
                        <div class="overflow-hidden card table-nowrap table-card">
                            <div class="card-header d-flex justify-content-between align-items-center text-center">
                                <h5 class="mb-0">Order #{{ $order->id }}</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="small text-uppercase bg-body text-muted">
                                    <tr class="align-middle">
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Country</th>
                                        <th class="text-center">Payment method</th>
                                        <th class="text-center">Order Cost</th>
                                        <th class="text-center">Order Status</th>
                                        <th class="text-center">Created Date</th>
                                        <th class="text-end">Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            {{ $order->firstName }} {{ $order->lastName }}
                                        </td>
                                        <td class="text-center">{{$order->email}}</td>
                                        <td class="text-center">{{$order->address}}, {{$order->city}}</td>
                                        <td class="text-center">{{ $order->country->name }}</td>
                                        <td class="text-center"><span>****6231</span></td>
                                        <td class="text-center"><span>{{ number_format($order->total, 2) }} €</span>
                                        </td>
                                        <td class="text-center" style="background-color:
                                        <?php if($order->order_status == 'in-progress')
                                                    echo 'orange';
                                        else if ($order->order_status == 'shipped')
                                                    echo 'green';
                                        else
                                                    echo 'yellow';
                                        ?>
                                        ">{{$order->order_status}}</td>
                                        <td class="text-center">{{ $order->created_at->diffForHumans() }}</td>
                                        <td class="text-end">
                                            <a href="" class="btn btn-info">Poglej</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                <div class="text-end">
                    <div class="col-12 col-md-12 mb-4">
                        <a href="{{route('orders.list')}}" class="btn btn-secondary mb-2 me-2"
                           data-tippy-content="Назад кон нарачки">
                                                <span class="material-symbols-rounded align-middle me-2">
                                                    arrow_back_ios
                                                    </span> Back</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection
