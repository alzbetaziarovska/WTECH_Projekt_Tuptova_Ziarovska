@extends('layouts.base')

@section('main')
    <!-- Product Details -->
    <section class="product-detail">
        <h1 class="mobile-heading">{{ $product->name }}</h1>
        <div class="product-detail-upper">
            <div class="product-banner">
                <div class="together">
                    <div class="place4img-product">
                        @foreach ($photos as $photo)
                            <img src="{{ $photo->file }}" alt="Banner" class="banner-img" id="img-{{ $loop->index + 1 }}">
                        @endforeach
                    </div>
                    <div class="place4links-product">
                        @foreach ($photos as $photo)
                            <div class="link-shop" data-target="img-{{ $loop->index + 1 }}">
                                <a href=""><img src="{{ $photo->file }}" class="link-img" alt="Thumbnail"></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>            
            <div class="product-text">
                <div class="text-container">
                    <!-- @if ($product) -->
                    <h1>{{$product->name}}</h1>
                    <p id="product_description" class="collapsed">{{$product->description}}</p>
                    <button id="toggle-btn" class="toggle-button">Viac...</button>
                    <h1>Cena: {{ number_format($product->price, 2) }}€</h1>
                    <!-- @else
                    <h1>Sviečka z včelieho vosku</h1>
                    <p id="product_description" class="collapsed">Doprajte si kúzlo prírody s ručne vyrábanou sviečkou z čistého včelieho vosku. 
                        Táto sviečka je 100 % prírodná, bez pridaných chemikálií a umelých vôní, vďaka čomu je 
                        ideálnou voľbou pre zdravé a harmonické prostredie.<br><br>
                        ✔ Prírodná vôňa medu – Jemná, sladká aróma včelieho vosku navodí pocit tepla a útulnosti.<br>
                        ✔ Čisté horenie – Nevypúšťa škodlivé látky a horí dlhšie než bežné parafínové sviečky.<br>
                        ✔ Ionizuje vzduch – Pomáha čistiť vzduch od nečistôt a alergénov.<br>
                        ✔ Ekologická a udržateľná – Vyrobená zo včelieho vosku pochádzajúceho od lokálnych včelárov.<br><br>
                        ✨ Vhodná na relaxáciu, meditáciu alebo ako krásny prírodný doplnok do vášho domova.<br>
                        🕯️ Doba horenia: závisí od veľkosti sviečky <br>
                        🌿 Zloženie: 100 % prírodný včelí vosk, bavlnený knôt <br>
                        💛 Prinesie do vášho domova harmóniu a prírodnú vôňu včelieho úľa!</p>
                    
                    <h1>Cena: 10,99€</h1> -->
                    <!-- @endif -->
                    <div class = "product-stars">
                        @if ($product->stars == 0)
                         <p class="no-rating">Žiadne hodnotenie</p>
                        @else
                            @foreach (range(1, $product->stars) as $star)
                                <i class="fa-solid fa-star"></i>
                            @endforeach
                        @endif
                        <!-- <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i> -->
                    </div>
                </div>
                <p class="availability">Skladom {{ $product->in_storage < 10 ? (string) $product->in_storage : '>10' }}ks</p>
                <div class="button-container">
                    <form method="POST" action="{{ route('cart.addProduct') }}">
                        {{-- laravel somehow generates a token against cross site request forgery attacks--}}
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="quantity-selector">
                            <button class="quantity-btn" type="button" id="decrease">-</button>
                            <input type="number" name="quantity" id="quantity" min="1" max="{{ $product->in_storage }}" value="1">
                            <button class="quantity-btn" type="button" id="increase">+</button>
                        </div>
                        <button type="submit" class="shop-but"><i class="fa-solid fa-cart-shopping"></i>Do košíku</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews-section">
        <div class="reviews-container">
            <h2>Recenzie</h2>
            <div class = "reviews">
                @foreach ($reviews as $review)
                    @php
                        $f_name = $review->user->f_name;
                        $l_name = $review->user->l_name;
                        $full_name = $f_name . ' ' . $l_name;
                        $stars = $review->stars;
                        $text = $review->text;
                    @endphp
                    <div class="review">
                        <div class="reviewer">
                            <i class="fa-solid fa-circle-user user-icon"></i>
                            <p>{{ $full_name }}</p>
                        </div>
                        <div class = "review-stars">
                            @for ($i = 0; $i < $stars; $i++)
                                <i class="fa-solid fa-star"></i>
                            @endfor
                            <!-- <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i> -->
                        </div>    
                        <div class = "review-text">
                            <p>{{ $text }}</p>
                        </div>
                    </div>
                @endforeach
                <!-- <div class="review">
                    <div class="reviewer">
                        <i class="fa-solid fa-circle-user user-icon"></i>
                        <p>Jožko Mrkvička</p>
                    </div>
                    <div class = "review-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>    
                    <div class = "review-text">
                        <p>Rýchle dodanie a vysková kvalita produktov.</p>
                    </div>
                </div>
                <div class="review">
                    <div class="reviewer">
                        <i class="fa-solid fa-circle-user user-icon"></i>
                        <p>Anna Kováčová</p>
                    </div>
                    <div class = "review-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>    
                    <div class = "review-text">
                        <p>Skvelý produkt, materiál je kvalitný. Určite objednám znovu.</p>
                    </div>
                </div>
                <div class="review">
                    <div class="reviewer">
                        <i class="fa-solid fa-circle-user user-icon"></i>
                        <p>Eliška Nováková</p>
                    </div>
                    <div class = "review-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>    
                    <div class = "review-text">
                        <p>Eshop som si zamilovala už po prvom nákupe! Zákaznícky servis
                            je na vysokej úrovni a produkty sú kvalitné.</p>
                        </p>
                    </div>
                </div>
                <div class="review">
                    <div class="reviewer">
                        <i class="fa-regular fa-pen-to-square user-icon"></i>
                        <p>Pridajte recenziu</p>
                    </div>
                    
                </div> -->
            </div>
        </div>
    </section>
    
    <section class="similar" id="similar">
        <h2>Podobné</h2>
        <div class="carousel-wrapper">
            <button id="prevBtn" class="carousel-btn left">&#10094;</button>
            <div class="carousel-container">
                <div class="product-carousel">
                    <div class="product sale recommended">
                        <a href="<?php echo url('product_detail') ?>" class="product-link">
                            <img src="../images/logo_final.png" alt="Produkt 1">
                            <div class="labels">
                                <span class="label recommended-l"><i class="fa-regular fa-thumbs-up"></i></span>
                                <span class="label sale-l"><i class="fa-solid fa-percent"></i></span>
                                <span class="label new-l"><i class="fa-regular fa-star"></i></span>
                            </div>
                            <p class="name-of-product">Názov</p>
                            <p class="price-of-product">Cena X€</p>
                            <p class="price-of-product-sale">Cena Y€</p>
                            <div class="shop-product">
                                <a class="shop-but"><i class="fa-solid fa-cart-shopping"></i></a>
                                <div class="info-of-product">
                                    <p class="availability">Skladom >5ks</p>
                                    <div class="product-stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product recommended">
                        <a href="<?php echo url('product_detail') ?>" class="product-link">
                            <img src="../images/logo_final.png" alt="Produkt 1">
                            <div class="labels">
                                <span class="label recommended-l"><i class="fa-regular fa-thumbs-up"></i></span>
                                <span class="label sale-l"><i class="fa-solid fa-percent"></i></span>
                                <span class="label new-l"><i class="fa-regular fa-star"></i></span>
                            </div>
                            <p class="name-of-product">Názov</p>
                            <p class="price-of-product">Cena X€</p>
                            <p class="price-of-product-sale">Cena Y€</p>
                            <div class="shop-product">
                                <a class="shop-but"><i class="fa-solid fa-cart-shopping"></i></a>
                                <div class="info-of-product">
                                    <p class="availability">Skladom >5ks</p>
                                    <div class="product-stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product recommended new">
                        <a href="<?php echo url('product_detail') ?>" class="product-link">
                            <img src="../images/logo_final.png" alt="Produkt 1">
                            <div class="labels">
                                <span class="label recommended-l"><i class="fa-regular fa-thumbs-up"></i></span>
                                <span class="label sale-l"><i class="fa-solid fa-percent"></i></span>
                                <span class="label new-l"><i class="fa-regular fa-star"></i></span>
                            </div>
                            <p class="name-of-product">Názov</p>
                            <p class="price-of-product">Cena X€</p>
                            <p class="price-of-product-sale">Cena Y€</p>
                            <div class="shop-product">
                                <a class="shop-but"><i class="fa-solid fa-cart-shopping"></i></a>
                                <div class="info-of-product">
                                    <p class="availability">Skladom >5ks</p>
                                    <div class="product-stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product recommended">
                        <a href="<?php echo url('product_detail') ?>" class="product-link">
                            <img src="../images/logo_final.png" alt="Produkt 1">
                            <div class="labels">
                                <span class="label recommended-l"><i class="fa-regular fa-thumbs-up"></i></span>
                                <span class="label sale-l"><i class="fa-solid fa-percent"></i></span>
                                <span class="label new-l"><i class="fa-regular fa-star"></i></span>
                            </div>
                            <p class="name-of-product">Názov</p>
                            <p class="price-of-product">Cena X€</p>
                            <p class="price-of-product-sale">Cena Y€</p>
                            <div class="shop-product">
                                <a class="shop-but"><i class="fa-solid fa-cart-shopping"></i></a>
                                <div class="info-of-product">
                                    <p class="availability">Skladom >5ks</p>
                                    <div class="product-stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product recommended">
                        <a href="<?php echo url('product_detail') ?>" class="product-link">
                            <img src="../images/logo_final.png" alt="Produkt 1">
                            <div class="labels">
                                <span class="label recommended-l"><i class="fa-regular fa-thumbs-up"></i></span>
                                <span class="label sale-l"><i class="fa-solid fa-percent"></i></span>
                                <span class="label new-l"><i class="fa-regular fa-star"></i></span>
                            </div>
                            <p class="name-of-product">Názov</p>
                            <p class="price-of-product">Cena X€</p>
                            <p class="price-of-product-sale">Cena Y€</p>
                            <div class="shop-product">
                                <a class="shop-but"><i class="fa-solid fa-cart-shopping"></i></a>
                                <div class="info-of-product">
                                    <p class="availability">Skladom >5ks</p>
                                    <div class="product-stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product sale recommended">
                        <a href="<?php echo url('product_detail') ?>" class="product-link">
                            <img src="../images/logo_final.png" alt="Produkt 1">
                            <div class="labels">
                                <span class="label recommended-l"><i class="fa-regular fa-thumbs-up"></i></span>
                                <span class="label sale-l"><i class="fa-solid fa-percent"></i></span>
                                <span class="label new-l"><i class="fa-regular fa-star"></i></span>
                            </div>
                            <p class="name-of-product">Názov</p>
                            <p class="price-of-product">Cena X€</p>
                            <p class="price-of-product-sale">Cena Y€</p>
                            <div class="shop-product">
                                <a class="shop-but"><i class="fa-solid fa-cart-shopping"></i></a>
                                <div class="info-of-product">
                                    <p class="availability">Skladom >5ks</p>
                                    <div class="product-stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product sale recommended new">
                        <a href="<?php echo url('product_detail') ?>" class="product-link">
                            <img src="../images/logo_final.png" alt="Produkt 1">
                            <div class="labels">
                                <span class="label recommended-l"><i class="fa-regular fa-thumbs-up"></i></span>
                                <span class="label sale-l"><i class="fa-solid fa-percent"></i></span>
                                <span class="label new-l"><i class="fa-regular fa-star"></i></span>
                            </div>
                            <p class="name-of-product">Názov</p>
                            <p class="price-of-product">Cena X€</p>
                            <p class="price-of-product-sale">Cena Y€</p>
                            <div class="shop-product">
                                <a class="shop-but"><i class="fa-solid fa-cart-shopping"></i></a>
                                <div class="info-of-product">
                                    <p class="availability">Skladom >5ks</p>
                                    <div class="product-stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <button id="nextBtn" class="carousel-btn right">&#10095;</button>
        </div>
    </section>
@endsection