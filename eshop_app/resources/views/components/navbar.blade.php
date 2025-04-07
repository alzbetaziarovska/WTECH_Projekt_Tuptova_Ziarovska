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
                    @if (auth()->check())
                        @if (auth()->user()->is_admin)
                            <a href="{{ route('admin_profile.index') }}"><i class="fa-solid fa-circle-user user-icon"></i></a>
                        @else
                            <a href="{{ route('profile.index') }}"><i class="fa-solid fa-circle-user user-icon"></i></a>
                        @endif
                    @else
                        <a href="#"><i class="fa-solid fa-circle-user user-icon"></i></a>
                    @endif
                    <a href="{{ url('shopping_cart1') }}" class="bag">
                        <i class="fa-solid fa-cart-shopping"></i>
                        @php
                            $cart = session('cart', []);
                            $cartCount = count($cart); // distinct products
                        @endphp
                        <div class="bag-count">{{ $cartCount }}</div>
                    </a>
                </div>

            </div>
            <div class="bottom-nav">
                <div class="categories">
                    <button class="menu-toggle">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    
                    <a href="<?php echo url('products/1') ?>">VYBAVENIE</a>
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