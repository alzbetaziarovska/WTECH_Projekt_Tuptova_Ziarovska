@extends('layouts.base')

@section('main')
    <!-- MAIN CONTENT -->
    <main class="grid-container">
        <section class="about-us-main">
            <h2>Naša vášeň a tradícia</h2>
            <div class="text-main">
                <h3><i class="fa-solid fa-check"></i> Kvalita na prvom mieste</h3><br><p>Spolupracujeme iba s overenými dodávateľmi a výrobcami, ktorí garantujú spoľahlivé produkty testované v praxi. Všetky produkty v našej ponuke sú testované a používané skúsenými včelármi.</p>
                <h3><i class="fa-solid fa-check"></i> Láska k včelám</h3><br><p>Veríme v ekologické riešenia a ponúkame produkty, ktoré sú šetrné k životnému prostrediu. To, čo robíme, robíme s nadšením a úctou k prírode.</p>
                <h3><i class="fa-solid fa-check"></i> Vzdelávanie a komunita</h3><br><p>Chceme šíriť osvetu o včelárstve a pomáhať novým včelárom na ich ceste. Sme tu pre Vás, vždy radi pomôžeme a poradíme.</p>    <br>
                <div class="video-main">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Z0QB0k9zXeM?si=11jcyMwgOvY77THn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>  
            </div> 
            <div class="connect-main">
                <p>Máte otázky, potrebujete poradiť alebo sa chcete s nami podeliť o svoje skúsenosti? Neváhajte nás kontaktovať!</p>
                <div class="connect-main-contacts">
                    <h2>Spojte sa s nami</h2>
                    <div>
                        <p>Vaša podpora pre nás znamená veľa.</p><br>
                        <p> <i class="fa-solid fa-location-dot"></i><a href="<?php echo url('stores') ?>">KAMENNÉ PREDAJNE</a></p><br><br>
                    </div>
                </div>
            </div>
         </section>
         <section class="community-section">
            <h2>Komunita</h2>
                <div class="community">
                <p>Včelárenie je viac než len hobby - je to <span>poslanie</span>.<br><br> <b>Preto organizujeme:</b></p>
                <div class="together-com">
                    <h3><i class="fa-solid fa-calendar-days"></i>Workshopy a školenia</h3><br>
                </div>
                
                <p>Naučíte sa správnu starostlivosť o včely, techniky chovu a spracovania produktov.</p><br>
                <iframe class="calendr" src="https://calendar.google.com/calendar/embed?height=200&wkst=1&ctz=Europe%2FLondon&showPrint=0&title=V%C4%8Del%C3%A1ri&src=NDY0MzI0MjUxMmEyMDk0ODdjYTAyZmU4MTdmZjVlOGVkNDUzNDE3ZWExOTNmNmIyYmUxMjA5YWI0MTBkZjgyOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23E67C73" width="300" height="300" frameborder="0" scrolling="no"></iframe>
                <a class="calendar-mobile">Skontrolujte náš kalendár!</a>
                <br>
                <h3><i class="fa-solid fa-thumbs-up"></i>Blogy a návody</h3><br> <p>Praktické tipy, zaujímavosti zo sveta včiel a informácie pre začínajúcich aj pokročilých včelárov.</p> <br>
                <h3><i class="fa-solid fa-heart"></i> Podporu pre začiatočníkov</h3><br> <p>Ak začínate, radi vám pomôžeme s výberom vhodného vybavenia a poradíme, ako začať.</p><br>
                <h3><i class="fa-solid fa-gift"></i> Súťaže a akcie</h3><br> <p>Sledujte nás na sociálnych sieťach a nezmeškajte žiadnu z našich akcií.</p>
                <br>
                <div class="go-shopping-cont">
                    <h2>Presvedčilo Vás to?</h2><br>
                    <div class="button-container">
                        <a class="shop-but" href = '<?php echo url('shop') ?>'>NAKUPOVAŤ</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-gallery">
            <h2>Galéria</h2>
            <div class="gallery-grid">
                <div class="gallery-item item1">
                    <img src="../images/gallery1.png" alt="Product Image 1">
                </div>
                <div class="gallery-item item2">
                    <img src="../images/gallery2.jpg" alt="Product Image 2">
                </div>
                <div class="gallery-item item3">
                    <img src="../images/gallery3.jpg" alt="Product Image 3">
                </div>
                <div class="gallery-item item4">
                    <img src="../images/gallery4.jpg" alt="Product Image 4">
                </div>
                <div class="gallery-item item5">
                    <img src="../images/gallery5.jpg" alt="Product Image 5">
                </div>
                <div class="gallery-item item6">
                    <img src="../images/gallery6.jpg" alt="Product Image 6">
                </div>
                <div class="gallery-item item7">
                    <img src="../images/gallery7.webp" alt="Product Image 7">
                </div>
                <div class="gallery-item item8">
                    <img src="../images/gallery8.jpg" alt="Product Image 8">
                </div>
                <div class="gallery-item item9">
                    <img src="../images/gallery9.jpg" alt="Product Image 9">
                </div>
                <div class="gallery-item item10">
                    <img src="../images/gallery10.jpg" alt="Product Image 10">
                </div>
            </div>
        </section>
    </main>
@endsection