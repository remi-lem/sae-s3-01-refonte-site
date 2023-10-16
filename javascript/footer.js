const themeToggle = document.getElementById('theme-toggle');
let isDarkMode = false;
function toggleTheme() {
    const body = document.body;

    if (isDarkMode) {
        body.classList.remove('dark-mode');
    }
    else {
        body.classList.add('dark-mode');
    }
    isDarkMode = !isDarkMode;
}

themeToggle.addEventListener('click', toggleTheme);
