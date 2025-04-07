@extends('layouts.base')

@section('main')
    <div class="cart-container">
        <h2>Doprava a Platba</h2>
        <div class="shipping-options">
            <h3>Vyberte spôsob dopravy *</h3>
            <label><input type="radio" name="shipping" value="kurier"> Kuriér - 5€</label>
            <label><input type="radio" name="shipping" value="posta"> Slovenská pošta - 3€</label>
            <label><input type="radio" name="shipping" value="osobne" id="osobne"> Osobný odber - zadarmo</label>
            <label for="osobne_shop" id="osobne_label" style="display: none;">Vyberte predajňu: *</label>
                <select id="osobne_select" name="cities" style="display: none;">
                    <option value="">-- Vyberte predajňu --</option>
                    <option value="sk">Bratislava</option>
                    <option value="cz">Nitra</option>
                    <option value="pl">Prešov</option>
                </select>
        </div>
        
        <div class="payment-options">
            <h3>Vyberte spôsob platby *</h3>
            <label><input type="radio" name="payment" value="bank"> Bankový prevod</label>
            <label><input type="radio" name="payment" value="cash"> Dobierka (+1€)</label>
            <label><input type="radio" name="payment" value="card" id="card"> Platba kartou</label>
            <label for="card-number" id="card-number-label" style="display: none;">Číslo karty:</label>
            <input type="text" id="card-number" name="card-number" placeholder="XXXX-XXXX-XXXX-XXXX" pattern="\d{4}-\d{4}-\d{4}-\d{4}" required style="display: none;">
            <label for="expiry-date" id="expiry-date-label" style="display: none;">Dátum expirácie:</label>
            <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" pattern="\d{2}/\d{2}" required style="display: none;">
            <label for="cvv" id="cvv-label" style="display: none;">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="XXX" pattern="\d{3}" required style="display: none;">
        </div>
        
        <div class="cart-actions">
            <a href="<?php echo url('shopping_cart1') ?>" class="back-button"><i class="fa-solid fa-arrow-left"></i> Späť na nákupný košík</a>
            <button type="submit" id="submit-btn-sc2" class="next-button">Pokračovať na Vaše údaje <i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>
@endsection