<?php
get_header();
// équivalent d'un require (a quelques détails prés) pour aller chercher notre 
//header.php
?>
    <div class="wrapper">
        
        <div id="content">
            <header id="content-header">
                <h1>Lastest news</h1>
            </header>
            <section id="posts">
                <?php 
                // Si il y a des articles 
                if (have_posts()) {
                    while (have_posts()) {
                    // nous demandons a wp de "charger" l'artcile
                    // dans le tour de boulce auquel nous sommes
                    the_post();
                    get_template_part('partials/post-thumbnail');
                 }
                }
                ?>
            </section>
        </div>
    </div>
<?php
get_footer();
?>
