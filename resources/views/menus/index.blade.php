@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Menus</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Restaurant</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->price }}</td>
                        <td>{{ $menu->restaurant->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
