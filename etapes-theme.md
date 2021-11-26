## Recupération répo WP

- Cloner le repo
- Créer une BDD depuis adminer
- Dans un terminal et dans le dossier wp (ATTENTION DANGER, A FAIER AU BON ENDROIT)

```sh
sudo chgrp -R www-data .
sudo find . -type d -exec chmod 775 {} +
sudo find . -type f -exec chmod 664 {} +

```


- Depuis localhost nous allons dans le repo tout fraichement cloné
- clic sur c'est parti
- Renseigner les infos de connexion a la BDD puis clic sur installer
  
  le ```wp-config``` est généré par wordpress

- on edite le fichier wp-config et on change la ligne
  
  ```php
  define( 'WP_DEBUG', false);
  ```
  en

  ```php
  define( 'WP_DEBUG', true);
  define( 'FS_METHOD', 'direct'); 
  ```


- FIN



## CREATION D'UN THEME WP

- Créer un dossier onews dans le dossier wp-content/themes

-Créer les deux fichiers obligatoires : 
  - index.php
  - style.css
  - optionel : screenshot.png

- dans le fichier style.css, on donne les infos générales du theme

- Récuérer l'intégration HTML/CSS onews S01E06, puis on a collé le contenu de index.html dans index.php
  
- On a fabriqué un dossier assets dans lequel nous avons deux dossiers :
  - css : qui contient les deux css nécessaires au bon fonctionement de l'intégration
  - images : ressources images de l'integration 

- On changé les liens des link CSS 
remplacer
 ```../css/leFicherCSS.css``` 
par
```wp-content/themes/onews/assetes/css/leficherCSS.css```

- index.php -> découper notre header puis placé dans header.php
- Puis dans index.php :
  ```
  get_header();
  ```
- dans le header.php trois nouvelles fonctions : 
 
 ```php
 language_attributes();
 bloginfo('charset')
 wp_head();
```
- On a découpé le footer dans footer.php
- Puis dans footer.php
```php
wp_footer();
```

https://codex.wordpress.org/Function_Reference

- Dès lors, le manu admin apparait dans la partie supperieure de notre theme

- Puis fabriquer le fichier function.php

  - On a vu la notion de Hooks (faire le parallèle avec les events JS) https://adambrown.info/p/wp_hooks/hook

  - on a fabriqué une fonction onewsz_initialize et qui va etre 
executé uns fois qu'il aura terminé de charger les infos essentielles du thème

- Puis revenir sur index.php, et fabrication de la BOUCLE WORDPRESS

```php
<?php
if(have_posts()){

        while(have_posts()):
          the_post();
?>

ARTICLE EN HTML

<?php
  endwhile;
}
?>


```


- the_title() -> Correspond a echo "le titre"
- get_the_title() -> valeur titre sans echo !
  