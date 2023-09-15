/* Theme toggle dark & light based on the preferences of the user */

const storageKey = 'theme-preference';
const themeToggle = document.querySelector('#theme-toggle');

function toggleTheme() {
    theme.value = theme.value === 'light' ? 'dark' : 'light';
    setPreference();
}

function getColorPreference() {
    if (localStorage.getItem(storageKey)) {
        return localStorage.getItem(storageKey);
    } else {
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }
}

function setPreference() {
    localStorage.setItem(storageKey, theme.value);
    reflectPreference();
}

function reflectPreference() {
    document.documentElement.setAttribute('data-theme', theme.value);
    themeToggle?.setAttribute('aria-label', theme.value);
}

const theme = { value: getColorPreference() };

// Chargement initial de la préférence de thème
reflectPreference();

// Gestionnaire d'événement pour le changement de thème au clic
themeToggle.addEventListener('click', toggleTheme);

// Écouteur pour les changements de préférence de couleur du système
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', ({ matches: isDark }) => {
    theme.value = isDark ? 'dark' : 'light';
    setPreference();
});

// Chargement initial de la page
window.onload = () => {reflectPreference()};

/*console.log(theme.value);*/