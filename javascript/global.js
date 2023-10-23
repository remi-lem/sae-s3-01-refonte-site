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


let dernierScroll;
window.addEventListener('scroll',function(){
    const scrollVersHaut = document.documentElement.scrollTop;

    if(scrollVersHaut > dernierScroll){
        if (!(document.getElementById("topnav_hamburger_icon").classList.contains("open"))) {
            document.querySelector('#topnav').style.top = '-15vh';
        }
    }
    else{
        document.querySelector('#topnav').style.top='0';
    }
    dernierScroll = scrollVersHaut; //New Position Stored
});