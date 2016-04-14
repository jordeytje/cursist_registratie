<?php
//metabox 1
function cr_add_custom_metabox(){
add_meta_box(
'cr_meta',
'Value en prijs',
'cr_meta_callback',
'cr_voorkeur_widget'
);
}
add_action('add_meta_boxes', 'cr_add_custom_metabox');

//html voor metabox 1
function cr_meta_callback($post){
wp_nonce_field(basename(__FILE__), 'cr_voorkeuren_nonce');
$cr_stored_meta = get_post_meta($post->ID);
?>
<div class="container">
    <h3>Voer de value in</h3>
    <h4>De value is hetzelfde als de titel, maar dan zonder spaties en hoofdletters u kunt gewoon spaties gebruiken deze worden automatisch veranderd.</h4>
    <br>
    <label for="cr_value">Vul de value in</label>
    <input type="text" id="cr_widget_value" name="cr_widget_value" style="width: 100%; display: block; text-transform: lowercase;" value="<?php if (!empty($cr_stored_meta['cr_widget_value'])) echo esc_attr($cr_stored_meta['cr_widget_value'][0]); ?>">
    <script>
        jQuery(function($) {
            $(document).ready(function(){
//                    verandert spatie in underscore
                $("#cr_widget_value").keyup(function () {
                    var textValue = $(this).val();
                    textValue =textValue.replace(/ /g,"_");
                    $(this).val(textValue);
                });
            });
        });
    </script>

    <br> <h3>Vul hier de prijs in van de cursus in euros.</h3>
    <label for="cr_widget_price">Vul de prijs in, in euros</label>
    <input type="text" id="cr_widget_price" name="cr_widget_price" style="width: 100%; display: block;" value="<?php if (!empty($cr_stored_meta['cr_widget_price'])) echo esc_attr($cr_stored_meta['cr_widget_price'][0]); ?>">
</div>
<?php
}

function cr_meta_save( $post_id ) {
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'cr_voorkeuren_nonce' ] ) && wp_verify_nonce( $_POST[ 'cr_voorkeuren_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }

    if ( isset( $_POST[ 'cr_widget_value' ] ) ) {
        update_post_meta( $post_id, 'cr_widget_value', sanitize_text_field( $_POST[ 'cr_widget_value' ] ) );
    }
    if ( isset( $_POST[ 'cr_widget_price' ] ) ) {
        update_post_meta( $post_id, 'cr_widget_price', sanitize_text_field( $_POST[ 'cr_widget_price' ] ) );
    }

}
add_action( 'save_post', 'cr_meta_save' );