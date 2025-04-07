@extends('layouts.base')

@section('main')    
        <!-- Sekcia KAT1 -->
        <section class="category" id="category1">
            <a href = "<?php echo url('vybavenie') ?>"><h2>Vybavenie ➜</h2></a>
            <p class="cat-description">V tejto kategórii nájdete všetko potrebné pre starostlivosť o vaše včely – od úľov, rámikov a medzistienok až po včelárske náradie, ochranné pomôcky a dymáky. Či už ste začiatočník alebo skúsený včelár, naše vybavenie vám pomôže efektívne a bezpečne spravovať včelstvo.</p>
            <div class="carousel-wrapper">
                <button id="prevBtn" class="carousel-btn left">&#10094;</button>
                <div class="carousel-container">
                    <div class="product-carousel">
                        <div class="product sale recommended">
                            <a href="<?php echo url('product_detail') ?>" class="product-link">
                                <img src="../images/logo_final.png" alt="Produkt 1">
                                <div class="labels">
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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

        <!-- Sekcia KAT2 -->
        <section class="category" id="category2">
            <a href = "<?php echo url('krmivo') ?>"><h2>Krmivo a doplnky ➜</h2></a>
            <p class="cat-description">Správna výživa je základom zdravého a silného včelstva. Ponúkame rôzne druhy krmív, ako je cukrový sirup, fondán či proteínové doplnky, ktoré podporujú včely v kritických obdobiach. Nájdete tu aj napájačky a doplnkové látky na posilnenie imunity a produktivity včiel.</p>
            <div class="carousel-wrapper">
                <button id="prevBtn" class="carousel-btn left">&#10094;</button>
                <div class="carousel-container">
                    <div class="product-carousel">
                        <div class="product sale recommended">
                            <a href="<?php echo url('product_detail') ?>" class="product-link">
                                <img src="../images/logo_final.png" alt="Produkt 1">
                                <div class="labels">
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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

        <!-- Sekcia KAT3 -->
        <section class="category" id="category3">
            <a href="<?php echo url('zdravie') ?>"><h2>Zdravie včiel ➜</h2></a>
            <p class="cat-description">Prevencia a starostlivosť o zdravie včiel sú nevyhnutné pre úspešné včelárenie. V tejto kategórii nájdete prípravky proti varroáze, dezinfekčné prostriedky, vitamíny a iné produkty na ochranu včelstiev pred chorobami a škodcami.</p>
            <div class="carousel-wrapper">
                <button id="prevBtn" class="carousel-btn left">&#10094;</button>
                <div class="carousel-container">
                    <div class="product-carousel">
                        <div class="product sale recommended">
                            <a href="<?php echo url('product_detail') ?>" class="product-link">
                                <img src="../images/logo_final.png" alt="Produkt 1">
                                <div class="labels">
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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

        <section class="category" id="category-vyrobky">
            <a href = '<?php echo url('vyrobky') ?>'><h2>Výrobky ➜</h2></a>
            <p class="cat-description">V tejto sekcii nášho obchodu nájdete najrôznejšie výrobky domácej či ručnej výroby. Od sviečok, cez úle až po tinktúry.</p>
            <div class="carousel-wrapper">
                <button id="prevBtn" class="carousel-btn left">&#10094;</button>
                <div class="carousel-container">
                    <div class="product-carousel">
                        <div class="product sale recommended">
                            <a href="<?php echo url('product_detail') ?>" class="product-link">
                                <img src="../images/logo_final.png" alt="Produkt 1">
                                <div class="labels">
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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

        <section class="category" id="category-new-hor">
            <h2>Novinky</h2>
            <p class="cat-description">Buďte vždy informovaní o najnovších trendoch vo včelárstve! V tejto sekcii nájdete najnovšie produkty, inovácie a sezónne špeciality, ktoré vám pomôžu zlepšiť starostlivosť o vaše včely a spracovanie včelích produktov.</p>
            <div class="carousel-wrapper">
                <button id="prevBtn" class="carousel-btn left">&#10094;</button>
                <div class="carousel-container">
                    <div class="product-carousel">
                        <div class="product sale recommended">
                            <a href="<?php echo url('product_detail') ?>" class="product-link">
                                <img src="../images/logo_final.png" alt="Produkt 1">
                                <div class="labels">
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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
                                    <!-- Štítky sa zobrazia iba ak má produkt príslušnú triedu -->
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