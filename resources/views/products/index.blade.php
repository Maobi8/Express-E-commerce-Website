@extends('layouts.header')
@section('content')
    <section class="tp-product-arrival-area pb-55">
        <div class="container">

            {{-- Success message alert --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row align-items-end">
                <div class="col-xl-5 col-sm-6">
                    <div class="tp-section-title-wrapper mb-40">
                        <h3 class="tp-section-title">Laptops
                            <svg width="114" height="35" viewBox="0 0 114 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053"
                                    stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637"
                                    stroke-linecap="round" />
                            </svg>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="{{ asset('assets/img/' . $product->images->first()->image_path) }}"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5>{{ $product->name }}</h5>
                                    <p>{{ $product->description }}</p> {{-- Show description --}}
                                    <p>₦{{ number_format($product->price) }}</p>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#quickView{{ $product->id }}">
                                        Quick View
                                    </button>
                                    <form action="{{ route('cart.add', $product->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button class="btn btn-success">Add to Cart</button>
                                    </form>
                                    <form action="{{ route('wishlist.add', $product->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        <button class="btn btn-outline-secondary">♡</button>
                                    </form>
                                </div>
                            </div>

                            @include('products.modal')
                        </div>
                    @endforeach
                </div>

            </div>

    </section>
@endsection
