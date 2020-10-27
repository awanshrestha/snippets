<?php

    if(! have_comments()){
        echo "Leave a Comments";
    }
    else{
        echo get_comments_number() . "Comments";
    }

?>

<div>
    <?php
            wp_list_comments(
                array(
                    'avatar_size'=> 120,
                    'style' => 'div'
                )
            );
    ?>
</div>


<div>
    <?php
        if(comments_open()){
            comment_form(
                array(
                    
                )
            );
        }
    ?>
</div>

