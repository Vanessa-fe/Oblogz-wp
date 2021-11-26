 <!--TODO Faire une classe unique CSS pour les categories -->
 <article class="post post-news">


<?php 
$categoriesList = get_the_category();
// print_r($categoriesList);exit;
foreach($categoriesList as $category){
    echo '<a href="'
    . get_category_link($category->term_id)
    . '" class="badge">'
    . 
    $category->name
    .'</a>';

}
?>

<h2 class="post-title">
<?php
//echo get_the_title();
// équivaut : 
the_title();
?>
</h2>

<div class="article__thumbnail">
    <?php 
    the_post_thumbnail();
    
    ?>
</div>



<div class="meta">
    <img src="
    <?php 
    echo get_avatar_url(get_the_author_meta('ID'));
    ?>
    " alt="" class="meta-icon" />
    <strong class="meta-author"> 
        <?php
        the_author();
        ?>
    </strong>
    <span class="meta-date">
    <?= get_the_date();?>   
    </span>
</div>
<p>
<?= get_the_excerpt();?>
</p>
<a href="
<?php
echo get_the_permalink();
?>
" class="post-read">Continue reading</a>
</article>