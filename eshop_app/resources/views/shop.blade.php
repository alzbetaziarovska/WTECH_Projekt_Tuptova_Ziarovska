@extends('layouts.base')

@section('main')    
        <!-- Sekcia Kategórií -->
        @foreach ($categories as $category)
        @php 
            $products = $category->products()->where('category_id', $category->id)->get();
        @endphp
         <section class="category" id="category{{$category->id}}">
            <a href = "<?php echo url('products/{{$category->id}}') ?>"><h2>{{$category->name}} ➜</h2></a>
            <div class="carousel-wrapper">
                <button id="prevBtn" class="carousel-btn left">&#10094;</button>
                <div class="carousel-container">
                    <div class="product-carousel">
                        @foreach ($products as $product)
                        @php
                            $photo = $product->photos()->first();
                        @endphp
                        <div class="product {{ $product->on_sale > 0 ? 'sale' : '' }} {{ $product->recommended ? 'recommended' : '' }} {{ $product->new_in ? 'new' : '' }}">
                            <a href="{{ url('product_detail/' . $product->id) }}" class="product-link">
                                <img src="{{ $photo->file }}" alt="Produkt 1">
                                <div class="labels">
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
                                    @if ($product->recommend)
                                        <span class="label recommended-l"><i class="fa-regular fa-thumbs-up"></i></span>
                                    @elseif ($product->sale > 0)
                                        <span class="label sale-l"><i class="fa-solid fa-percent"></i></span>
                                    @elseif ($product->new_in)
                                        <span class="label new-l"><i class="fa-regular fa-star"></i></span>
                                    @endif
                                </div>
                                <p class="name-of-product">{{$product->name}}</p>
                                <p class="price-of-product">Cena {{ number_format($product->price, 2) }}€</p>
                                @php
                                    $salePrice = $product->price - $product->sale;
                                @endphp
                                <p class="price-of-product-sale">Cena {{ number_format($salePrice, 2) }}€</p>
                            </a>
                            <form method="POST" action="{{ route('cart.addProduct') }}">
                                {{-- laravel somehow generates a token against cross site request forgery attacks--}}
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="quantity" id="quantity" min="1" max="1" value="1">
                                <div class="shop-product">
                                    <button type="submit" class="shop-but"><i class="fa-solid fa-cart-shopping"></i></button>
                                    <div class="info-of-product">
                                        <p class="availability">Skladom {{ $product->in_storage < 10 ? (string) $product->in_storage : '>10' }}ks</p>
                                        <div class="product-stars">
                                        @foreach (range(1, $product->stars) as $star)
                                            <i class="fa-solid fa-star"></i>
                                         @endforeach
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
                <button id="nextBtn" class="carousel-btn right">&#10095;</button>
            </div>
        </section>
        @endforeach

        <section class="category" id="category-new-hor">
            @php 
                $products = $category->products()->where('new_in', true)->get();
            @endphp
            <h2>Novinky</h2>
            <p class="cat-description">Buďte vždy informovaní o najnovších trendoch vo včelárstve! V tejto sekcii nájdete najnovšie produkty, inovácie a sezónne špeciality, ktoré vám pomôžu zlepšiť starostlivosť o vaše včely a spracovanie včelích produktov.</p>
            <div class="carousel-wrapper">
                <button id="prevBtn" class="carousel-btn left">&#10094;</button>
                <div class="carousel-container">
                    <div class="product-carousel">
                        @foreach ($products as $product)
                        @php
                            $photo = $product->photos()->first();
                        @endphp
                            <div class="product {{ $product->on_sale > 0 ? 'sale' : '' }} {{ $product->recommended ? 'recommended' : '' }} {{ $product->new_in ? 'new' : '' }}">
                                <a href="{{ url('product_detail/' . $product->id) }}" class="product-link">
                                    <img src="{{ $photo->file }}" class="product-photo" alt="Produkt 1">
                                    <div class="labels">
                                        <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
                                        @if ($product->recommend)
                                            <span class="label recommended-l"><i class="fa-regular fa-thumbs-up"></i></span>
                                        @elseif ($product->sale > 0)
                                            <span class="label sale-l"><i class="fa-solid fa-percent"></i></span>
                                        @elseif ($product->new_in)
                                            <span class="label new-l"><i class="fa-regular fa-star"></i></span>
                                        @endif
                                    </div>
                                    <p class="name-of-product">{{$product->name}}</p>
                                    <p class="price-of-product">Cena {{$product->price}}€</p>
                                    @php
                                        $salePrice = $product->price - $product->sale;
                                    @endphp
                                    <p class="price-of-product-sale">Cena {{$salePrice}}€</p>
                                    <div class="shop-product">
                                        <a class="shop-but"><i class="fa-solid fa-cart-shopping"></i></a>
                                        <div class="info-of-product">
                                            <p class="availability">Skladom {{ $product->in_storage < 10 ? (string) $product->in_storage : '>10' }}ks</p>
                                            <div class="product-stars">
                                            @foreach (range(1, $product->stars) as $star)
                                                <i class="fa-solid fa-star"></i>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <button id="nextBtn" class="carousel-btn right">&#10095;</button>
            </div>
        </section>
@endsection