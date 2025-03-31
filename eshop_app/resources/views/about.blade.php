<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Včelárske potrebee</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" type="image/x-icon" href="../images/logo_final.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.2.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://static.elfsight.com/platform/platform.js" async></script>

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

    <!-- PRODUCT ADDED TO CART -->
    <aside class="added-to-cart">
        <button class="close-btn-cart">&times;</button>
        <p>Produkt bol pridaný do košíka</p>
        <div class="product">
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
        <a href="<?php echo url('shopping_cart1') ?>" class="btn-to-cart">Prejsť do košíka ➜</a>
        <p>Čo si kupujú ostatní</p>
        <div class="shoppers-also-buy">
            <div class="product">
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
            <div class="product">
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
            <div class="product">
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
    </aside>

    <!-- OPENING HOURS -->
    <div class="opened-info">
        <div class="info-circle" id="status-icon">
            <i class="fa fa-shop" id="open-icon"></i>
            <i class="fa-solid fa-shop-slash" id="closed-icon"></i>
            <div class="text-info-container" id="text-container">
                <p id="open-text">Kamenné predajne otvorené</p>
                <p id="closed-text">Kamenné predajne zatvorené</p>
                <p id="text-to-open-popup"><u>Otváracie hodiny</u></p>
            </div>
            <i class="fa fa-chevron-up" id="toggle-arrow"></i>
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

    <!-- SIGN IN/REGISTER/FORGOTTEN POP UP -->
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

    <!-- MAIN CONTENT -->
    <main class="grid-container">
        <section class="about-us-main">
            <h2>Naša vášeň a tradícia</h2>
            <div class="text-main">
                <h3><i class="fa-solid fa-check"></i> Kvalita na prvom mieste</h3><br><p>Spolupracujeme iba s overenými dodávateľmi a výrobcami, ktorí garantujú spoľahlivé produkty testované v praxi. Všetky produkty v našej ponuke sú testované a používané skúsenými včelármi.</p>
                <h3><i class="fa-solid fa-check"></i> Láska k včelám</h3><br><p>Veríme v ekologické riešenia a ponúkame produkty, ktoré sú šetrné k životnému prostrediu. To, čo robíme, robíme s nadšením a úctou k prírode.</p>
                <h3><i class="fa-solid fa-check"></i> Vzdelávanie a komunita</h3><br><p>Chceme šíriť osvetu o včelárstve a pomáhať novým včelárom na ich ceste. Sme tu pre Vás, vždy radi pomôžeme a poradíme.</p>    <br>
                <div class="video-main">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Z0QB0k9zXeM?si=11jcyMwgOvY77THn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>  
            </div> 
            <div class="connect-main">
                <p>Máte otázky, potrebujete poradiť alebo sa chcete s nami podeliť o svoje skúsenosti? Neváhajte nás kontaktovať!</p>
                <div class="connect-main-contacts">
                    <h2>Spojte sa s nami</h2>
                    <div>
                        <p>Vaša podpora pre nás znamená veľa.</p><br>
                        <p> <i class="fa-solid fa-location-dot"></i><a href="<?php echo url('stores') ?>">KAMENNÉ PREDAJNE</a></p><br><br>
                    </div>
                </div>
            </div>
         </section>
         <section class="community-section">
            <h2>Komunita</h2>
                <div class="community">
                <p>Včelárenie je viac než len hobby - je to <span>poslanie</span>.<br><br> <b>Preto organizujeme:</b></p>
                <div class="together-com">
                    <h3><i class="fa-solid fa-calendar-days"></i>Workshopy a školenia</h3><br>
                </div>
                
                <p>Naučíte sa správnu starostlivosť o včely, techniky chovu a spracovania produktov.</p><br>
                <iframe class="calendr" src="https://calendar.google.com/calendar/embed?height=200&wkst=1&ctz=Europe%2FLondon&showPrint=0&title=V%C4%8Del%C3%A1ri&src=NDY0MzI0MjUxMmEyMDk0ODdjYTAyZmU4MTdmZjVlOGVkNDUzNDE3ZWExOTNmNmIyYmUxMjA5YWI0MTBkZjgyOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23E67C73" width="300" height="300" frameborder="0" scrolling="no"></iframe>
                <a class="calendar-mobile">Skontrolujte náš kalendár!</a>
                <br>
                <h3><i class="fa-solid fa-thumbs-up"></i>Blogy a návody</h3><br> <p>Praktické tipy, zaujímavosti zo sveta včiel a informácie pre začínajúcich aj pokročilých včelárov.</p> <br>
                <h3><i class="fa-solid fa-heart"></i> Podporu pre začiatočníkov</h3><br> <p>Ak začínate, radi vám pomôžeme s výberom vhodného vybavenia a poradíme, ako začať.</p><br>
                <h3><i class="fa-solid fa-gift"></i> Súťaže a akcie</h3><br> <p>Sledujte nás na sociálnych sieťach a nezmeškajte žiadnu z našich akcií.</p>
                <br>
                <div class="go-shopping-cont">
                    <h2>Presvedčilo Vás to?</h2><br>
                    <div class="button-container">
                        <a class="shop-but" href = '<?php echo url('shop') ?>'>NAKUPOVAŤ</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-gallery">
            <h2>Galéria</h2>
            <div class="gallery-grid">
                <div class="gallery-item item1">
                    <img src="../images/gallery1.png" alt="Product Image 1">
                </div>
                <div class="gallery-item item2">
                    <img src="../images/gallery2.jpg" alt="Product Image 2">
                </div>
                <div class="gallery-item item3">
                    <img src="../images/gallery3.jpg" alt="Product Image 3">
                </div>
                <div class="gallery-item item4">
                    <img src="../images/gallery4.jpg" alt="Product Image 4">
                </div>
                <div class="gallery-item item5">
                    <img src="../images/gallery5.jpg" alt="Product Image 5">
                </div>
                <div class="gallery-item item6">
                    <img src="../images/gallery6.jpg" alt="Product Image 6">
                </div>
                <div class="gallery-item item7">
                    <img src="../images/gallery7.webp" alt="Product Image 7">
                </div>
                <div class="gallery-item item8">
                    <img src="../images/gallery8.jpg" alt="Product Image 8">
                </div>
                <div class="gallery-item item9">
                    <img src="../images/gallery9.jpg" alt="Product Image 9">
                </div>
                <div class="gallery-item item10">
                    <img src="../images/gallery10.jpg" alt="Product Image 10">
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
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