@extends('layouts.app')

@section('content')
    <h1>Create Order</h1>

    <form action="/orders" method="POST">
        @csrf
        <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
        <br>
        <label for="restaurant_id">Restaurant</label>
        <select name="restaurant_id" id="restaurant_id">
            @foreach ($restaurants as $restaurant)
                <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="date">Date</label>
        <input type="date" name="date" id="date">
        <button type="submit">Place Order</button>
    </form>
@endsection
