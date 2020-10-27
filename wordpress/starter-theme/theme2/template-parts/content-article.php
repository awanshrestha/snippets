<?php
    the_content();
?>

<p>Published on: <?php the_date();?></p>
<p><?php the_tags();?></p>
<p><?php comments_number();?></p>




<p>
    <?php
        comments_template();
    ?>
</p>