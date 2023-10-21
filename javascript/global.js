function showResponsiveMenu() {
    const menu = document.getElementById("topnav_responsive_menu");
    const icon = document.getElementById("topnav_hamburger_icon");
    const root = document.getElementById("root");
    if (menu.className === "") {
        menu.className = "open";
        icon.className = "open";
        root.style.overflowY = "hidden";
    } else {
        menu.className = "";
        icon.className = "";
        root.style.overflowY = "";
    }
}

document.getElementById("topnav_hamburger_icon").addEventListener("click", (event) => {
    showResponsiveMenu();
});

//TODO : scroll vers le haut montre la navbar, vers le bas, la cache

let prevScrollPos = window.pageYOffset;

window.addEventListener('scroll', function() {
    // current scroll position
    const currentScrollPos = window.pageYOffset;

    if (prevScrollPos > currentScrollPos) {
        // user has scrolled up
        document.querySelector('#topnav').classList.add('show');
    } else {
        // user has scrolled down
        document.querySelector('#topnav').classList.remove('show');
    }

    // update previous scroll position
    prevScrollPos = currentScrollPos;
});