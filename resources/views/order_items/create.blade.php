@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Order Item</h1>

        <form method="POST" action="{{ route('order-items.store') }}">
            @csrf

            {{-- <input type="hidden" name="order_id" value="{{ $order->id }}"> --}}
            <div class="form-group">
                <label for="order_id">Order ID:</label>
                <input type="text" class="form-control" name="order_id" id="order_id">
            </div>
            

            <div class="form-group">
                <label for="menu_id">Menu ID:</label>
                <input type="text" class="form-control" name="menu_id" id="menu_id">
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="text" class="form-control" name="quantity" id="quantity">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>

            <button type="submit" class="btn btn-primary">Create Order Item</button>
        </form>
    </div>
@endsection
