# [![WordPress](wp-admin/images/wordpress-logo.png)](https://wordpress.org/)

Plateforme de publication sémantique personnelle

## Préambule

Bienvenue. WordPress est un projet très spécial pour moi. Chaque développeur et contributeur ajoute quelque chose d’unique à ce projet, et ensemble nous créons quelque chose de beau, et dont je suis fier de faire partie. Nous avons passé des milliers d’heures sur le développement de WordPress, et nous nous attachons tous les jours à vous faciliter la vie. Merci à vous d’en faire une partie de votre monde.

— Matt Mullenweg

## Installation : la fameuse installation en 5 minutes

1.  Décompressez l’archive dans un dossier vide de votre ordinateur, puis téléversez tous ces fichiers ;
2.  Envoyez le tout sur votre hébergement via un logiciel client FTP ;
3.  Ouvrez le fichier <span class="file">[/wp-admin/install.php](wp-admin/install.php)</span> dans votre navigateur. Celui-ci vous guidera dans la création du fichier `wp-config.php`, qui contient les détails de connexion à votre base de données ;
    1.  Si cela ne fonctionne pas, ne vous inquiétez pas : certains hébergeurs n’autorisent pas la création de fichier. Ouvrez le fichier `wp-config.php` avec un éditeur de texte, et saisissez-y directement les détails de connexion à votre base de données ;
    2.  Enregistrez le fichier sous le nom `wp-config.php` et téléversez-le ;
    3.  Ouvrez le fichier <span class="file">[wp-admin/install.php](wp-admin/install.php)</span> dans votre navigateur ;
