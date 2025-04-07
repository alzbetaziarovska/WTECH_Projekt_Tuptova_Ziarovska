<!-- OPENING HOURS-->
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