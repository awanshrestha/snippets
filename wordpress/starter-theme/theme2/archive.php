<?php get_header() ?>

<h1 class="pt-5 pb-5">
        <?php single_cat_title(); ?>
</h1>

<div class="container">
   
    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                get_template_part('template-parts/content', 'blog');
            }
        }
    ?>

</div>

<?php 
    the_posts_pagination();
?>

<?php get_footer() ?>