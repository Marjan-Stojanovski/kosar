@extends('layouts.dashboard');
@section('content')

    <div class="card table-card table-nowrap mb-3 mb-lg-5">
        <div class="table-responsive table-card">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12">
                        <br>
                        <ul class="nav nav-pills nav-stacked list-style-icons">
                            <li><a class="btn btn-primary mb-2 me-2" data-tippy-content="Број на нарачки">
                                    Број на нарачки <h2>{{$ordersCount}}</h2>
                                </a></li>
                            <li><a class="btn btn-success mb-2 me-2" data-tippy-content="Број на нарачки">
                                    Испорачани нарачки <h2>{{$shipped}}</h2>
                                </a></li>
                            <li><a class="btn btn-warning mb-2 me-2" data-tippy-content="Број на нарачки">
                                    Неиспорачани нарачки <h2>{{$inProgress}}</h2>
                                </a></li>
                            <li><a class="btn btn-success mb-2 me-2" data-tippy-content="Број на нарачки">
                                    Откажани нарачки <h2>{{$cancelled}}</h2>
                                </a></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>

                <br>
                <!--Begin::table card-->
                <div class="row">
                    <div class="col-12 mb-3 mb-lg-5">
                        <div class="overflow-hidden card table-nowrap table-card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Orders</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="small text-uppercase bg-body text-muted">
                                    <tr class="align-middle">
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Country</th>
                                        <th class="text-center">Payment method</th>
                                        <th class="text-center">Payed/Not Payed</th>
                                        <th class="text-center">Order Cost</th>
                                        <th class="text-center">Order Status</th>
                                        <th class="text-center">Created Date</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr class="align-middle">
                                            <td class="text-center">
                                                {{ $order->firstName }} {{ $order->lastName }}
                                            </td>
                                            <td class="text-center">{{$order->email}}</td>
                                            <td class="text-center">{{ $order->country->name }}</td>
                                            <td class="text-center"><span>{{ $order->payment_info }}</span></td>
                                            @if($order->payment_status == 0)
                                                <td class="text-center"><span> Not Payed </span></td>
                                            @else
                                                <td class="text-center"><span> Payed </span></td>
                                            @endif
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
                                                <div class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="#" class="btn p-1">
                                  <span class="material-symbols-rounded align-middle">
                                    more_vert
                                  </span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="{{ route('orders.get', $order->id) }}"
                                                           class="dropdown-item">Погледни Нарачка</a>
                                                        <form action="{{ route('orders.update', $order->id )}}"
                                                              method="post" style="margin-bottom: unset;">
                                                            @csrf
                                                            @method('put')
                                                            <input type="text" value="cancelled" class="form-control"
                                                                   hidden
                                                                   id="status" name="status">
                                                            <button type="submit" class="dropdown-item">Откажи нарачка
                                                            </button>
                                                        </form>
                                                        <form action="{{ route('orders.delete', $order->id )}}"
                                                              method="post" style="margin-bottom: unset;">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="dropdown-item">Избриши нарачка
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="d-flex justify-content-center">
                    <ul>
                        {{ $orders->links() }}
                    </ul>
                </nav>

            </div>
        </div>
    </div>

@endsection
