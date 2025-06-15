@extends('layouts.app')

@section('content')
<h1>Your Wishlist</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif
@if(session('info'))
    <p style="color: blue;">{{ session('info') }}</p>
@endif

@if(count($wishlist) > 0)
    <ul>
        @foreach($wishlist as $id => $item)
            <li>
                <img src="{{ asset('storage/' . $item['image']) }}" width="50">
                {{ $item['name'] }} - ${{ $item['price'] }}
                <a href="{{ route('wishlist.remove', $id) }}">Remove</a>
            </li>
        @endforeach
    </ul>
@else
    <p>Your wishlist is empty.</p>
@endif

@endsection
