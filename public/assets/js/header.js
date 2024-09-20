var navbar = document.getElementById("navbar");

window.addEventListener("scroll", function() {
    if (window.scrollY > 0) {
        navbar.classList.add("navbar-shadow");
    } else {
        navbar.classList.remove("navbar-shadow");
    }
});