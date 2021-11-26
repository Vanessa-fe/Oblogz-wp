<?php
// lorsqu'il est présent ce fichier est chargé par wp automatiquement



// je peux donner le nom que je veux a cette fonction
function onews_initialize(){
  // nous disons a wp de gérer la balise titre de nos page
  add_theme_support('title-tag');

  //! grace a la fonction add_theme_support nous pouvons dire à wp
  // de gérer telle ou telle fonctionnalitée pour notre theme
  add_theme_support('post-thumbnails');
}


function onews_load_asset(){
  wp_enqueue_style(
    'themeCss', // on donne un nom a notre css
    get_theme_file_uri('/assets/css/style.css'), // on demande a wp
    // de calculer l'url d'un fichier appartenant a notre theme
    ['resetCss'] // Tableau listant les css devant etre chargés avant
  );

  wp_enqueue_style(
    'resetCss', // on donne un nom a notre css
    get_theme_file_uri('/assets/css/reset.css') // on demande a wp
    // de calculer l'url d'un fichier appartenant a notre theme
  );

}

//Nous demandons a wp d'appeler la fonction d'initialisation 
// de notre theme, uns fois qu'il aura terminé de charger les infos essentielles de ce dernier
add_action('after_setup_theme', 'onews_initialize');

add_action('wp_enqueue_scripts', 'onews_load_asset');
