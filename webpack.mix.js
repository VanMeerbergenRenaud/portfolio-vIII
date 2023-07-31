/*----- Webpack compiler ------ */
const mix = require('laravel-mix');

/* SCSS */
mix.sass('wp-content/themes/portfolio/ressources/sass/site.scss', 'wp-content/themes/portfolio/public/css');
mix.sass('wp-content/themes/portfolio/ressources/sass/pages/projets.scss', 'wp-content/themes/portfolio/public/css/projets.css');
mix.sass('wp-content/themes/portfolio/ressources/sass/pages/projet.scss', 'wp-content/themes/portfolio/public/css/projet.css');
mix.sass('wp-content/themes/portfolio/ressources/sass/pages/contact.scss', 'wp-content/themes/portfolio/public/css/contact.css');
mix.sass('wp-content/themes/portfolio/ressources/sass/pages/mentions-legales/site.scss', 'wp-content/themes/portfolio/public/css/mentions-legales.css');
mix.sass('wp-content/themes/portfolio/ressources/sass/pages/404/site.scss', 'wp-content/themes/portfolio/public/css/404.css');

/* JS */
mix.js('wp-content/themes/portfolio/ressources/js/site.js', 'wp-content/themes/portfolio/public/js');
mix.js('wp-content/themes/portfolio/ressources/js/form.js', 'wp-content/themes/portfolio/public/js/form.js');
mix.js('wp-content/themes/portfolio/ressources/js/projets.js', 'wp-content/themes/portfolio/public/js/projets.js');