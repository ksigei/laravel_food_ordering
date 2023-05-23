@extends('layouts.app')

@section('content')
    <h1>{{ $menu->name }}</h1>
    <p>Price: ${{ $menu->price }}</p>
    <p>Description: {{ $menu->description }}</p>
@endsection
