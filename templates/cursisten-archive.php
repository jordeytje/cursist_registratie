<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post();
    the_title();
    echo '<h1>DOEI</h1>';
    echo '<div class="entry-content">';
    the_content();
    echo '</div>';
endwhile; endif;
get_footer();
?>