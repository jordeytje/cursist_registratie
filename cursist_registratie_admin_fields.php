<?php

function wpb_change_title_text( $title ){

    $screen = get_current_screen();

    if  ( 'cursisten' == $screen->post_type ) {
        $title = 'Voer hier de voor en- achternaam in voor het filter ';
    }
    return $title;
}
add_filter( 'enter_title_here', 'wpb_change_title_text' );

?>
