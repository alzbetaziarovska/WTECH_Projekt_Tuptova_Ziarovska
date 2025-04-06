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

    <section class="on-site-stores-container">
        <h2>Kamenné predajne - Navštívte nás osobne!</h2>
        <p>Ak preferujete osobný nákup, radi vás privítame v našich kamenných predajniach. V každej z nich nájdete široký sortiment včelárskych potrieb, kvalitné produkty a odborné poradenstvo. Naši skúsení predajcovia vám pomôžu s výberom vybavenia, poskytnú cenné rady a zodpovedajú všetky vaše otázky.</p>
    
        <div class="on-site-stores">
            <div class="store">
                <h2><i class="fa fa-shop"></i> Bratislava</h2>
                <address><p><strong>📍 Adresa:</strong> Fajnorovo nábrežie 52</p></address><br>
                <p>Naša bratislavská predajňa sa nachádza v centre mesta a je ideálnym miestom na rýchly a pohodlný nákup včelárskych potrieb.</p>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1747.0375970036612!2d17.108987911653884!3d48.14030534056008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8941de479e11%3A0x3f069e5b28cae71f!2sFajnorovo%20n%C3%A1bre%C5%BEie%2052%2F5%2C%20811%2002%20Star%C3%A9%20Mesto!5e1!3m2!1ssk!2ssk!4v1742479782382!5m2!1ssk!2ssk" width="600" height="450" allowfullscreen="" loading="lazy"></iframe>
            </div>
        
            <div class="store">
                <h2><i class="fa fa-shop"></i> Nitra</h2>
                <address><p><strong>📍 Adresa:</strong> Výstavná 4, Chrenová</p></address><br>
                <p>Náš obchod v Nitre je obľúbený medzi včelármi z celého regiónu.</p>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2052.566586730531!2d18.09896457551765!3d48.30624507126262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b3ee943f40311%3A0xcb0a53f2fc5b542b!2sAgrokomplex%20Nitra!5e1!3m2!1ssk!2ssk!4v1742481833345!5m2!1ssk!2ssk" width="600" height="450" allowfullscreen="" loading="lazy"></iframe>
            </div>
        
            <div class="store">
                <h2><i class="fa fa-shop"></i> Prešov</h2>
                <address><p><strong>📍 Adresa:</strong> Jilemnického 39 </p></address> <br>
                <p>Východné Slovensko má silnú včelársku tradíciu a naša predajňa v Prešove je miestom, kde nájdete všetko, čo potrebujete pre úspešné včelárenie.</p>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2025.4942363856949!2d21.243645275568205!3d48.97593347134839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473eed99be25a2b3%3A0x86b19294c0ddcb79!2sJilemnick%C3%A9ho%2C%20080%2001%20Pre%C5%A1ov!5e1!3m2!1ssk!2ssk!4v1742481994448!5m2!1ssk!2ssk" width="600" height="450" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    
        <p>Neviete, ktorá predajňa je pre vás najbližšia? Kontaktujte nás a radi vám poradíme!</p>
        <p>Chcete si rezervovať tovar na osobný odber? Objednajte si online a vyzdvihnite ho v jednej z našich predajní!</p><br>
        <h2><strong>Tešíme sa na vašu návštevu!</strong></h2>
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
