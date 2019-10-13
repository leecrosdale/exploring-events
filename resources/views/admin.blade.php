@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif



                        <table class="table table-striped">
                            <tr>
                                <th>Order Id</th>
                                <th>Food</th>
                                <th>Status</th>
                                <th>Set Status</th>
                            </tr>

                        @foreach ($orders as $order)

                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->food->name }}</td>
                                <td>{{ $order->status }}</td>
                                <td>
                                    <select>
                                        <option>Out for delivery</option>
                                    </select>
                                </td>
                            </tr>

                        @endforeach

                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
