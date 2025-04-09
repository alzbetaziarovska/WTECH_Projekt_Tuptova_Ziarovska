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
                <div class="product-in-cart">
                    <form method="POST" action="{{route("cart.removeProduct")}}">
                        @csrf
                        <!--<input type="hidden" name="_method" value="DELETE">-->
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="delete-btn" >&times</button>
                    </form>
                    <!-- <p><a href="{{route("cart.removeProduct")}}">&times</p> -->
                    <div class = "product-item-media">
                        <a href = "{{ url('product_detail/' . $product->id) }}"><img src="../images/logo_final.png" alt="{{ $product->name }} image"></a>
                        <p>{{ $product->name }}</p>
                        <p>Cena {{ number_format($product->salePrice(), 2) }}€</p>
                        <div class="quantity-selector">
                            <form method="POST" action="{{route("cart.changeProductPcs")}}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="number" name="quantity" id="quantity" min="1" value="{{ $productInCart->quantity }}">
                                <button type="submit" class="quantity-btn" id="increase">	&#10003;</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="cart-total">
            <div class="cart-pannel">
                <p>Objednajte ešte za <b>Y€</b> a máte dopravu <b>ZADARMO</b></bZADARMO>.</p>
                <div class="shipping-loader">
                    <div class="shipping-progress"></div>
                </div>
                <p>Objednajte ešte za <b>Z€</b> a získate <b>DARČEK</b> .</p>
                <div class="gift-loader">
                    <div class="gift-progress"></div>
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