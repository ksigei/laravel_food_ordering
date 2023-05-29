@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Order Item</h1>

        <form method="POST" action="{{ route('order-items.store') }}">
            @csrf

            <input type="hidden" name="order_id" value="{{ $orderId }}">


            <div class="form-group">
                <label for="menu_id">Menu ID:</label>
                <select name="menu_id" id="menu_id">
                    @foreach ($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
                </select>
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
