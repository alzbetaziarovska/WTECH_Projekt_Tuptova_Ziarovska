@extends('layouts.base')

@section('main')
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
@endsection