@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Order Items</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order ID</th>
                    <th>Menu ID</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderItems as $orderItem)
                    <tr>
                        <td>{{ $orderItem->id }}</td>
                        <td>{{ $orderItem->order_id }}</td>
                        <td>{{ $orderItem->menu_id }}</td>
                        <td>{{ $orderItem->quantity }}</td>
                        <td>{{ $orderItem->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
