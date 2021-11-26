<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Styles "alternatifs" mais avec le même code HTML ! -->
    <!-- <link rel="stylesheet" href="../css/style-alt.css"> -->


    <?php
    // on demande a wp de génerer les balsies html d'en tete par delaut
    // le code généra va aider wp a faire fonctionner d'autre mecanisme 
    // que l'on va voir par la suite (CSS, micro data SEO, etc)
    wp_head();

    ?>



</head>
<body id="home-page">