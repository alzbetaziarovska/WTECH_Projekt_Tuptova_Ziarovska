// skrolovanie cez < > buttons v odporucanych produktov
document.addEventListener("DOMContentLoaded", function () {
    const carousels = document.querySelectorAll(".product-carousel");
    const prevBtns = document.querySelectorAll("#prevBtn");
    const nextBtns = document.querySelectorAll("#nextBtn");
    const scrollStep = 320;

    if (carousels.length === 0) return;

    carousels.forEach((carousel, index) => {
        const prevBtn = prevBtns[index];
        const nextBtn = nextBtns[index];

        if (!prevBtn || !nextBtn) return; // Avoid errors if buttons are missing

        nextBtn.addEventListener("click", function () {
            carousel.scrollBy({ left: scrollStep });
        });

        prevBtn.addEventListener("click", function () {
            carousel.scrollBy({ left: -scrollStep });
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const sidebar = document.querySelector(".sidebar");
    const closeBtn = document.querySelector(".close-btn-side");

    menuToggle.addEventListener("click", function () {
        sidebar.classList.add("sidebar-open");
        sidebar.style.left = "0";
    });

    closeBtn.addEventListener("click", function () {
        sidebar.classList.remove("sidebar-open");
        sidebar.style.left = "-250px";
    });

    document.addEventListener("click", function (event) {
        if (!sidebar.contains(event.target) && !menuToggle.contains(event.target)) {
            sidebar.classList.remove("sidebar-open");
            sidebar.style.left = "-250px";
        }
    });
});




function checkStoreStatus() {
    if(!document.getElementById('status-icon')) {
        return;
    }
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
    if (!window.location.href.includes("homepage.html")) {
        return;
    }
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
    if (!document.querySelector(".place4links-product")) {
        return;
    }
    const links = document.querySelectorAll(".place4links-product .link-shop");
    const images = document.querySelectorAll(".place4img-product .banner-img");
    const productBanner = document.querySelector(".product-banner");

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
    if (!document.querySelectorAll(".product-shop")) {
        return;
    }
    const products = document.querySelectorAll(".product-shop");

    products.forEach(product => {
        const quantityInput = product.querySelector(".quantity-selector input");
        const decreaseBtn = product.querySelector(".quantity-selector .quantity-btn:first-child");
        const increaseBtn = product.querySelector(".quantity-selector .quantity-btn:last-child");

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
});

document.addEventListener("DOMContentLoaded", function () {
    if (!document.getElementById("quantity")) {
        return;
    }
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

if (document.getElementById('calendar')) {
    $(document).ready(function() {
        $('#calendar').fullCalendar({
        events: [
            {
            title: 'Sale Event',
            start: '2025-03-20',
            description: 'Special sale event for the weekend.',
            url: '#',  // Add link to the event page
            color: 'red'
            },
            {
            title: 'New Product Launch',
            start: '2025-03-25',
            description: 'Launch of a new product in our store.',
            url: '#',
            color: 'green'
            }
        ]
        });
    });
}

  document.addEventListener("DOMContentLoaded", function () {
    if (!document.querySelectorAll(".product-shop") || !document.getElementById("prevPage") || !document.getElementById("nextPage")) {
        return;
    }
    const products = document.querySelectorAll(".product-shop");
    const perPage = 4; // Change this to set how many items per page
    let currentPage = 1;
    
    function showPage(page) {
        const start = (page - 1) * perPage;
        const end = start + perPage;
        
        products.forEach((product, index) => {
            /*product.style.visibility = (index >= start && index < end) ? "visible" : "hidden";
            product.style.height = (index >= start && index < end) ? "auto" : "0px";*/
            product.style.display = (index >= start && index < end) ? "flex" : "none";
        });

        document.getElementById("pageIndicator").textContent = `Stránka ${currentPage}/${Math.ceil(products.length / perPage)}`; // zobrazenie stranky
    }

    document.getElementById("prevPage").addEventListener("click", function () {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
        }
    });

    document.getElementById("nextPage").addEventListener("click", function () {
        if (currentPage < Math.ceil(products.length / perPage)) {
            currentPage++;
            showPage(currentPage);
        }
    });

    showPage(currentPage);

  });

  if (document.querySelector(".toggle-coupon")) {
    document.querySelector(".toggle-coupon").addEventListener("click", function(event) {
        event.preventDefault(); // Zabraňuje presmerovaniu

        let couponForm = document.querySelector(".coupon-form");

        if (couponForm.style.display === "none" || couponForm.style.display === "") {
            couponForm.style.display = "block";
        } else {
            couponForm.style.display = "none";
        }
    });
}

if (document.getElementById("submit-btn-sc3")) {
    document.getElementById("submit-btn-sc3").addEventListener("click", function () {
        const form = document.getElementById("info-form");
        if (!form.checkValidity()) {
            alert("Prosím vyplňte všetky povinné polia!");
        } else {
            form.submit();
        }
    });
}

document.addEventListener("DOMContentLoaded", function () {
    if (!document.getElementById("osobne")) {
        return;
    }
    const osobne = document.getElementById("osobne");
    const osobneSelect = document.getElementById("osobne_select");
    const osobneLabel = document.getElementById("osobne_label");

    // Function to toggle visibility based on the radio button's checked state
    function toggleSelectVisibility() {

        if (osobne.checked) {
            osobneSelect.style.display = 'block';
            osobneLabel.style.display = 'block';
        } else {
            osobneSelect.style.display = 'none';
            osobneLabel.style.display = 'none';
        }
    }

    // Initialize visibility based on current state
    toggleSelectVisibility();

    // Listen for change event on the shipping group
    const shippingRadios = document.getElementsByName("shipping");
    shippingRadios.forEach(function(radio) {
        radio.addEventListener('change', toggleSelectVisibility);
    });
});

if (document.getElementById("submit-btn-sc2")) {
    document.getElementById("submit-btn-sc2").addEventListener("click", function () {
        const shippingSelected = document.querySelector('input[name="shipping"]:checked');
        const paymentSelected = document.querySelector('input[name="payment"]:checked');

        if (!shippingSelected || !paymentSelected) {
            alert("Prosím, vyberte spôsob dopravy aj spôsob platby!");
        } 
        else if (shippingSelected.value === "osobne" && !document.getElementById("osobne_select").value) {
            alert("Prosím, vyberte predajňu!");
        }
        else {
            window.location.href = "shopping_cart3.html";
        }
    })
}

document.getElementById("toggle-btn").addEventListener("click", function () {
    if (!document.getElementById("product_description")) {
        return;
    }
    var desc = document.getElementById("product_description");
    if (desc.classList.contains("collapsed")) {
        desc.classList.remove("collapsed");
        this.textContent = "Menej";
    } else {
        desc.classList.add("collapsed");
        this.textContent = "Viac...";
    }
});

document.querySelectorAll(".variant-img").forEach((img) => {
    if(!document.querySelectorAll(".variant-img")) {
        return;
    }
    img.addEventListener("click", function () {
        // Remove 'active' from all variant images
        document.querySelectorAll(".variant-img").forEach((el) => el.classList.remove("active"));
        
        // Add 'active' class to the clicked image
        this.classList.add("active");
    });
});