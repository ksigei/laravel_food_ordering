@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add a Restaurant</h1>

        <form method="POST" action="{{ route('restaurants.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone_number">Phone number</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
