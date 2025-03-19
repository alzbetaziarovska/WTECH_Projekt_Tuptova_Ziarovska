// skrolovanie cez < > buttons v odporucanych produktov
document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".product-carousel");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    let scrollStep = 320;

    nextBtn.addEventListener("click", function () {
        carousel.scrollBy({ left: scrollStep});
    });

    prevBtn.addEventListener("click", function () {
        carousel.scrollBy({ left: -scrollStep});
    });
});

function checkStoreStatus() {
    const now = new Date();
    const now_hour = now.getHours();
    const today = now.getDay(); // 0 nedela, 6 sobota
    const openHour = 9;
    const closeHour = 17.5;
    const statusIcon = document.getElementById('status-icon');
    const openIcon = document.getElementById('open-icon');
    const closedIcon = document.getElementById('closed-icon');
    const openText = document.getElementById('open-text');
    const closedText = document.getElementById('closed-text');

    if (today === 6 || today === 0 || now_hour < openHour || now_hour >= closeHour) {
        statusIcon.style.backgroundColor = "#e45937"; // closed = red
        openIcon.style.display = "none";
        closedIcon.style.display = "inline";
        openText.style.display = "none";
        closedText.style.display = "inline";
    } else {
        statusIcon.style.backgroundColor = "#36a12a"; // open =  green
        openIcon.style.display = "inline";
        closedIcon.style.display = "none";
        openText.style.display = "inline";
        closedText.style.display = "none";
    }
}

checkStoreStatus();
// periodicky updejtuj v miuntovych intervaloch
setInterval(checkStoreStatus, 60000);


// funkcia na zobrazenie/skrytie popupu
function togglePopup() {
    const popup = document.getElementById("popup");
    popup.style.display = popup.style.display === "block" ? "none" : "block";
}


// funkcia na zbalenie/rozbalenie textu
function toggleText() {
    const textContainer = document.getElementById('text-container');
    const arrow = document.getElementById('toggle-arrow');
    textContainer.classList.toggle('collapsed'); 
    if (textContainer.classList.contains('collapsed')) {
        arrow.style.transform = "rotate(180deg)"; // rotacia sipky zabalit odbalit
    } else {
        arrow.style.transform = "rotate(0deg)"; 
    }
}

// event listener pre šípku (pre zbalenie textu)
const arrow = document.getElementById('toggle-arrow');
arrow.addEventListener('click', toggleText);

const openTextLink = document.querySelector('#text-to-open-popup');
const openIcon = document.getElementById('open-icon');
const closedIcon = document.getElementById('closed-icon');
// event listeners pre text "Otváracie hodiny"
openTextLink.addEventListener('click', togglePopup);
// event listeners pre ikony
openIcon.addEventListener('click', togglePopup);
closedIcon.addEventListener('click', togglePopup);



document.addEventListener("DOMContentLoaded", function() {
    // všetky odkazy a obrazky
    const links = document.querySelectorAll(".place4links .link");
    const images = document.querySelectorAll(".place4img .banner-img");
    let currentIndex = 0; // na aktualny index obrazka
    let autoSwitchInterval; // interva timer

    // zmena aktivneho odkazu a obrazku
    function setActive(index) {
        images.forEach(image => image.style.display = "none"); // skry obrazky 
        // zobraz vybrany obrazok
        const activeImage = document.getElementById(`img-${index + 1}`);
        activeImage.style.display = "block";
        // odstran titul aktivny z predchadzajuceho
        links.forEach(link => link.classList.remove("active"));
        // pridaj titul aktivny aktualnemu
        links[index].classList.add("active");
        currentIndex = index; // uloz index, dalsi aktivny +1 alebo co si user vyberie
    }

    // ked klikne user sam
    links.forEach((link, index) => {
        link.addEventListener("click", function(event) {
            event.preventDefault();
            setActive(index);
            // musi nastavit novy na 8 sekund lebo bolo prepnute
            clearInterval(autoSwitchInterval); // zrus predchadzajuci interval
            autoSwitchInterval = setInterval(function() {
                let nextIndex = (currentIndex + 1) % links.length;
                setActive(nextIndex);
            }, 8000); 
        });
    });
    // prepni kazdych 8 sekund 
    autoSwitchInterval = setInterval(function() {
        let nextIndex = (currentIndex + 1) % links.length;
        setActive(nextIndex);
    }, 8000);

    setActive(0); // defalut zacni na prvy obrazok
});

// zmena obrazkov a v detaile produktu
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".place4links-product .link-shop");
    const images = document.querySelectorAll(".place4img-product .banner-img");
    const productBanner = document.querySelector(".product-banner");

    if (!links.length || !images.length || !productBanner) {
        console.error("Error: One or more elements not found in the DOM!");
        return;
    }

    let currentIndex = 0;
    let autoSwitchInterval;

    function setActive(index) {
        images.forEach(image => image.style.display = "none");

        const activeImage = document.getElementById(`img-${index + 1}`);
        if (activeImage) {
            activeImage.style.display = "block";

            console.log("Active Image:", activeImage.src);

            productBanner.style.backgroundImage = "none"; // Force repaint
            setTimeout(() => {
                productBanner.style.backgroundImage = `url('${activeImage.src}')`;
                productBanner.style.backgroundSize = 0;
                productBanner.style.backgroundPosition = "center";
            }, 50);
        }

        currentIndex = index;
    }

    links.forEach((link, index) => {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            setActive(index);

            clearInterval(autoSwitchInterval);
            autoSwitchInterval = setInterval(function () {
                let nextIndex = (currentIndex + 1) % links.length;
                setActive(nextIndex);
            }, 8000);
        });
    });

    autoSwitchInterval = setInterval(function () {
        let nextIndex = (currentIndex + 1) % links.length;
        setActive(nextIndex);
    }, 8000);

    setActive(0);
});

// zobrazenie alebo skrytie pop-up okna celeho
function toggleAuthPopup() {
    const popup = document.getElementById('auth-popup');
    popup.style.display = (popup.style.display === 'flex') ? 'none' : 'flex';
}

// prepnutie medzi prihlasovacím a registračným formulárom
function toggleRegisterForm() {
    const signinForm = document.getElementById('signin-form');
    const registerForm = document.getElementById('register-form');

    if (signinForm.style.display === 'none') {
        signinForm.style.display = 'block';
        registerForm.style.display = 'none';
    } else {
        signinForm.style.display = 'none';
        registerForm.style.display = 'block';
    }
}

window.addEventListener('click', function(event) {
    const popup = document.getElementById('auth-popup');
    if (popup && event.target === popup) {
        popup.style.display = 'none';
    }
});
// zatvorenie popupu pri kliknutí mimo formulára
window.addEventListener('click', function(event) {
    const popup = document.getElementById('auth-popup');
    const formContainer = document.querySelector('.popup-form');
    if (event.target === popup) {
        popup.style.display = 'none';
    }
});


document.querySelector('.user-icon').addEventListener('click', toggleAuthPopup);

document.addEventListener("DOMContentLoaded", function () {
    const quantityInput = document.getElementById("quantity");
    const decreaseBtn = document.getElementById("decrease");
    const increaseBtn = document.getElementById("increase");

    decreaseBtn.addEventListener("click", function () {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    increaseBtn.addEventListener("click", function () {
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });
});


