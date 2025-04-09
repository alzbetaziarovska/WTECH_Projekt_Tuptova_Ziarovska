@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.base')

@section('main')
    <section class="shop-products-section">
        <h2>{{ Str::upper($categoryName) }}</h2>

        <!-- Products -->
        <div class="products-filter">
            <div class="products">
                {{-- @var \App\Models\Product $product --}}
                @foreach ($products as $product)
                @php
                    $photo = $product->photos->first();
                @endphp
                <div class="product {{ $product->sale > 0 ? 'sale' : '' }} {{ $product->recommended ? 'recommended' : '' }} {{ $product->new_in ? 'new' : '' }}">
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
                @endforeach
            </div>

            <aside class="filter">
                <!-- Filter -->
                <h2>Filter</h2>
                <form action="{{ route('products.index', ['category' => $category]) }}" method="GET">
                    <div class="settings">
                        <select class="order-by" id="order-by" name="order-by">
                            <option value="">-- Zoradiť podľa --</option>
                            <option value="price_desc" {{ request()->input('order-by') == 'price_desc' ? 'selected' : '' }}>Cena (najdrahšie hore)</option>
                            <option value="price_asc" {{ request()->input('order-by') == 'price_asc' ? 'selected' : '' }}>Cena (najlacnejšie hore)</option>
                            <option value="abc" {{ request()->input('order-by') == 'abc' ? 'selected' : '' }}>Abecedne</option>
                            <option value="review" {{ request()->input('order-by') == 'review' ? 'selected' : '' }}>Hodnotenie (najlepšie hore)</option>
                        </select>
                        <a class="filter-btn"><i class="fa-solid fa-filter"></i></a>
                    </div>

                    <div class="filter-options">

                        <!-- Cenové rozpätie -->
                        <div class="filter-option">
                            <h3>Cenové rozpätie</h3>
                            <div class="price-range">
                                <input type="number" name="min_price" placeholder="Min (€)" min="0" step="0.5" value="{{ old('min_price', request()->input('min_price')) }}">
                                <span>-</span>
                                <input type="number" name="max_price" placeholder="Max (€)" min="0" step="0.5" value="{{ old('max_price', request()->input('max_price')) }}">
                            </div>
                        </div>

                        <!-- Výrobca -->
                        <div class="filter-option">
                            <h3>Výrobca</h3>
                            <ul>
                                <li><input type="checkbox" name="maker[]" value="allforbees" {{ in_array('allforbees', request()->input('maker', [])) ? 'checked' : '' }}> AllForBees</li>
                                <li><input type="checkbox" name="maker[]" value="vcelari" {{ in_array('vcelari', request()->input('maker', [])) ? 'checked' : '' }}> Včelári.sk</li>
                                <li><input type="checkbox" name="maker[]" value="vcielka" {{ in_array('vcielka', request()->input('maker', [])) ? 'checked' : '' }}> Včielka</li>
                                <li><input type="checkbox" name="maker[]" value="beeplus" {{ in_array('beeplus', request()->input('maker', [])) ? 'checked' : '' }}> BeePlus</li>
                            </ul>
                        </div>

                        <!-- Štítky -->
                        <div class="filter-option">
                            <h3>Štítky</h3>
                            <ul>
                                <li><input type="checkbox" name="on_sale" value="akcia" {{ request()->input('on_sale') === 'akcia' ? 'checked' : '' }}> Akcia</li>
                                <li><input type="checkbox" name="in_storage" value="na-sklade" {{ request()->input('in_storage') === 'na-sklade' ? 'checked' : '' }}> Na sklade</li>
                                <li><input type="checkbox" name="new_in" value="novinka" {{ request()->input('new_in') === 'novinka' ? 'checked' : '' }}> Novinka</li>
                                <li><input type="checkbox" name="recommend" value="odporucame" {{ request()->input('recommend') === 'odporucame' ? 'checked' : '' }}> Odporúčame</li>
                                <li><input type="checkbox" name="favorite" value="oblubene" {{ request()->input('favorite') === 'oblubene' ? 'checked' : '' }}> Obľúbené</li>
                            </ul>
                        </div>
                    </div>

                    <button type="submit" class="apply-filter-btn">Aplikovať filter</button>
                    <button type="button" id="reset-filters" class="reset-filter-btn">Resetovať filtre</button>
                </form>
            </aside>
        </div>

        <div class="pagination">
            <button id="prevPage">&laquo; Predošlá</button>
            <span id="pageIndicator">1</span>
            <button id="nextPage">Ďalšia &raquo;</button>
        </div>
    </section>

    <aside class="filter-mobile">
        <!-- Filter -->
        <h2>Filter</h2>
        <div class="filter-options">

            <!-- Cenové rozpätie -->
            <div class="filter-option">
                <h3>Cenové rozpätie</h3>
                <div class="price-range">
                    <input type="number" id="min-price" placeholder="Min (€)" min="0" step="0.5">
                    <span>-</span>
                    <input type="number" id="max-price" placeholder="Max (€)" min="0" step="0.5">
                </div>
            </div>

            <!-- Výrobca -->
            <div class="filter-option">
                <h3>Výrobca</h3>
                <ul>
                    <li><input type="checkbox" name="manufacturer" value="allforbees"> AllForBees</li>
                    <li><input type="checkbox" name="manufacturer" value="vcelari"> Včelári.sk</li>
                    <li><input type="checkbox" name="manufacturer" value="vcielka"> Včielka</li>
                    <li><input type="checkbox" name="manufacturer" value="beeplus"> BeePlus</li>
                </ul>
            </div>

            <!-- Štítky -->
            <div class="filter-option">
                <h3>Štítky</h3>
                <ul>
                    <li><input type="checkbox" name="tag" value="akcia"> Akcia</li>
                    <li><input type="checkbox" name="tag" value="na-sklade"> Na sklade</li>
                    <li><input type="checkbox" name="tag" value="novinka"> Novinka</li>
                    <li><input type="checkbox" name="tag" value="odporucame"> Odporúčame</li>
                    <li><input type="checkbox" name="tag" value="oblubene"> Obľúbené</li>
                </ul>
            </div>
        </div>
        <button class="apply-filter-btn">Aplikovať filter</button>
    </aside>
@endsection