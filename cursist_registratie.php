<?php
/*
Plugin Name: Cursist Registratie
Description: Een custom made plugin voor het beheren van alle cursisten.
Version:     1.3.0
Author:      Jordey
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

//exit if acessed directly

if ( ! defined('ABSPATH')) {
    exit;
}

require_once (plugin_dir_path(__FILE__) . 'cursist_registratie_overzicht.php');
require_once (plugin_dir_path(__FILE__) . 'cursist_registratie_admin_fields.php');
require_once (plugin_dir_path(__FILE__) . 'cursist_registratie_widget.php');

function cr_admin_enqueue_scripts()
{
    global $pagenow, $typenow;

//    om te kijken op welke pagina ik zit gebruik onderstaande coder
//    $screen = get_current_screen();
//    var_dump($screen);
//    var_dump($pagenow);
//    var_dump($typenow);
//


    if (($pagenow == 'post.php' || $pagenow == 'post-new.php' || $pagenow == 'edit.php') && $typenow == 'cursisten') {
        wp_enqueue_style('cr-admin-css', plugins_url('css/admin-cursisten.css', __FILE__));
        wp_enqueue_script('cr-admin-js', plugins_url('js/admin-cursisten.js', __FILE__), array('jquery', 'jquery-ui-datepicker'), '20160309', true);
        wp_enqueue_style('cr-fontawesome', plugins_url('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'));
    }

    if (($pagenow == 'post.php' || $pagenow == 'post-new.php' || $pagenow == 'edit.php') && $typenow == 'cr_voorkeur_widget') {
        wp_enqueue_style('cr-widget-css', plugins_url('css/widget-cursisten.css', __FILE__));
        wp_enqueue_script('cr-widget-js', plugins_url('js/widget-cursisten.js', __FILE__), array('jquery', 'jquery-ui-datepicker'), '20160309', true);
        wp_enqueue_style('cr-fontawesome', plugins_url('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'));
    }

}
add_action('admin_enqueue_scripts', 'cr_admin_enqueue_scripts');

function myplugin_ajaxurl() {

    echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}
add_action('wp_head', 'myplugin_ajaxurl');