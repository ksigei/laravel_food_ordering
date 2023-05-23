@extends('layouts.app')

@section('content')
    <h1>Menus</h1>
    <ul>
        @foreach ($menus as $menu)
            <li>{{ $menu->name }} - ${{ $menu->price }}</li>
        @endforeach
    </ul>
@endsection
