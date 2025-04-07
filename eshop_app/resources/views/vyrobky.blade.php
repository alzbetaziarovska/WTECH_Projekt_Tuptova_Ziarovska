@extends('layouts.base')

@section('main')
    <section class="shop-products-section">
        <h2>VÝROBKY</h2>
        <div class="settings">
            <select class="order-by" id="order-by" name="order-by">
                <option value="">-- Zoradiť podľa --</option>
                <option value="price_desc">Cena (najdrahšie hore)</option>
                <option value="price_asc">Cena (najlacnejšie hore)</option>
                <option value="abc">Abecedne</option>
                <option value="review">Hodnotenie (najlepšie hore)</option>
            </select>
            <a class="filter-btn"><i class="fa-solid fa-filter"></i></a>
        </div>
        
        <!-- Products -->
        <div class="products-filter">
            <div class="products">
                <div class="product product-shop">
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
                    </a>
                        <div class="quantity-selector">
                            <button class="quantity-btn" id="decrease">-</button>
                            <input type="number" id="quantity" min="1" value="1">
                            <button class="quantity-btn" id="increase">+</button>
                        </div>
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
                    
                </div>
                <div class="product sale product-shop">
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
                    </a>
                        <div class="quantity-selector">
                            <button class="quantity-btn" id="decrease">-</button>
                            <input type="number" id="quantity" min="1" value="1">
                            <button class="quantity-btn" id="increase">+</button>
                        </div>
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
                    
                </div>
                <div class="product new sale product-shop">
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
                    </a>
                        <div class="quantity-selector">
                            <button class="quantity-btn" id="decrease">-</button>
                            <input type="number" id="quantity" min="1" value="1">
                            <button class="quantity-btn" id="increase">+</button>
                        </div>
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
                    
                </div>
                <div class="product new recommended product-shop">
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
                    </a>
                        <div class="quantity-selector">
                            <button class="quantity-btn" id="decrease">-</button>
                            <input type="number" id="quantity" min="1" value="1">
                            <button class="quantity-btn" id="increase">+</button>
                        </div>
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
                    
                </div>
                <div class="product sale product-shop">
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
                    </a>
                        <div class="quantity-selector">
                            <button class="quantity-btn" id="decrease">-</button>
                            <input type="number" id="quantity" min="1" value="1">
                            <button class="quantity-btn" id="increase">+</button>
                        </div>
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
                    
                </div>
                <div class="product new product-shop">
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
                    </a>
                        <div class="quantity-selector">
                            <button class="quantity-btn" id="decrease">-</button>
                            <input type="number" id="quantity" min="1" value="1">
                            <button class="quantity-btn" id="increase">+</button>
                        </div>
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
                    
                </div>
                <div class="product sale recommended product-shop">
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
                    </a>
                        <div class="quantity-selector">
                            <button class="quantity-btn" id="decrease">-</button>
                            <input type="number" id="quantity" min="1" value="1">
                            <button class="quantity-btn" id="increase">+</button>
                        </div>
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
                    
                </div>
            </div>
    
            <aside class="filter">
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