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
<<<<<<< Updated upstream
                    @if(Auth::check()) <!-- Ak je užívateľ prihlásený -->
                        <a href="{{ route('profile') }}">
                            <i class="fa-solid fa-circle-user user-icon"></i>
                        </a>
                    @else <!-- Ak nie je prihlásený -->
                        <a href="#" onclick="openLoginPopup()">
                            <i class="fa-solid fa-circle-user user-icon"></i>
                        </a>
                    @endif

                    <a href="{{ url('shopping_cart1') }}" class="bag">
=======
                    <p>Prihlásený ako: {{ auth()->user()->email ?? 'Neprihlásený' }}</p>
                    <a href="#"><i class="fa-solid fa-circle-user user-icon"></i></a>
                    <a href="<?php echo url('shopping_cart1') ?>" class="bag">
>>>>>>> Stashed changes
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

    <!-- OPENING HOURS-->
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
                    <a class="shop-but" href = '<?php echo url('shop') ?>'>NAKUPOVAŤ</a>
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

    
    
<<<<<<< Updated upstream
    <dialog id="auth-popup" class="popup-container">
=======
    <!-- SIGN IN/REGISTER/FORGOTTEN PSWD POPUP -->
    <div id="auth-popup" class="popup-container">
>>>>>>> Stashed changes
        <div class="popup-form">
            <span class="close-btn-auth" onclick="toggleAuthPopup()">×</span>     
            <div id="signin-form" class="form-content">
                <h3>Prihlásenie</h3>
<<<<<<< Updated upstream
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                    <input type="password" name="password" placeholder="Heslo" required>
                    @error('password') <span class="error">{{ $message }}</span> @enderror
=======
                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required><br>
                    <input type="password" name="password" placeholder="Heslo" required><br>
                    @if ($errors->has('email'))
                        <div class="errors">
                            <p>{{ $errors->first('email') }}</p>
                        </div>
                    @endif
>>>>>>> Stashed changes
                    <a href="#" class="forgot-password" onclick="toggleForgotPasswordForm()">Zabudnuté heslo?</a>
                    <a href="{{ url('admin_profile') }}">Admin</a>
                    <button type="submit">Prihlásiť sa</button>
                </form>                
                <p>Nemáte účet? <a href="#" onclick="toggleRegisterForm()">Zaregistrujte sa!</a></p>
            </div>
<<<<<<< Updated upstream
        
            <div id="register-form" class="form-content" style="display:none;">
                <h3>Registrácia</h3>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <input type="text" name="full_name" placeholder="Meno a Priezvisko" value="{{ old('full_name') }}" required>
                    @error('full_name') <span class="error">{{ $message }}</span> @enderror
                    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                    <input type="password" name="password" placeholder="Heslo" required>
                    @error('password') <span class="error">{{ $message }}</span> @enderror
=======

            <div id="register-form" class="form-content" style="display:none;">
                <h3>Registrácia</h3>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <input type="text" name="f_name" placeholder="Meno" value="{{ old('f_name') }}" required><br>
                    <input type="text" name="l_name" placeholder="Priezvisko" value="{{ old('l_name') }}" required><br>
                    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required><br>
                    <input type="password" name="password" placeholder="Heslo" required><br>
                    <input type="password" name="password_confirmation" placeholder="Potvrďte heslo" required><br>
>>>>>>> Stashed changes
                    <button type="submit">Registrovať sa</button>
                </form>
                @if ($errors->any() && !$errors->has('email'))
                    <div class="errors">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <p>Máte už účet? <a href="#" onclick="toggleRegisterForm()">Prihláste sa!</a></p>
            </div>
<<<<<<< Updated upstream
        
=======

>>>>>>> Stashed changes
            <div id="forgot-password-form" class="form-content" style="display:none;">
                <h3>Zabudnuté heslo</h3>
                <form action="#" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="E-mail" required>
                    <button type="submit">Resetovať heslo</button>
                </form>
                <p>Návrat na <a href="#" onclick="showSignInForm()">prihlásenie</a></p>
            </div>
        </div>
    </div>
    <!-- Skript na automatické otvorenie pri chybách registrácie -->
    @if ($errors->any() && !$errors->has('email'))
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const popup = document.getElementById('auth-popup');
                const signinForm = document.getElementById('signin-form');
                const registerForm = document.getElementById('register-form');
                const forgotForm = document.getElementById('forgot-password-form');
                
                popup.showModal();
                signinForm.style.display = 'none';
                registerForm.style.display = 'block';
                forgotForm.style.display = 'none';
            });
        </script>
    @endif

    <!-- Skript na automatické otvorenie pri chybách prihlásenia -->
    @if ($errors->has('email'))
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const popup = document.getElementById('auth-popup');
                const signinForm = document.getElementById('signin-form');
                const registerForm = document.getElementById('register-form');
                const forgotForm = document.getElementById('forgot-password-form');
                
                popup.showModal();
                signinForm.style.display = 'block';
                registerForm.style.display = 'none';
                forgotForm.style.display = 'none';
            });
        </script>
    @endif

    
    <!-- RECOMMENDED PRODUCTS -->
    <section class="recommended" id="recommended">
        <h2>Odporúčame</h2>
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
