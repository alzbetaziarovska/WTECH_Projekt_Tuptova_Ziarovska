@extends('layouts.base')

@section('main')
    <div class="thanks">
        <h2>Ďakujeme za Vašu objednávku!</h2>
        <p>Čoskoro Vám doručíme objednané produkty.</p>
        <p>Číslo objednávky: <span>123456</span></p>
        <p>Stav objednávky: <span>Čaká na doručenie</span></p>
        <i class="fa-solid fa-check-circle"></i>
        <a href="<?php echo url('homepage') ?>" class="home-but">Späť na domovskú stránku</a>
    </div>
@endsection