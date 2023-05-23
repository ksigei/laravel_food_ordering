@extends('layouts.app')

@section('content')
    <h1>Create Order</h1>

    <form action="/orders" method="POST">
        @csrf
        <label for="customer_name">Customer Name</label>
        <input type="text" name="customer_name" id="customer_name">
        <br>
        <button type="submit">Place Order</button>
    </form>
@endsection
