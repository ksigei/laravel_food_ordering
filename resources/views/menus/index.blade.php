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
                   <div colspan="3">
                        @foreach ($menus as $menu)
                    <tr>
                        <td><h2><a href="/orders/create?menu_id={{ $menu->id }}" class="btn btn-primary">Order</a>
                        </h2></td>
                        <td>{{ $menu->price }}</td>
                        <td>{{ $menu->restaurant->name }}</td>
                    </tr>
                        @endforeach
                    <div colspan="3">
                            <a href="{{ route('menus.create', ['restaurant_id' => $menu->restaurant->id]) }}" class="btn btn-primary">New Menu</a>
                    </div>
            </tbody>
        </table>
    </div>
@endsection
