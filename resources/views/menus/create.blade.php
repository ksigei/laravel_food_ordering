@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Menu</h1>

        <form method="POST" action="{{ route('menus.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" name="description" id="description">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>
            <div class="form-group">
                <label for="restaurant_id">Restaurant ID:</label>
                <input type="text" class="form-control" name="restaurant_id" id="restaurant_id">
            </div>

            <button type="submit" class="btn btn-primary">Create Menu</button>
        </form>
    </div>
@endsection
