@extends('layouts.base')

@section('main')
    <!-- PROFILE -->
    <section class = "profile-section">
        <div class="profile">
            <h2>Môj profil</h2>
            <div class="profile-info">
                <div class="profile-image">
                    <i class="fa-solid fa-circle-user"></i>
                </div>
                <div>
                    <div class="profile-text">
                    @if($user)
                        <p><b>{{ $user->f_name }} {{ $user->l_name }}</b></p>
                        <p>{{ $user->email }}</p>
                    @else
                        <p><b>Janko Hraško</b></p>
                        <p>janko.hrasko@gmail.com</p>
                    @endif
                    </div>
                    <div class="profile-actions">
                        <a href="#"><button>Zmeniť heslo</button></a>
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit">Odhlásiť sa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- ADMIN ACTIONS -->
        <div class="admin">
            <div class="add-product">
                <h2>Pridať produkt</h2>
                <form action="#" method="POST" class="add-product-form">
                    <label for="product-name">Názov produktu</label>
                    <input type="text" id="product-name-add" name="product-name" required>
                    <label for="product-category">Kategória produktu</label>
                    <select name="product-category" id="product-category-add" required>
                        <option value="vybavenie">Vybavenie</option>
                        <option value="krmivo">Krmivo a doplnky</option>
                        <option value="zdravie">Zdravie včiel</option>
                        <option value="vyrobky">Výrobky</option>
                    </select>
                    <label for="product-description">Popis produktu</label>
                    <textarea name="product-description" id="product-description-add" required></textarea>
                    <label for="product-price">Cena produktu</label>  
                    <input type="number" name="product-price" id="product-price-add" required>
                    <label for="make">Výrobca produktu</label>
                    <input type="text" name="make" id="make-add" required>
                    <label for="product-quantity">Množstvo produktu</label>
                    <input type="number" name="product-quantity" required>
                    <label for="product-images">Obrázky produktu</label>
                    <input type="file" name="product-image" id="product-image-add" multiple required>
                    <p id="error-message" style="color: red; display: none;">Prosím nahrajte aspoň 2 obrázky produktu.</p>
                    <button type="submit" id="add-submit-btn">Pridať produkt</button>
                </form>
                <p id="add-product-success" class="success-message">Produkt bol úspešne pridaný!</p>
            </div>
            <div class="delete-product">
                <h2>Odstrániť produkt</h2>
                <form action="#" method="POST" class="delete-product-form">
                    <label for="product-id">Id produktu</label>
                    <input type="text" name="product-id" id="product-id-delete" required>
                    <button type="submit">Odstrániť produkt</button>
                </form>
                <p id="delete-product-success" class="success-message">Produkt bol úspešne odstránený!</p>
            </div>
            <div class="edit-product">
                <h2>Upraviť produkt</h2>
                <form action="#" method="SUBMIT" class="edit-product-form-id">
                    <label for="product-id">Id produktu</label>
                    <input type="text" name="product-id-edit" required>
                    <button type="submit">Nájsť produkt</button>
                </form>
                <form action="#" method="POST" class="edit-product-form">
                    <label for="product-name">Názov produktu</label>
                    <input type="text" id="product-name-edit" name="product-name" required>
                    <label for="product-category">Kategória produktu</label>
                    <select name="product-category" id="product-category-edit" required>
                        <option value="vybavenie">Vybavenie</option>
                        <option value="krmivo">Krmivo a doplnky</option>
                        <option value="zdravie">Zdravie včiel</option>
                        <option value="vyrobky">Výrobky</option>
                    </select>
                    <label for="product-description">Popis produktu</label>
                    <textarea name="product-description" id="product-description-edit" required></textarea>
                    <label for="product-price">Cena produktu</label>  
                    <input type="number" name="product-price" id="product-price-edit" required>
                    <label for="make">Výrobca produktu</label>
                    <input type="text" name="make" id="make-edit" required>
                    <label for="product-quantity">Množstvo produktu</label>
                    <input type="number" name="product-quantity" id="quantity-edit" required>
                    <label for="product-images">Obrázky produktu</label>
                    <input type="file" name="product-image" required>
                    <button type="submit">Upraviť produkt</button>
                </form>
                <p id="edit-product-success" class="success-message">Produkt bol úspešne upravený!</p>
            </div>
        </div>
    </section>
@endsection