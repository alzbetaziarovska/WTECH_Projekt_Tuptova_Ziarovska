@extends('layouts.base')

@section('main')
    <section class = "profile-section">
        <div class="profile">
            <h2>Môj profil</h2>
            <div class="profile-info">
                <div class="profile-image">
                    <i class="fa-solid fa-circle-user"></i>
                </div>
                <div>
                <div class="profile-text">
                    @if(auth()->check()) <!-- Skontroluje, či je niekto prihlásený -->
                        <p><b>{{ auth()->user()->f_name }} {{ auth()->user()->l_name }}</b></p>
                        <p>{{ auth()->user()->email }}</p>
                    @else
                        <p>Nie ste prihlásení.</p>
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
        <div class="orders-section">
            <h2>História objednávok</h2>
            <divclass="orders">
                <div class="order">
                    <div class="order-info">
                        <p><b>Číslo objednávky:</b> 123456</p>
                        <p><b>Dátum:</b> 12.12.2023</p>
                        <p><b>Cena:</b> 25,00 €</p>
                    </div>
                    <div class="order-actions">
                        <a href="#"><button>Detaily</button></a>
                        <a href="#"><button>Zrušiť</button></a>
                        <p><span class="status waiting">V procese</span></p>
                    </div>
                </div>
                <div id="orders" class="collapsed-orders">
                    <div class="order">
                        <div class="order-info">
                            <p><b>Číslo objednávky:</b> 123456</p>
                            <p><b>Dátum:</b> 12.12.2023</p>
                            <p><b>Cena:</b> 25,00 €</p>
                        </div>
                        <div class="order-actions">
                            <a href="#"><button>Detaily</button></a>
                            <a href="#"><button>Zrušiť</button></a>
                            <p><span class="status canceled">Zrušená</span></p>
                        </div>
                    </div>
                    <div class="order">
                        <div class="order-info">
                            <p><b>Číslo objednávky:</b> 123456</p>
                            <p><b>Dátum:</b> 12.12.2023</p>
                            <p><b>Cena:</b> 25,00 €</p>
                        </div>
                        <div class="order-actions">
                            <a href="#"><button>Detaily</button></a>
                            <a href="#"><button>Zrušiť</button></a>
                            <p><span class="status delivered">Doručená</span></p>
                        </div>
                    </div>
            </div>
            <button id="toggle-btn" class="toggle-button">Viac...</button>
        </div>
    </section>
@endsection