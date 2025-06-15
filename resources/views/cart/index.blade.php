@extends('layouts.header')

@section('content')
    <div class="container my-5 ">
        <h1 class="mb-4">Your Cart</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (count($cart) > 0)
            <form id="cart-form" method="POST" action="{{ route('cart.update') }}">
                @csrf
                <div class="list-group mb-4">
                    @php
                        $total = 0;
                    @endphp

                    @foreach ($cart as $id => $item)
                        @php
                            $itemTotal = $item['price'] * $item['quantity'];
                            $total += $itemTotal;
                        @endphp
                        <div class="list-group-item" data-id="{{ $id }}">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="{{ asset('assets/img/' . $item['image']) }}" alt="{{ $item['name'] }}"
                                        class="img-fluid rounded">
                                </div>
                                <div class="col-md-4">
                                    <h5>{{ $item['name'] }}</h5>
                                    @if (isset($item['description']))
                                        <p class="text-muted">{{ Str::limit($item['description'], 100) }}</p>
                                    @endif
                                    <p><strong class="item-price">₦{{ number_format($item['price']) }}</strong> each</p>
                                </div>
                                <div class="col-md-3 d-flex align-items-center ">
                                    <button type="button"
                                        class="btn btn-outline-secondary btn-sm me-2 quantity-decrease">-</button>
                                    <input type="number" min="1" name="quantities[{{ $id }}]"
                                        value="{{ isset($item['quantity']) && $item['quantity'] > 0 ? $item['quantity'] : 1 }}"
                                        class="form-control form-control-sm quantity-input  " style="width: 70px;">
                                    <button type="button"
                                        class="btn btn-outline-secondary btn-sm ms-2 quantity-increase">+</button>
                                </div>
                                <div class="col-md-2">
                                    <p class="item-total fw-bold">₦{{ number_format($itemTotal) }}</p>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4>Total: <span id="cart-total">₦{{ number_format($total) }}</span></h4>
                    <button type="submit" class="btn btn-success btn-lg">Checkout</button>
                </div>
            </form>
           <div class="col-md-1 text-end">
                <form action="{{ route('cart.remove', $id) }}" method="POST"
                    onsubmit="return confirm('Remove this item?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                </form>
            </div>
        @else
            <p class="text-muted">Your cart is empty.</p>
        @endif
         
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cartForm = document.getElementById('cart-form');

            function formatCurrency(amount) {
                return '₦' + amount.toLocaleString();
            }

            // Update item total and cart total
            function updateTotals() {
                let total = 0;

                cartForm.querySelectorAll('.list-group-item').forEach(item => {
                    const quantityInput = item.querySelector('.quantity-input');
                    const priceText = item.querySelector('.item-price').textContent;
                    const price = Number(priceText.replace(/[^0-9.-]+/g, ""));
                    const quantity = Number(quantityInput.value);
                    const itemTotal = price * quantity;

                    item.querySelector('.item-total').textContent = formatCurrency(itemTotal);
                    total += itemTotal;
                });

                document.getElementById('cart-total').textContent = formatCurrency(total);
            }

            // Handle + and - buttons
            cartForm.querySelectorAll('.quantity-increase').forEach(button => {
                button.addEventListener('click', () => {
                    const input = button.parentElement.querySelector('.quantity-input');
                    input.value = Number(input.value) + 1;
                    updateTotals();
                });
            });

            cartForm.querySelectorAll('.quantity-decrease').forEach(button => {
                button.addEventListener('click', () => {
                    const input = button.parentElement.querySelector('.quantity-input');
                    if (Number(input.value) > 1) {
                        input.value = Number(input.value) - 1;
                        updateTotals();
                    }
                });
            });

            // Update totals on manual quantity change
            cartForm.querySelectorAll('.quantity-input').forEach(input => {
                input.addEventListener('input', () => {
                    if (input.value < 1) input.value = 1;
                    updateTotals();
                });
            });
        });
    </script>
@endsection
