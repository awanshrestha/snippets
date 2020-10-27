<div class="card mb-4">
    <div class="card-body">
        <h3><?php the_title() ?></h3>
        <img src="<?php the_post_thumbnail_url('thumbnail') ?>" class="img-fluid" alt="">
        <p><?php the_date();?></p>
        <p><?php comments_number();?></p>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
    </div>
</div>