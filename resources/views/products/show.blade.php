@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
    <img src="{{ asset($product->mainImage->path ?? '') }}" alt="{{ $product->name }}">
@endsection
