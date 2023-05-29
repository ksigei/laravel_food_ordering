@extends('layouts.app')

@section('content')
<a href="{{ route('menus.index') }}" class="btn btn-primary">Back</a>

    <h1>{{ $menu->name }}</h1>
    <p>Price: ${{ $menu->price }}</p>
    <p>Description: {{ $menu->description }}</p>

    <a href="{{ route('orders.create', ['menu_id' => $menu->id]) }}" class="btn btn-primary">Order</a>
    <h2>Restaurant</h2>
    <p><a href="{{ route('restaurants.show', ['id' => $menu->restaurant->id]) }}">{{ $menu->restaurant->name }}</a></p>

@endsection