4.  Une fois le fichier de configuration correctement rempli, l’installateur met en place les tables nécessaires à votre blog. Si vous obtenez une erreur, vérifiez le contenu du fichier <span class="file">`wp-config.php`</span>, et réessayez. Si cela échoue encore une fois, rendez-vous sur les [forums d’entraide](http://www.wordpress-fr.net/support/) et soyez le plus précis possible dans vos explications. Si tout se passe bien, passez à l’étape suivante ;
5.  **Si vous n’avez pas précisé de mot de passe, notez bien celui qui vous est donné.** Si vous n’avez pas précisé d’identifiant utilisateur, ce sera `admin` ;
6.  Une fois l’installation terminée, le script d’installation vous renverra vers la [page de connexion](wp-login.php). Connectez-vous avec l’identifiant et le mot de passe précisés (ou générés) durant l’installation. Si le mot de passe a été généré pour vous, cliquez sur « Profil »  pour le modifier.

## Mise à jour

### À l’aide de l’outil de mise à jour automatique

1.  Ouvrez la page <span class="file">[wp-admin/update-core.php](wp-admin/update-core.php)</span> dans votre navigateur, et suivez les instructions.
2.  Vous pensiez qu’il y aurait d’autres étapes ? C’est tout !

### Mise à jour manuelle :

1.  Avant tout, assurez-vous bien de disposer de copies de sauvegarde de tous les fichiers que vous avez modifiés, par exemple `index.php`.
2.  Effacez vos anciens fichiers WordPress, sauf ceux que vous avez modifié, comme <span class="file">`wp-config.php`</span> ou le contenu du dossier <span class="file">`/wp-content/`</span>.
3.  Téléversez les nouveaux fichiers en provenance de l’archive de WordPress.
4.  Allez sur la page `<span class="file">[/wp-admin/upgrade.php](wp-admin/upgrade.php)</span>` avec votre navigateur internet.

## Migrer depuis d’autres logiciels/plates-formes

WordPress peut [importer les articles en provenance de nombreux autres outils (en)](https://codex.wordpress.org/Importing_Content). Vous devez d’abord installer WordPress comme expliqué plus haut, puis utiliser [un des importateurs](wp-admin/import.php "Importer dans WordPress").

## Prérequis fonctionnels

*   [PHP](https://secure.php.net/) version **5.6.20** ou supérieure ;
*   [MySQL](https://www.mysql.com/) version **5.0** ou supérieure.

## Recommandations

*   [PHP](https://secure.php.net/) version **7.3** ou supérieure ;
*   [MySQL](https://www.mysql.com/) version **5.6** ou supérieure.
*   Le module [mod_rewrite](https://httpd.apache.org/docs/2.2/mod/mod_rewrite.html) d’Apache.
*   La prise en charge [HTTPS](https://wordpress.org/news/2016/12/moving-toward-ssl/).
*   Un lien vers [wordpress.org](https://wordpress.org/) sur votre site.

## Ressources en ligne

Si vous vous posez des questions dont les réponses ne figurent pas sur ce document, vous disposez de nombreuses ressources en ligne :

<dl>

<dt>[Le Codex WordPress](https://codex.wordpress.org/)</dt>

<dd>Le Codex est l’encyclopédie liée à tout le fonctionnement de WordPress. Il s’agit de la source d’informations la plus complète qui soit.</dd>

<dt>[Le blog de WordPress](https://wordpress.org/news/)</dt>

<dd>C’est ici que vous trouverez les dernières informations, les annonces et les nouveautés de WordPress. Les derniers articles de ce blog sont affichés dans le Tableau de bord de WordPress par défaut.</dd>

<dt>[Planète WordPress](https://planet.wordpress.org/)</dt>

<dd>La Planète WordPress est un agrégateur de news qui distille les articles de plusieurs blogs WordPress à travers le web.</dd>

<dt>[Support WordPress Francophone](http://wordpress-fr.net/support/)</dt>

<dd>Si vous avez cherché partout et que malgré cela vous n’avez trouvé aucune réponse, les forums sont très actifs et son immense communauté sera prête à vous aider. Pour un traitement efficace de votre problème, faites en sorte d’utiliser, lors de la création de votre sujet, un titre et une description aussi pertinents et clairs que possible.</dd>

<dt>[Canal <abbr title="Internet Relay Chat">IRC</abbr> WordPress](https://codex.wordpress.org/IRC)</dt>

<dd>Il existe un canal IRC qui est le rendez-vous des utilisateurs WordPress, et occasionnellement, propose son aide aux sujets liés au support. La page Wiki devrait vous indiquer la bonne direction. ([irc.freenode.net #wordpress](irc://irc.freenode.net/wordpress))</dd>

</dl>

## Pour finir

*   Si vous avez des suggestions, des idées, des commentaires ou si vous avez trouvé un bug (oups !), venez nous rejoindre sur les [forums anglophones](https://wordpress.org/support/).
*   WordPress possède une <abbr title="Application Programming Interface">API</abbr> d’extension robuste, qui permet d’étendre les possibilités de son code de manière simple. Si vous êtes un développeur intéressé par son utilisation, rendez-vous sur le [développement des extensions du Handbook](https://developer.wordpress.org/plugins/). Vous ne devriez pas avoir à modifier une partie du code original.

## Faites connaître WordPress !

WordPress ne possède pas une kyrielle de millions de dollars pour s’offrir une campagne marketing, ni de célèbres sponsors, mais nous avons bien mieux : VOUS. Si vous appréciez WordPress, n’hésitez pas à en parler à votre entourage, vos amis, en aidant d’autres personnes ayant un niveau inférieur au vôtre, ou encore écrire un article faisant référence à notre travail.

WordPress est la reprise officielle de [b2/cafélog](http://cafelog.com/), provenant de Michel V. Le travail a continué d’être assuré par [les développeurs WordPress](https://wordpress.org/about/). Si vous voulez apporter votre soutien à WordPress, n’hésitez pas à [faire un don](https://wordpress.org/donate/).

## Licence

WordPress est un logiciel libre, mis à disposition sous les termes de la licence <abbr title="GNU Public License">GPL</abbr> version 2, ou de toute version suivante, au choix (voir [license.txt](license.txt) (en anglais)).