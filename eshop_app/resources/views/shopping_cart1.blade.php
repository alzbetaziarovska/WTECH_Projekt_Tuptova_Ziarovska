@extends('layouts.base')

@section('main')

    <div class="cart-sections-bar">
        <a><i class="fa-solid fa-bag-shopping"></i><b>Nákupný košík</b></a>
        <i class="fa-solid fa-arrow-right arrows"></i>
        <a><i class="fa-solid fa-truck"></i>Doprava a platba</a>
        <i class="fa-solid fa-arrow-right arrows"></i>
        <a><i class="fa-solid fa-circle-info"></i>Informácie o Vás</a>
    </div>


    <div class="cart-container">
        <h2>Váš nákupný košík</h2>
        <div class="cart-items">
            @foreach($productsInCart as $productInCart) <?php $product = $productInCart->product ?>
                @php
                    $photo = $product->photos->first();
                @endphp
                <div class="product-in-cart">
                    <form method="POST" action="{{route("cart.removeProduct")}}">
                        @csrf
                        <!--<input type="hidden" name="_method" value="DELETE">-->
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="delete-btn" >&times</button>
                    </form>
                    <!-- <p><a href="{{route("cart.removeProduct")}}">&times</p> -->
                    <div class = "product-item-media">
                        <a href = "{{ url('product_detail/' . $product->id) }}"><img src="{{ $photo->file }}" class="cart-photo" alt="{{ $product->name }} image"></a>
                        <p>{{ $product->name }}</p>
                        @php
                            $price = $product->price - $product->sale;
                        @endphp
                        <p>Cena {{ number_format($price, 2) }}€</p>
                        <div class="quantity-selector">
                            <form method="POST" class="change-quantity-form" action="{{route("cart.changeProductPcs")}}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="quantity-selector-cart">
                                    <button class="quantity-btn" name="quantity" type="button" id="decrease-cart">-</button>
                                    <input type="number" name="quantity" id="quantity-cart" min="1" value="{{ $productInCart->quantity }}">
                                    <button class="quantity-btn" name="quantity" type="button" id="increase-cart">+</button>
                                </div>
                                <button type="submit" class="quantity-btn">&#10003;</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="cart-total">
            <div class="cart-pannel">
                @php
                    $freeShipping = 50 - $cartPrice;
                    $gift = 20 - $cartPrice;
                    $shippingProgressPercentage = min(100, ($cartPrice / 50) * 100);
                    $giftProgressPercentage = min(100, ($cartPrice / 20) * 100);
                @endphp
                @if ($freeShipping < 0)
                    <p class="free-shipping"><i class="fa-solid fa-truck"></i> Získali ste dopravu <b>ZADARMO</b></p>
                @else
                    <p class="free-shipping">Objednajte ešte za <b>{{ $freeShipping }}€</b> a máte dopravu <b>ZADARMO</b></bZADARMO>.</p>
                @endif
                <div class="shipping-loader">
                    <div class="shipping-progress" style="width: {{ $shippingProgressPercentage }}%;"></div>
                </div>
                @if ($gift < 0)
                    <p class="free-gift"><i class="fa-solid fa-gift"></i> Získali ste <b>DARČEK</b></p>
                @else
                    <p>Objednajte ešte za <b>{{ $gift }} €</b> a získate <b>DARČEK</b> .</p>
                @endif
                <div class="gift-loader">
                    <div class="gift-progress" style="width: {{ $giftProgressPercentage }}%;"></div>
                </div>
                <p>Doručenie možné do: <i class="fa-solid fa-circle-question"></i></p>
                <p class="delivery-time"><i class="fa-solid fa-box-open"></i>DD.MM.RRRR</p>
            </div>
            <div class="price-info">
                <div>
                    <span class="big-price">Cena: {{ $cartPrice }}€</span>
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