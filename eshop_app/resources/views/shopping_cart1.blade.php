@extends('layouts.base')

@section('main')
    <div class="cart-container">
        <h2>Váš nákupný košík</h2>
        <div class="cart-items">
            @forelse ($products as $product)
                <div class="product-in-cart">
                    <form action="{{ route('cart.remove', $id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="remove-btn">×</button>
                    </form>
                    <div class="product-item-media">
                        <a href="{{ url('product_detail/' . $id) }}">
                            <img src="../images/logo_final.png" alt="{{ $item['name'] }}">
                        </a>
                        <p>{{ $product->name }}</p>
                        <p>Cena {{ $product->price }}€</p>
                        <div class="quantity-selector">
                            <form action="{{ route('cart.update', $id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" name="change" value="decrease" class="quantity-btn">-</button>
                                <input type="number" name="quantity" min="1" value="{{ $item['quantity'] }}" onchange="this.form.submit()">
                                <button type="submit" name="change" value="increase" class="quantity-btn">+</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p>Váš košík je prázdny.</p>
            @endforelse
        </div>
        
        <div class="cart-total">
            <div class="cart-pannel">
                <p>Objednajte ešte za <b>Y$</b> a máte dopravu <b>ZADARMO</b></bZADARMO>.</p>
                <div class="shipping-loader">
                    <div class="shipping-progress"></div>
                </div>
                <p>Objednajte ešte za <b>Z$</b> a získate <b>DARČEK</b> .</p>
                <div class="gift-loader">
                    <div class="gift-progress"></div>
                </div>
                <p>Doručenie možné do: <i class="fa-solid fa-circle-question"></i></p> 
                <p class="delivery-time"><i class="fa-solid fa-box-open"></i>DD.MM.RRRR</p>
            </div>
            <div class="price-info">
                <div>
                <div>
                        @php
                            $cart = session('cart', []);
                        @endphp
                    <span class="big-price">Cena: {{ array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)) }}€</span>
                </div>
                </div>
                <div>
                    <a href="#" class="toggle-coupon"><u>Mám zľavový kupón</u></a>
                    <div class="coupon-form">
                        <input type="text" placeholder="Zadajte kupón" class="coupon-input">
                        <button class="apply-button">APLIKUJ</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="cart-actions">
            <a href="<?php echo url('shop') ?>" class="back-button"><i class="fa-solid fa-arrow-left"></i> Späť do obchodu</a>
            <a href="<?php echo url('shopping_cart2') ?>" class="next-button" type="submit">Pokračovať na dopravu a platbu <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
@endsection