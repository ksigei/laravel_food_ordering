@extends('layouts.app')

@section('content')
    <h1>Create Order</h1>

    <form action="/orders" method="POST">
        @csrf
        <label for="user_id">User</label>
        <input type="text" name="user_id" id="user_id">
        <br>
        <label for="restaurant_id">Restaurant</label>
        <input type="text" name="restaurant_id" id="restaurant_id">
        <br>
        <label for="date">Date</label>
        <input type="date" name="date" id="date">
        <button type="submit">Place Order</button>
    </form>
@endsection
