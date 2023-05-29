@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Restaurants</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone No.</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                <tr>
                    <td>{{ $restaurant->id }}</td>
                    <td><a href="{{ route('restaurants.show', ['id' => $restaurant->id]) }}">{{ $restaurant->name }}</a></td>
                    <td>{{ $restaurant->address }}</td>
                    <td>{{ $restaurant->phone_number }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
