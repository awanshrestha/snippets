<?php get_header();?>

<h1><?php the_title();?></h1>

<?php
    if( have_posts() ){
        while( have_posts()){
            the_post();
            the_content();
        }
    }
?>

<a href="#">test</a>

<?php
    dynamic_sidebar('sidebar-1')
?>


    
<?php get_footer();?>
