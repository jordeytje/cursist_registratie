<?php

// Register Custom Post Type
function cr_register_post_type() {

    $labels = array(
        'name'                  => _x( 'Cursisten', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Cursist', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Cursisten', 'text_domain' ),
        'name_admin_bar'        => __( 'Cursisten', 'text_domain' ),
        'archives'              => __( 'Cursist Archives', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent cursist:', 'text_domain' ),
        'all_items'             => __( 'Alle cursisten', 'text_domain' ),
        'add_new_item'          => __( 'Voeg nieuwe cursist toe', 'text_domain' ),
        'add_new'               => __( 'Nieuwe cursist', 'text_domain' ),
        'new_item'              => __( 'Nieuwe cursist', 'text_domain' ),
        'edit_item'             => __( 'Wijzig cursist', 'text_domain' ),
        'update_item'           => __( 'Wijzig cursist', 'text_domain' ),
        'view_item'             => __( 'Inzien cursist', 'text_domain' ),
        'search_items'          => __( 'Zoek cursist', 'text_domain' ),
        'not_found'             => __( 'Cursist niet gevonden', 'text_domain' ),
        'not_found_in_trash'    => __( 'Cursist niet gevonden in prullenbak', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Invoegen in cursist', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaden naar deze cursist', 'text_domain' ),
        'items_list'            => __( 'Cursisten lijst', 'text_domain' ),
        'items_list_navigation' => __( 'Cursisten lijst navigatie', 'text_domain' ),
        'filter_items_list'     => __( 'Filter cursisten lijst', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Cursist', 'text_domain' ),
        'description'           => __( 'cursisten', 'text_domain' ),
        'labels'                => $labels,
        'taxonomies'            => array( 'post_tag' ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 10,
        'menu_icon'             => 'dashicons-groups',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'query_var'             => 'cursisten',
        'capability_type'       => 'page',
        'supports'              => array(
            'title',
            'thumbnail',
//            'revisions'
            ),
    );
    register_post_type( 'cursisten', $args );

}
add_action( 'init', 'cr_register_post_type' );

// Register Custom Post Type
function cr_voorkeur_widget() {

    $labels = array(
        'name'                  => _x( 'voorkeuren', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Voorkeur', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Voorkeur widget', 'text_domain' ),
        'name_admin_bar'        => __( 'Voorkeur widget', 'text_domain' ),
        'archives'              => __( 'voorkeur archieven', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent voorkeur:', 'text_domain' ),
        'all_items'             => __( 'Alle voorkeuren', 'text_domain' ),
        'add_new_item'          => __( 'Voeg nieuwe voorkeur toe', 'text_domain' ),
        'add_new'               => __( 'Voeg nieuwe toe', 'text_domain' ),
        'new_item'              => __( 'Nieuwe voorkeur', 'text_domain' ),
        'edit_item'             => __( 'Wijzig voorkeur', 'text_domain' ),
        'update_item'           => __( 'Update voorkeur', 'text_domain' ),
        'view_item'             => __( 'Voorkeur inzien', 'text_domain' ),
        'search_items'          => __( 'Voorkeur zoeken', 'text_domain' ),
        'not_found'             => __( 'Niet gevonden', 'text_domain' ),
        'not_found_in_trash'    => __( 'Niet gevonden in de prullenbak', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Invoegen in voorkeur', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Geupload naar deze voorkeur', 'text_domain' ),
        'items_list'            => __( 'Voorkeuren lijst', 'text_domain' ),
        'items_list_navigation' => __( 'Voorkeuren lijst navigatie', 'text_domain' ),
        'filter_items_list'     => __( 'Filter voorkeuren lijst', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Voorkeur', 'text_domain' ),
        'description'           => __( 'hiermee kan je de voorkeur widget vullen met data', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title'),
        'taxonomies'            => array( 'category' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 10,
        'menu_icon'             => 'dashicons-list-view',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'cr_voorkeur_widget', $args );

}
add_action( 'init', 'cr_voorkeur_widget', 0 );

//custom colum heads
function cr_cursisten_table_head( $defaults )
{
    $defaults['_cr_voornaam'] = 'Voornaam';
    $defaults['_cr_tussenvoegsel'] = 'Tussenvoegsel';
    $defaults['_cr_achternaam'] = 'Achternaam';
    $defaults['_cr_telefoon_mobiel'] = 'Telefoon (mobiel)';
    $defaults['_cr_email'] = 'Email';
    $defaults['author'] = 'Auteur';
    return $defaults;
}
add_filter('manage_cursisten_posts_columns', 'cr_cursisten_table_head');

//custom table data
function cr_cursisten_table_content( $column_name, $post_id ) {
    if ($column_name == '_cr_voornaam') {
        echo get_field('voornaam');
    }
    if ($column_name == '_cr_tussenvoegsel') {
        echo get_field('tussenvoegsel');
    }

    if ($column_name == '_cr_achternaam') {
        echo get_field('achternaam');
    }

    if ($column_name == '_cr_telefoon_mobiel') {
        echo get_field('mobiel');
    }

    if ($column_name == '_cr_email') {
        echo get_field('e-mail');
    }

}
add_action( 'manage_cursisten_posts_custom_column', 'cr_cursisten_table_content', 10, 2 );


//view page

function cr_load_templates($original_template){

    if(get_query_var('post_type') !== 'cursisten' ){
        return $original_template;
    }

    if(is_archive() || is_search()){
//        if(file_exists(get_stylesheet_directory(). '/cusisten-archive.php')) {
//            return get_stylesheet_directory(). '/cursisten-archive.php';
//        }else {
//            return plugin_dir_path(__FILE__) . 'templates/cursisten-archive.php';
//        }
    }else {
        if(file_exists(get_stylesheet_directory(). '/cusisten-single.php')) {
            return get_stylesheet_directory(). '/cursisten-single.php';
        }else {
            return plugin_dir_path(__FILE__) . 'templates/cursisten-single.php';
        }
    }

    return $original_template;

}
add_action('template_include', 'cr_load_templates');

