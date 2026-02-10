document.addEventListener('DOMContentLoaded', function () {
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeIcon = themeToggleBtn.querySelector('i');
    const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');

    // Check for saved user preference, if any, on load of the website
    const currentTheme = localStorage.getItem('theme');

    if (currentTheme == 'dark') {
        document.body.setAttribute('data-theme', 'dark');
        themeIcon.classList.remove('bi-moon-fill');
        themeIcon.classList.add('bi-sun-fill');
    } else if (currentTheme == 'light') {
        document.body.setAttribute('data-theme', 'light');
        themeIcon.classList.remove('bi-sun-fill');
        themeIcon.classList.add('bi-moon-fill');
    } else if (prefersDarkScheme.matches) {
        // Fallback to system preference if no local storage
        document.body.setAttribute('data-theme', 'dark');
        themeIcon.classList.remove('bi-moon-fill');
        themeIcon.classList.add('bi-sun-fill');
    }

    function updateLogo(theme) {
        const logo = document.querySelector('.navbar-brand img');
        if (theme === 'dark') {
            logo.src = 'assets/img/logo_dark.png';
        } else {
            logo.src = 'assets/img/logo.png';
        }
    }

    // Initial check
    if (document.body.getAttribute('data-theme') === 'dark') {
        updateLogo('dark');
    }

    themeToggleBtn.addEventListener('click', function () {
        let theme = document.body.getAttribute('data-theme');

        if (theme === 'dark') {
            document.body.setAttribute('data-theme', 'light');
            localStorage.setItem('theme', 'light');
            themeIcon.classList.remove('bi-sun-fill');
            themeIcon.classList.add('bi-moon-fill');
            updateLogo('light');
        } else {
            document.body.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
            themeIcon.classList.remove('bi-moon-fill');
            themeIcon.classList.add('bi-sun-fill');
            updateLogo('dark');
        }
    });
});
