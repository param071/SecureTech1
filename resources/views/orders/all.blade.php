@extends('layouts.app')
@section('title', 'Orders')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if($orders->count() > 0)
                <table class="table table-striped w-100">
                    <thead class="thead-dark">
                        <th class="text-center">Order Id</th>
                        <th class="text-center">Mobile</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">User</th>
                        <th class="text-center">Total Price</th>
                        <th class="text-center">Status</th>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td class="text-center">{{ $order->id }}</td>
                            <td class="text-center">{{ $order->mobile->name }}</td>
                            <td class="text-center">{{ $order->quantity }}</td>
                            <td class="text-center">{{ $order->user->name }}</td>
                            <td class="text-center">{{ $order->mobile->price * $order->quantity }}</td>
                            <td class="text-center">Pending</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="text-muted">No Order to view</h3>
            @endif
        </div>
    </div>
@endsection
