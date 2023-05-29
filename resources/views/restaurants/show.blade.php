@extends('layouts.app')

@section('content')
   <a href="{{ route('restaurants.index') }}" class="btn btn-primary">Back</a>
        <h1><a href="{{ route('restaurants.show', ['id' => $restaurant->id]) }}">{{ $restaurant->name }}</a></h1>
        <p>Address: {{ $restaurant->address }}</p>
        <p>Phone: {{ $restaurant->phone }}</p>
    </a>
    <h2>Menus</h2>
    <ul>
        @foreach ($restaurant->menus as $menu)
            <li><a href="{{ route('menus.show', ['id' => $menu->id]) }}">{{ $menu->name }}</a></li>
        @endforeach
    </ul>
@endsection

