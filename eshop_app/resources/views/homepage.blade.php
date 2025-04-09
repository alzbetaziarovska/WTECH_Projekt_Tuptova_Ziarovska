@extends('layouts.base')

@section('main')
<!-- HERO -->
<main class="hero">
        <div class="hero-upper">
            <div class="hero-banner">
                <div class="place4img">
                    <img src="../images/homepage1.png" alt="Banner" class="banner-img" id="img-1">
                    <img src="../images/homepage2.jpg" alt="Banner" class="banner-img" id="img-2">
                    <img src="../images/homepage3.jpg" alt="Banner" class="banner-img" id="img-3">
                    <img src="../images/homepage4.webp" alt="Banner" class="banner-img" id="img-4">
                    <img src="../images/homepage5.jpg" alt="Banner" class="banner-img" id="img-5">
                </div>
                <div class="place4links">
                    <div class="link" data-target="img-1"><a href="#">Jar v znamení zliav</a></div>
                    <div class="link" data-target="img-2"><a href="#">Limitka: Ručne vyrábané úle</a></div>
                    <div class="link" data-target="img-3"><a href="#">Ako na zdravé včelstvá</a></div>
                    <div class="link" data-target="img-4"><a href="#">Propolis</a></div>
                    <div class="link" data-target="img-5"><a href="#">Workshop pre včelárov</a></div>
                </div>
            </div>            
            <div class="hero-text">
                <div class="text-container">
                    <h1>Váš partner vo svete <span>včelárstva!</span></h1>
                    <p>Ponúkame overené produkty, rýchle dodanie a odborné poradenstvo, aby váš úľ prekypoval zdravím a medom.</p>
                </div>
                <div class="button-container">
                    <a class="shop-but-main" href = '<?php echo url('shop') ?>'>NAKUPOVAŤ</a>
                </div>
            </div>
        </div>
        <div class="hero-lower">
            <div class="why-shop-list">
                <div class="why-shop-item">
                    <div class="info-container">
                        <i class="fa-solid fa-truck-fast"></i>
                        <p>Rýchla a spoľahlivá preprava</p>
                    </div>
                    <p class="subtext">Tovar precízne zabalíme</p>
                </div>
                <div class="why-shop-item">
                    <div class="info-container">
                        <i class="fa-solid fa-money-bill-1-wave"></i>
                        <p>Doprava zadarmo</p>
                    </div>
                    <p class="subtext">Pre objednávky nad 79€</p>
                </div>
                <div class="why-shop-item">
                    <div class="info-container">
                        <i class="fa-solid fa-star"></i>
                        <p>Päť generácií včelárov</p>
                    </div>
                    <p class="subtext">O včely sa staráme s citom</p>
                </div>
                <div class="why-shop-item">
                    <div class="info-container">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Tri kamenné predajne</p>
                    </div>
                    <p class="subtext">Navštívte nás v Bratislave, Nitre a Prešove</p>
                </div>
            </div>
        </div>
    </main>

    
    <!-- RECOMMENDED PRODUCTS -->
     @if (!$products->isEmpty())
        <section class="recommended" id="recommended">
            <h2>Odporúčame</h2>
            <div class="carousel-wrapper">
                <button id="prevBtn" class="carousel-btn left">&#10094;</button>
                <div class="carousel-container">
                    <div class="product-carousel">
                        {{-- @var \App\Models\Product $product --}}
                        @foreach ($products as $product)
                        @php
                            $photo = $product->photos->first();
                        @endphp
                            <div class="product {{ $product->on_sale > 0 ? 'sale' : '' }} {{ $product->recommended ? 'recommended' : '' }} {{ $product->new_in ? 'new' : '' }}">
                                <a href="{{ url('product_detail/' . $product->id) }}" class="product-link">
                                    <img src="{{ $photo->file }}" class="product-photo" alt="Produkt {{ $product->name }}">
                                </a>
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
                                    <p class="price-of-product-sale">Cena {{ number_format($salePrice, 2)}}€</p>
                                    <form method="POST" action="{{ route('cart.addProduct') }}">
                                        {{-- laravel somehow generates a token against cross site request forgery attacks--}}
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <div class="quantity-selector">
                                            <button class="quantity-btn" type="button" id="decrease">-</button>
                                            <input type="number" name="quantity" id="quantity" min="1" max="{{ $product->in_storage }}" value="1">
                                            <button class="quantity-btn" type="button" id="increase">+</button>
                                        </div>
                                        <div class="shop-product">
                                            <button type="submit" class="shop-but"><i class="fa-solid fa-cart-shopping"></i></button>
                                            <div class="info-of-product">
                                                <p class="availability">Skladom {{ $product->in_storage < 10 ? (string) $product->in_storage : '>10' }}ks</p>
                                                <div class="product-stars">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <button id="nextBtn" class="carousel-btn right">&#10095;</button>
            </div>
        </section>
    @endif
    

    <!-- ABOUT US -->
    <article class="about" id="about">
        <h2 class="about-heading">Náš príbeh</h2>
        <div class = 'about-content'>
            <div class="about-text">
                <p>
                    Ahojte!<br><br>
                    Sme dve mladé študentky informatiky, ktoré spája netradičná vášeň - včely.
                    Kvôli tomuto spojeniu sme sa rozhodli založiť e-shop s včelárskymi potrebami, ktorého
                    cieľom je uľahčiť prístup ku kvalitným produktom, ktoré vám pomôžu rozvíjať
                    vaše včelstvo. Naša ponuka je zameraná na kvalitu, preto spolupracujeme s overenými
                    dodávateľmi a výrobcami. Medzi produktami, ktoré ponúkame nájdete naozaj všetko
                    potrebné pre vaše úle.<br><br>
                    V rámci rozvoja včelárskej komunity a podpory začínajúcich včelárov organizujeme
                    workshopy a školenia, kde sa môžete dozvedieť viac o starostlivosti o včely, výrobe
                    medu a propolisu a mnoho ďalšieho. Na našej stránke nájdete aj rôzne články
                    a príspevky, z ktorých sa dozviete mnoho tipov, trikov a zaujímvostí. <br><br>
                    V prípade akýchkoľvek otázok nás neváhajte kontaktovať, radi vám poradíme.<br><br>
                    Ďakujeme za podporu a dôveru! 🐝 <a href="<?php echo url('about') ?>"><u>Viac...</u></a>
                </p>
            </div>
            <div class="about-images">
                <div class="img-container">
                    <img src = '../images/our_story.webp'></img>
                </div>
                <div class="img-container">
                    <img src = '../images/our_story.webp'></img>
                </div>
            </div>
            
        </div>
    </article>
@endsection