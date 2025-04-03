<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Včelárske potrebee</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" type="image/x-icon" href="../images/logo_final.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <!-- NAVBAR -->
    <header>
        <nav>
            <div class="top-nav">
                <div class="menu">
                    <div class="logo">
                        <a href="<?php echo url('homepage') ?>"><img src="../images/logo_final.png" alt="Logo"></a>
                    </div>
                    <div class="nav-links">
                        <a href="<?php echo url('about') ?>">O nás</a>
                        <a href="<?php echo url('shop') ?>">E-shop</a>
                        <a href="<?php echo url('stores') ?>">Kamenné predajne</a>
                    </div>
                </div>
                <div class="contact-section">
                    <i class="fa-solid fa-phone phone-icon"></i> 
                    <div class="contact-info">
                        <address><span class="phone-number">+421 816 526 113</span></address>
                        <address><span class="working-hours">PO-PIA: 9:00 - 17:30</span></address>
                    </div>
                </div>
                <div class="user-actions">
                    <a href="#"><i class="fa-solid fa-circle-user user-icon"></i></a>
                    <a href="<?php echo url('shopping_cart1') ?>" class="bag">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <div class="bag-count">3</div>
                    </a>
                </div>
            </div>
            <div class="bottom-nav">
                <div class="categories">
                    <button class="menu-toggle">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    
                    <a href="<?php echo url('vybavenie') ?>">VYBAVENIE</a>
                    <a href="<?php echo url('krmivo') ?>">KRMIVO A DOPLNKY</a>
                    <a href="<?php echo url('zdravie') ?>">ZDRAVIE VČIEL</a>
                    <a href="<?php echo url('vyrobky') ?>">VÝROBKY</a>
                    <div class="search-contact-mobile">
                        <div class="contact-section tablet">
                            <div class="contact-info">
                                <address><span class="phone-number">+421 816 526 113</span></address>
                                <address><span class="working-hours">PO-PIA: 9:00 - 17:30</span></address>
                            </div>
                        </div>
                        <div class="search-container">
                            <input type="text" placeholder="Hľadať..." class="searchbar">
                            <i class="search-icon fa fa-magnifying-glass"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header> 

    <!-- SIDE MENU -->
    <aside class="sidebar">
        <button class="close-btn-side"><span>&times;</span></button>
        <a href="<?php echo url('about') ?>" class="topper">O nás</a>
        <a href="<?php echo url('shop') ?>" class="topper">E-shop</a>
        <a href="<?php echo url('vybavenie') ?>">VYBAVENIE</a>
        <a href="<?php echo url('krmivo') ?>">KRMIVO A DOPLNKY</a>
        <a href="<?php echo url('zadravie') ?>">ZDRAVIE VČIEL</a>
        <a href="<?php echo url('vyrobky') ?>">VÝROBKY</a>
        <a href="<?php echo url('stores') ?>" class="topper">Kamenné predajne</a>
        <div class="contact-section mobile topper">
            <i class="fa-solid fa-phone phone-icon"></i> 
            <div class="contact-info">
                <address><span class="phone-number">+421 816 526 113</span></address>
                <address><span class="working-hours">PO-PIA: 9:00 - 17:30</span></address>
            </div>
        </div>
    </aside>

    <aside class="added-to-cart">
        <button class="close-btn-cart">&times;</button>
        <p>Produkt bol pridaný do košíka</p>
        <div class="product">
            <a href = "<?php echo url('product_detail') ?>"><img src="../images/logo_final.png" alt="Produkt 2"></a>
            <p>Popis 2</p>
            <p>Cena 2€</p>
        </div>
        <a href="<?php echo url('shopping_cart1') ?>" class="btn-to-cart">Prejsť do košíka ➜</a>
        <p>Čo si kupujú ostatní</p>
        <div class="shoppers-also-buy">
            
            <div class="product">
                <a href = "<?php echo url('product_detail') ?>"><img src="../images/logo_final.png" alt="Produkt 1"></a>
                <p>Popis 1</p>
                <p>Cena 1€</p>
            </div>
            <div class="product">
                <a href = "<?php echo url('product_detail') ?>"><img src="../images/logo_final.png" alt="Produkt 3"></a>
                <p>Popis 3</p>
                <p>Cena 3€</p>
            </div>
            <div class="product">
                <a href = "<?php echo url('product_detail') ?>"><img src="../images/logo_final.png" alt="Produkt 3"></a>
                <p>Popis 3</p>
                <p>Cena 3€</p>
            </div>
        </div>
    </aside>

    <div class="opened-info">
        <div class="info-circle" id="status-icon">
            <i class="fa fa-shop" id="open-icon"></i>
            <i class="fa-solid fa-shop-slash" id="closed-icon"></i>
            <div class="text-info-container" id="text-container">
                <p id="open-text">Kamenné predajne otvorené</p>
                <p id="closed-text">Kamenné predajne zatvorené</p>
                <p id="text-to-open-popup"><u>Otváracie hodiny</u></p>
            </div>
            <i class="fa fa-chevron-up" id="toggle-arrow"></i> <!-- Šípka pre zbalenie -->
        </div>
        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="close-btn" onclick="togglePopup()">&times;</span>
                <h3>Návštivte nás osobne</h3>
                <table>
                    <tr><th>Deň</th><th>Čas</th></tr>
                    <tr><td>Po - Pi</td><td>9:00 - 17:30</td></tr>
                    <tr><td>So</td><td>Zatvorené</td></tr>
                    <tr><td>Ne</td><td>Zatvorené</td></tr>
                </table>
                <p class="stores-list"><a class="our-store" href="#">Bratislava</a> | <a class="our-store" href="#">Nitra</a> | <a class="our-store" href="#">Prešov</a></p>
                <p>Prejsť radšej do <a class="eshop-link" href="<?php echo url('shop') ?>">E-shopu</a></p>
            </div>
        </div>
    </div>

    <!-- Popup for Sign In / Register -->
    <dialog id="auth-popup" class="popup-container">
        <div class="popup-form">
            <span class="close-btn-auth" onclick="toggleAuthPopup()">&times;</span>     
            <div id="signin-form" class="form-content">
                <h3>Prihlásenie</h3>
                <form action="<?php echo url('profile') ?>" method="GET">
                    <input type="email" placeholder="E-mail" required><br>
                    <input type="password" placeholder="Heslo" required><br>
                    <a href="#" class="forgot-password" onclick="toggleForgotPasswordForm()">Zabudnuté heslo?</a>
                    <a href="<?php echo url('admin_profile') ?>">Admin</a>
                    <button type="submit">Prihlásiť sa</button>
                </form>                
                <p>Nemáte účet? <a href="#" onclick="toggleRegisterForm()">Zaregistrujte sa!</a></p>
            </div>
    
            <div id="register-form" class="form-content" style="display:none;">
                <h3>Registrácia</h3>
                <form action="#" method="POST">
                    <input type="text" placeholder="Meno a Priezvisko" required><br>
                    <input type="email" placeholder="E-mail" required><br>
                    <input type="password" placeholder="Heslo" required><br>
                    <button type="submit">Registrovať sa</button>
                </form>
                <p>Máte už účet? <a href="#" onclick="toggleRegisterForm()">Prihláste sa!</a></p>
            </div>
    
            <div id="forgot-password-form" class="form-content" style="display:none;">
                <h3>Zabudnuté heslo</h3>
                <form action="#" method="POST">
                    <input type="email" placeholder="E-mail" required><br>
                    <button type="submit">Resetovať heslo</button>
                </form>
                <p>Návrat na <a href="#" onclick="showSignInForm()">prihlásenie</a></p>
            </div>
        </div>
    </dialog>

    <!-- Product Details -->
    <section class="product-detail">
        <h1 class="mobile-heading">Sviečka z včelieho vosku</h1>
        <div class="product-detail-upper">
            <div class="product-banner">
                <div class="together">
                    <div class="place4img-product">
                        <img src="../images/product_detail1.png" alt="Banner" class="banner-img" id="img-1">
                        <img src="../images/product_detail2.png" alt="Banner" class="banner-img" id="img-2">
                        <img src="../images/product_detail3.png" alt="Banner" class="banner-img" id="img-3">
                        <img src="../images/product_detail4.webp" alt="Banner" class="banner-img" id="img-4">
                        <img src="../images/product_detail5.jpg" alt="Banner" class="banner-img" id="img-5">
                    </div>
                    <div class="place4links-product">
                        <div class="link-shop" data-target="img-1">
                            <a href=""><img src="../images/product_detail1.png" class="link-img" alt="Thumbnail"></a>
                        </div>
                        <div class="link-shop" data-target="img-2">
                            <a href=""><img src="../images/product_detail2.png" class="link-img" alt="Thumbnail"></a>
                        </div>
                        <div class="link-shop" data-target="img-3">
                            <a href=""><img src="../images/product_detail3.png" class="link-img" alt="Thumbnail"></a>
                        </div>
                        <div class="link-shop" data-target="img-4">
                            <a href=""><img src="../images/product_detail4.webp" class="link-img" alt="Thumbnail"></a>
                        </div>
                        <div class="link-shop" data-target="img-5">
                            <a href=""><img src="../images/product_detail5.jpg" class="link-img" alt="Thumbnail"></a>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="product-text">
                <div class="text-container">
                    @if ($product)
                    <h1>{{$product->name}}</h1>
                    <p id="product_description" class="collapsed">{{$product->description}}</p>
                    <h1>Cena: {{$product->price}}€</h1>
                    @else
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
                    <button id="toggle-btn" class="toggle-button">Viac...</button>
                    <h1>Cena: 10,99€</h1>
                    @endif
                    <div class = "product-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <div class="quantity-selector">
                    <button class="quantity-btn" id="decrease">-</button>
                    <input type="number" id="quantity-detail" min="1" value="1">
                    <button class="quantity-btn" id="increase">+</button>
                </div>
                <p class="availability">Skladom >10ks</p>
                <div class="button-container">
                    <a class="shop-but"><i class="fa-solid fa-cart-shopping"></i>Do košíka</a>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews-section">
        <div class="reviews-container">
            <h2>Recenzie</h2>
            <div class = "reviews">
                <div class="review">
                    <div class="reviewer">
                        <i class="fa-solid fa-circle-user user-icon"></i>
                        <p>John Doe</p>
                    </div>
                    <div class = "review-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>    
                    <div class = "review-text">
                        <p>Produkt je skvelý, vrelo odporúčam!</p>
                    </div>
                </div>
                <div class="review">
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
                    
                </div>
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

    <!-- Footer -->
    <footer>
        <div class="newsletter-container">
            <h3>Aktuálne novinky a akcie na Váš e-mail</h3>
            <div class="newsletter-form">
                <form action="#" method="GET">
                    <input type="email" name="email" placeholder="tvoj@email.sk" required>
                    <button type="submit">Potvrdiť</button>
                </form>
                <p class="regulations">*Vložením e-mailu súhlasíte s podmienkami ochrany osobných údajov</p>
            </div>
        </div>
        <div class="footer-text-container">
            <div class="contact-us">
                <div class="text-container">
                    <p>Potrebujete poradiť?</p>
                    <p> Neváhajte, <b>sme tu pre Vás</b>!</p>
                </div>
                <div class="delimeter"></div>
                <div class="information">
                    <address><p class="phone-info"> +421 816 526 113</p></address>
                    <address><p> nasemail@gmail.com</p></address>
                </div>
            </div>
            <div class="delimeter"></div>
            <div class="socials">
                <p><b>Sledujte nás</b></p>
                <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
        </div>
        <p class="copyright">&copy; 2025 WTECH Tuptová, Žiarovská</p>
    </footer>
    <script src="../javascript/script.js"></script>
</body>
</html>