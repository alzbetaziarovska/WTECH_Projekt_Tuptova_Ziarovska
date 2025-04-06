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

    <div class="cart-sections-bar">
        <a><i class="fa-solid fa-bag-shopping"></i>Nákupný košík</a>
        <i class="fa-solid fa-arrow-right arrows"></i>
        <a><i class="fa-solid fa-truck"></i>Doprava a platba</a>
        <i class="fa-solid fa-arrow-right arrows"></i>
        <a><i class="fa-solid fa-circle-info"></i><b>Informácie o Vás</b></a>
    </div>
    

    <div class="cart-container">
        <h2>Vaše údaje</h2>
        <div class="info-container-cart">
            <form action="<?php echo url('thanks_for_purchase') ?>" method="" class="info-form" id="info-form">
                <label for="name">Meno: *</label>
                <input type="text" id="fname" name="first_name" required>

                <label for="name">Priezvisko: *</label>
                <input type="text" id="lname" name="last_name" required>
                
                <label for="email">E-mail: *</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Telefónne číslo: *</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="address">Ulica a číslo popisné: *</label>
                <input type="text" id="street" name="street" required>

                <label for="address">Mesto: *</label>
                <input type="text" id="city" name="city" required>

                <label for="country">Vyberte krajinu: *</label>
                <select id="country" name="country">
                    <option value="">-- Vyberte krajinu --</option>
                    <option value="sk">Slovensko</option>
                    <option value="cz">Česko</option>
                    <option value="pl">Poľsko</option>
                    <option value="hu">Maďarsko</option>
                    <option value="at">Rakúsko</option>
                </select>

                <label for="note">Poznámka k objednávke:</label>
                <textarea id="note" name="note"></textarea>
            </form>
        </div>

        <div class="cart-actions">
            <a href="<?php echo url('shopping_cart2') ?>" class="back-button"><i class="fa-solid fa-arrow-left"></i> Späť na dopravu a platbu</a>
            <button type="submit" id="submit-btn-sc3" class="next-button">Objednať sa povinnosťou platby <i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>


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

    <div class="user-info-popup">
        <p>Prihlásený ako: {{ auth()->user()->email ?? '-' }}</p>
    </div>
            
    <!-- SIGN IN/REGISTER/FORGOTTEN PSWD POPUP -->
    <div id="auth-popup" class="popup-container">
        <div class="popup-form">
            <span class="close-btn-auth" onclick="toggleAuthPopup()">×</span>     
            <div id="signin-form" class="form-content">
                <h3>Prihlásenie</h3>
                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required><br>
                    <input type="password" name="password" placeholder="Heslo" required><br>
                    @if ($errors->has('email'))
                        <div class="errors">
                            <p>{{ $errors->first('email') }}</p>
                        </div>
                    @endif
                    <a href="#" class="forgot-password" onclick="toggleForgotPasswordForm()">Zabudnuté heslo?</a>
                    <a href="{{ url('admin_profile') }}">Admin</a>
                    <button type="submit">Prihlásiť sa</button>
                </form>                
                <p>Nemáte účet? <a href="#" onclick="toggleRegisterForm()">Zaregistrujte sa!</a></p>
            </div>

            <div id="register-form" class="form-content" style="display:none;">
                <h3>Registrácia</h3>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <input type="text" name="f_name" placeholder="Meno" value="{{ old('f_name') }}" required><br>
                    <input type="text" name="l_name" placeholder="Priezvisko" value="{{ old('l_name') }}" required><br>
                    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required><br>
                    <input type="password" name="password" placeholder="Heslo" required><br>
                    <input type="password" name="password_confirmation" placeholder="Potvrďte heslo" required><br>
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

            <div id="forgot-password-form" class="form-content" style="display:none;">
                <h3>Zabudnuté heslo</h3>
                <form action="#" method="POST">
                    <input type="email" placeholder="E-mail" required><br>
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
