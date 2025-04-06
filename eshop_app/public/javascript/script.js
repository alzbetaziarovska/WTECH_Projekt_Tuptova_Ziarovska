// javaScript for the e-shop website

//const win = require("global");

// listing through products in the recommended, similar and categories sections
document.addEventListener("DOMContentLoaded", function () {
    const carousels = document.querySelectorAll(".product-carousel");
    const prevBtns = document.querySelectorAll("#prevBtn");
    const nextBtns = document.querySelectorAll("#nextBtn");
    const scrollStep = 320;
    if (carousels.length === 0) return;
    carousels.forEach((carousel, index) => {
        const prevBtn = prevBtns[index];
        const nextBtn = nextBtns[index];
        if (!prevBtn || !nextBtn) return; 
        nextBtn.addEventListener("click", function () {
            carousel.scrollBy({ left: scrollStep });
        });
        prevBtn.addEventListener("click", function () {
            carousel.scrollBy({ left: -scrollStep });
        });
    });
});

// side bar menu for responsive design
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

// opening hours pop up
function checkStoreStatus() {
    if (!document.getElementById('status-icon')) {
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

// checking store status
checkStoreStatus();
setInterval(checkStoreStatus, 60000);


// hide/show pop up
function togglePopup() {
    const popup = document.getElementById("popup");
    popup.style.display = popup.style.display === "block" ? "none" : "block";
}

// hide/show text in the pop up
function toggleText() {
    const textContainer = document.getElementById('text-container');
    const arrow = document.getElementById('toggle-arrow');
    textContainer.classList.toggle('collapsed'); 
    if (textContainer.classList.contains('collapsed')) {
        arrow.style.transform = "rotate(180deg)"; // arow rotation
    } else {
        arrow.style.transform = "rotate(0deg)"; 
    }
}

// listeners for pop up
const arrow = document.getElementById('toggle-arrow');
arrow.addEventListener('click', toggleText);
const openTextLink = document.querySelector('#text-to-open-popup');
const openIcon = document.getElementById('open-icon');
const closedIcon = document.getElementById('closed-icon');
openTextLink.addEventListener('click', togglePopup);
openIcon.addEventListener('click', togglePopup);
closedIcon.addEventListener('click', togglePopup);

document.addEventListener("DOMContentLoaded", function() {
    if (!window.location.href.includes('homepage') || !window.location.href.includes('/')) {
        return;
    }
    // image carousels
    const links = document.querySelectorAll(".place4links .link");
    const images = document.querySelectorAll(".place4img .banner-img");
    let currentIndex = 0;
    let autoSwitchInterval;
    function setActive(index) {
        images.forEach(image => image.style.display = "none");
        const activeImage = document.getElementById(`img-${index + 1}`);
        activeImage.style.display = "block";
        links.forEach(link => link.classList.remove("active"));
        links[index].classList.add("active");
        currentIndex = index;
    }
    // when user changes the image - reseting interval
    links.forEach((link, index) => {
        link.addEventListener("click", function(event) {
            event.preventDefault();
            setActive(index);
            clearInterval(autoSwitchInterval);
            autoSwitchInterval = setInterval(function() {
                let nextIndex = (currentIndex + 1) % links.length;
                setActive(nextIndex);
            }, 8000); 
        });
    });
    autoSwitchInterval = setInterval(function() {
        let nextIndex = (currentIndex + 1) % links.length;
        setActive(nextIndex);
    }, 8000);
    setActive(0); 
});

// Change the active image and link in the product detail
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

// show/hide authentication pop-up for login and registration
function toggleAuthPopup() {
    const popup = document.getElementById('auth-popup');
    popup.style.display = (popup.style.display === 'flex') ? 'none' : 'flex';
}
// switch between login and registration forms
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

// show forms
function toggleForgotPasswordForm() {
    document.getElementById('signin-form').style.display = 'none';
    document.getElementById('register-form').style.display = 'none';
    document.getElementById('forgot-password-form').style.display = 'block';
}

function showSignInForm() {
    document.getElementById('forgot-password-form').style.display = 'none';
    document.getElementById('register-form').style.display = 'none';
    document.getElementById('signin-form').style.display = 'block';
}

window.addEventListener('click', function(event) {
    const popup = document.getElementById('auth-popup');
    if (popup && event.target === popup) {
        popup.style.display = 'none';
    }
});

// close the form after clicking outside of it
window.addEventListener('click', function(event) {
    const popup = document.getElementById('auth-popup');
    const formContainer = document.querySelector('.popup-form');
    if (event.target === popup) {
        popup.style.display = 'none';
    }
});

document.querySelector('.user-icon').addEventListener('click', toggleAuthPopup);

// choosing the quantity of the product in the category page
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

// quantity selector in the product detail page
document.addEventListener("DOMContentLoaded", function () {
    if (!document.getElementById("quantity-detail")) {
        return;
    }
    const quantityInput = document.getElementById("quantity-detail");
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

// for each product shop but it should open addded-to-cart side bar
document.addEventListener("DOMContentLoaded", function() {
    const addToCartButtons = document.querySelectorAll(".shop-but"); // choose all buttons
    const addedToCartPopup = document.querySelector(".added-to-cart");
    const closeCartButton = document.querySelector(".close-btn-cart");
    if (addToCartButtons.length > 0 && addedToCartPopup && closeCartButton) {
        addToCartButtons.forEach(button => {
            button.addEventListener("click", function(event) {
                event.preventDefault(); 
                event.stopPropagation(); 
                addedToCartPopup.style.display = 
                    addedToCartPopup.style.display === "block" ? "none" : "block";
            });
        });
        closeCartButton.addEventListener("click", function() {
            addedToCartPopup.style.display = "none";
        });
        window.addEventListener("click", function(event) {
            if (event.target === addedToCartPopup) {
                addedToCartPopup.style.display = "none";
            }
        });
    } else {
        console.error("Some elements not found: ", {
            addToCartButtons: addToCartButtons.length,
            addedToCartPopup,
            closeCartButton
        });
    }
});

// pagination for the product list in the category page
  document.addEventListener("DOMContentLoaded", function () {
    if (!document.querySelectorAll(".product-shop") || !document.getElementById("prevPage") || !document.getElementById("nextPage")) {
        return;
    }
    const products = document.querySelectorAll(".product-shop");
    const perPage = 6; // per page
    let currentPage = 1;
    function showPage(page) {
        const start = (page - 1) * perPage;
        const end = start + perPage;
        products.forEach((product, index) => {
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

  // show/hide coupon form in the shopping cart
  if (document.querySelector(".toggle-coupon")) {
    document.querySelector(".toggle-coupon").addEventListener("click", function(event) {
        event.preventDefault();
        let couponForm = document.querySelector(".coupon-form");
        if (couponForm.style.display === "none" || couponForm.style.display === "") {
            couponForm.style.display = "block";
        } else {
            couponForm.style.display = "none";
        }
    });
}

// checking whether the form is filled in the shopping cart
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
            window.location.replace('/shopping_cart3');

        }
    })
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

// toggle for filter
document.addEventListener("DOMContentLoaded", function () {
    const filterBtn = document.querySelector(".filter-btn");
    const filter = document.querySelector(".filter-mobile");
    if (filterBtn && filter) {
        filterBtn.addEventListener("click", function () {
            if (filter.style.display === "none" || filter.style.display === "") {
                filter.style.display = "block";
            } else {
                filter.style.display = "none";
            }
        });
        window.addEventListener("resize", function () {
            if (window.innerWidth > 600) { // automatically close
                filter.style.display = "none";
            }
        });
    }
});

// choosing the store for personal pickup in the shopping cart and showing store options
document.addEventListener("DOMContentLoaded", function () {
    if (!document.getElementById("osobne")) {
        return;
    }
    const osobne = document.getElementById("osobne");
    const osobneSelect = document.getElementById("osobne_select");
    const osobneLabel = document.getElementById("osobne_label");

    // function to toggle visibility based on the radio button's checked state
    function toggleSelectVisibility() {
        if (osobne.checked) {
            osobneSelect.style.display = 'block';
            osobneLabel.style.display = 'block';
        } else {
            osobneSelect.style.display = 'none';
            osobneLabel.style.display = 'none';
        }
    }

    toggleSelectVisibility();
    const shippingRadios = document.getElementsByName("shipping");
    shippingRadios.forEach(function(radio) {
        radio.addEventListener('change', toggleSelectVisibility);
    });
});

// inserting card details in the shopping cart
document.addEventListener("DOMContentLoaded", function () {
    if (!document.getElementById("card")) {
        return;
    }
    const card = document.getElementById("card");
    const cardNumberLabel = document.getElementById("card-number-label");
    const cardNumber = document.getElementById("card-number");
    const cardExpiryLabel = document.getElementById("expiry-date-label");
    const cardExpiry = document.getElementById("expiry-date");
    const CVVLabel = document.getElementById("cvv-label");
    const CVV = document.getElementById("cvv");
    // function to toggle visibility based on the radio button's checked state
    function toggleSelectVisibility() {
        if (card.checked) {
            cardNumberLabel.style.display = 'block';
            cardNumber.style.display = 'block';
            cardExpiryLabel.style.display = 'block';
            cardExpiry.style.display = 'block';
            CVVLabel.style.display = 'block';
            CVV.style.display = 'block';
        } else {
            cardNumberLabel.style.display = 'none';
            cardNumber.style.display = 'none';
            cardExpiryLabel.style.display = 'none';
            cardExpiry.style.display = 'none';
            CVVLabel.style.display = 'none';
            CVV.style.display = 'none';
        }
    }
    toggleSelectVisibility();
    const paymentRadios = document.getElementsByName("payment");
    paymentRadios.forEach(function(radio) {
        radio.addEventListener('change', toggleSelectVisibility);
    });
});

// show less or more of the product description in the product detail page
if (document.getElementById("toggle-btn")) {
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

    // show less or more for the history of orders in the profile page
    document.getElementById("toggle-btn").addEventListener("click", function () {
        if (!document.getElementById("orders")) {
            return;
        }
        var desc = document.getElementById("orders");
        if (desc.classList.contains("collapsed-orders")) {
            desc.classList.remove("collapsed-orders");
            this.textContent = "Menej";
        } else {
            desc.classList.add("collapsed-orders");
            this.textContent = "Viac...";
        }
    });
}

// make the chosen variant of the product active in the product detail page
document.querySelectorAll(".variant-img").forEach((img) => {
    img.addEventListener("click", function () {
        document.querySelectorAll(".variant-img").forEach((el) => el.classList.remove("active"));
        this.classList.add("active");
    });
});

// show/hide the edit product form in the admin page after inserting product ID
if (document.querySelector(".edit-product-form-id")) {
document.querySelector(".edit-product-form-id").addEventListener("submit", function(event) {
    event.preventDefault();
    document.querySelector(".edit-product-form").style.display = "flex";
});
}

// reset the form after clicking on the add product button in the admin page
if (document.querySelector(".add-product-form")) {
    document.querySelector(".add-product-form").addEventListener("submit", function(event) {
        event.preventDefault();
        document.getElementById("add-product-success").style.display = "flex";
        document.querySelector(".add-product-form").reset();
    });
}

// reset the form after clicking on the delete product button in the admin page
if (document.querySelector(".delete-product-form")) {
    document.querySelector(".delete-product-form").addEventListener("submit", function(event) {
        event.preventDefault();
        document.getElementById("delete-product-success").style.display = "flex";
        document.querySelector(".delete-product-form").reset();
    });
 }

 // reset the form after clicking on the edit product button in the admin page and hide the form
 if (document.querySelector(".edit-product-form")) {
    document.querySelector(".edit-product-form").addEventListener("submit", function(event) {
        event.preventDefault();
        document.getElementById("edit-product-success").style.display = "flex";
        document.querySelector(".edit-product-form-id").reset();
        document.querySelector(".edit-product-form").style.display = "none";
        
    });
 }

 // every product needs at least 2 imgs
 document.getElementById("add-submit-btn").addEventListener("click", function (event) {
    const fileInput = document.getElementById("product-image-add");
    const errorMessage = document.getElementById("error-message");
    if (fileInput.files.length < 2) {
        event.preventDefault();
        errorMessage.style.display = "block";
    } else {
        errorMessage.style.display = "none";
    }
});

// references:
// https://www.youtube.com/watch?v=FazgJVnrVuI
// https://www.youtube.com/watch?v=tVH4E0CQrK4
// https://www.youtube.com/watch?v=MkvHPOT4RS8
// https://codepen.io/colorlib/pen/rxddKy
// https://youtube.com/playlist?list=PLpwngcHZlPae68z_mLFNfbJFIJVJ_Zcx2&si=BR5fwZhvWhMRD5ta
// https://www.youtube.com/watch?v=i_8NQuEAOmg