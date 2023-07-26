<?php

// Démarrer le système de sessions pour pouvoir afficher des messages de feedback venant des formulaires.
use Hepl\ContactForm;

if (session_status() === PHP_SESSION_NONE) session_start();

// Charger les fichiers des fonctionnalités extraites dans des classes.
require_once(__DIR__ . '/controllers/ContactForm.php');

// Disable Wordpress' default Gutenberg Editor:
add_filter('use_block_editor_for_post', '__return_false', 10);

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

// Activer les images "thumbnail" sur nos posts
add_theme_support('post-thumbnails');
add_image_size('img-thumbnail', 400, 400, true);

// Enregistrer un custom post type :
function hepl_register_custom_post_types(): void
{
    register_post_type('message', [
        'label' => 'Message de contact',
        'description' => 'Messages envoyés via le formulaire de contact.',
        'public' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-email', // https://developer.wordpress.org/resource/dashicons/#pets,
        'supports' => ['title', 'editor'],
    ]);
}

add_action('init', 'hepl_register_custom_post_types');

// Charger les traductions existantes
load_theme_textdomain('hepl', get_template_directory() . '/locales');

// Ajouter le système personnalisé de remplacement des variables dans les phrases traduisibles
// ex: $replacements = ['name' => 'Jean-Paul']
function __hepl(string $translation, array $replacements = []): array|string|null
{
// 1. Récupérer la traduction de la phrase présente dans $translation
    $base = __($translation, 'hepl');

// 2. Remplacer toutes les occurrences des variables par leur valeur
    foreach ($replacements as $key => $value) {
        $variable = ':' . $key;
        $base = str_replace($variable, $value, $base);
    }

// 3. Retourner la traduction complète.
    return $base;
}

function hepl_execute_contact_form(): void
{
    $config = [
        'nonce_field' => 'contact_nonce',
        'nonce_identifier' => 'hepl_contact_form',
    ];

    (new ContactForm($config, $_POST))
        ->sanitize([
            'nom' => 'text_field',
            'prénom' => 'text_field',
            'email' => 'text_field',
            'téléphone' => 'text_field',
            'message' => 'textarea_field',
        ])
        ->validate([
            'nom' => ['required'],
            'prénom' => ['required'],
            'email' => ['required', 'email'],
            'téléphone' => ['required'],
            'message' => ['required'],
        ])
        ->save(
            title: fn($data) => $data['nom'] . ' ' . $data['prénom'] . ' <' . $data['email'] . '>',
            content: fn($data) => 'Prénom: ' . $data['nom'] . PHP_EOL . 'Nom: ' . $data['prénom'] . PHP_EOL . 'Email: ' . $data['email'] . PHP_EOL . 'Numéro de téléphone: ' . $data['téléphone'] . PHP_EOL . 'Message:' . PHP_EOL . $data['message'],
        )
        ->send(
            title: fn($data) => 'Nouveau message de ' . $data['nom'] . ' ' . $data['prénom'],
            content: fn($data) => 'Prénom: ' . $data['nom'] . PHP_EOL . 'Nom: ' . $data['prénom'] . PHP_EOL . 'Email: ' . $data['email'] . PHP_EOL . 'Numéro de téléphone: ' . $data['téléphone'] . PHP_EOL . 'Message:' . PHP_EOL . $data['message'],
        )
        ->feedback();
}

add_action('admin_post_nopriv_hepl_contact_form', 'hepl_execute_contact_form');
add_action('admin_post_hepl_contact_form', 'hepl_execute_contact_form');

// Travailler avec la session de PHP
function hepl_session_flash(string $key, mixed $value): void
{
    if (!isset($_SESSION['hepl_flash'])) {
        $_SESSION['hepl_flash'] = [];
    }

    $_SESSION['hepl_flash'][$key] = $value;
}

function hepl_session_get(string $key)
{
    if (isset($_SESSION['hepl_flash']) && array_key_exists($key, $_SESSION['hepl_flash'])) {
        // 1. Récupérer la donnée qui a été flash.
        $value = $_SESSION['hepl_flash'][$key];
        // 2. Supprimer la donnée de la session.
        unset($_SESSION['hepl_flash'][$key]);
        // 3. Retourner la donnée récupérée.
        return $value;
    }

    // La donnée n'existait pas dans la session flash, on retourne null.
    return null;
}


// Ajout d'image sous format SVG et WEBP
add_filter('upload_mimes', 'capitaine_mime_types');
add_filter('wp_check_filetype_and_ext', 'capitaine_file_types', 10, 4);

// Autoriser l'import des fichiers du type SVG et WEBP
function capitaine_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

// Contrôle de l'import d'un WEBP
function capitaine_file_types($types, $file, $filename, $mimes)
{
    if (str_contains($filename, '.webp')) {
        $types['ext'] = 'webp';
        $types['type'] = 'image/webp';
    }
    return $types;
}

/* Attribut SRCSET */
function add_srcset_to_images($content)
{
    // Vérifiez si le contenu est vide
    if (empty($content)) {
        return $content;
    }

    // Utilisez une expression régulière pour trouver toutes les balises <img>
    $pattern = '/<img(.*?)src=[\'"](.*?)[\'"](.*?)>/i';
    $replacement = '<img$1src="$2"$3 srcset="$2" $3>';
    return preg_replace($pattern, $replacement, $content);
}

add_filter('the_content', 'add_srcset_to_images');
add_filter('widget_text_content', 'add_srcset_to_images');

function dd($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}