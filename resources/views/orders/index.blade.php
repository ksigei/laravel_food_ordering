@extends('layouts.app')

@section('content')
    <h1>Orders</h1>
    <ul>
        @foreach ($orders as $order)
            <li>{{ $order->id }} - {{ $order->created_at }}</li>
        @endforeach
    </ul>
@endsection
