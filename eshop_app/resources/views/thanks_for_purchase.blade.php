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

    <div class="thanks">
        <h2>Ďakujeme za Vašu objednávku!</h2>
        <p>Čoskoro Vám doručíme objednané produkty.</p>
        <p>Číslo objednávky: <span>123456</span></p>
        <p>Stav objednávky: <span>Čaká na doručenie</span></p>
        <i class="fa-solid fa-check-circle"></i>
        <a href="<?php echo url('homepage') ?>" class="home-but">Späť na domovskú stránku</a>
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