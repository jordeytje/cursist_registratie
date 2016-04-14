<!--//===================================================================-->
<!--//-->
<!--////ADVANCED INPUT FIELDS-->
<!--//function cr_add_custom_metabox() {-->
<!--//-->
<!--//    add_meta_box(-->
<!--//        'cr_meta_naw',-->
<!--//        'Cursist',-->
<!--//        'cr_meta_callback_naw',-->
<!--//        'cursisten',-->
<!--//        'normal'-->
<!--//    );-->
<!--//-->
<!--//    add_meta_box(-->
<!--//        'cr_meta_cursussen_1',-->
<!--//        'Cursus',-->
<!--//        'cr_meta_callback_cursussen',-->
<!--//        'cursisten',-->
<!--//        'normal'-->
<!--//    );-->
<!--//-->
<!--//-->
<!--//}-->
<!--//add_action( 'add_meta_boxes', 'cr_add_custom_metabox' );-->
<!--////CODE ADVANCED INPUT FIELD NAW GEGEVENS-->
<!--//function cr_meta_callback_naw( $post )-->
<!--//{-->
<!--//    wp_nonce_field(basename(_cr___FILE__), 'cr_cursisten_nonce');-->
<!--//    $cr_stored_meta = get_post_meta($post->ID); ?>-->
<!--<!---->-->
<!--<!---->-->
<!--<!--    <!--NAW GEGEVENS-->-->-->
<!--<!--    <style>-->-->
<!--<!--        #wpfooter {-->-->
<!--<!--            display: none;-->-->
<!--<!--        }-->-->
<!--<!---->-->
<!--<!--    </style>-->-->
<!--<!--    <h2 style="padding-left: 0; font-weight: 600; font-size: 22px; border-bottom: 1px solid #393939; margin-bottom: 10px;;">-->-->
<!--<!--        Naw Gegevens</h2>-->-->
<!--<!--    <div class="row">-->-->
<!--<!--        <div class="meta-row form-group col-md-4">-->-->
<!--<!--            <div class="meta-th">-->-->
<!--<!--                <label for="voornaam" class="cr-row-title">Voornaam</label>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-td">-->-->
<!--<!--                <input type="text" class="form-control cr-row-content" name="_cr_voornaam" id="voornaam"-->-->
<!--<!--                       value="-->--><?php ////if (!empty ($cr_stored_meta['_cr_voornaam'])) {
////                           echo esc_attr($cr_stored_meta['_cr_voornaam'][0]);
////                       } ?><!--<!--"/>-->-->
<!--<!--            </div>-->-->
<!--<!--        </div>-->-->
<!--<!--        <div class="meta-row form-group col-md-4">-->-->
<!--<!--            <div class="meta-th">-->-->
<!--<!--                <label for="tussenvoegsel" class="cr-row-title">Tussenvoegsel</label>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-td">-->-->
<!--<!--                <input type="text" class="form-control cr-row-content" name="_cr_tussenvoegsel" id="tussenvoegsel"-->-->
<!--<!--                       value="-->--><?php ////if (!empty ($cr_stored_meta['_cr_tussenvoegsel'])) {
////                           echo esc_attr($cr_stored_meta['_cr_tussenvoegsel'][0]);
////                       } ?><!--<!--"/>-->-->
<!--<!--            </div>-->-->
<!--<!--        </div>-->-->
<!--<!--        <div class="meta-row form-group col-md-4">-->-->
<!--<!--            <div class="meta-th">-->-->
<!--<!--                <label for="achternaam" class="cr-row-title">Achternaam</label>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-td">-->-->
<!--<!--                <input type="text" class="form-control cr-row-content" name="_cr_achternaam" id="achternaam"-->-->
<!--<!--                       value="-->--><?php ////if (!empty ($cr_stored_meta['_cr_achternaam'])) {
////                           echo esc_attr($cr_stored_meta['_cr_achternaam'][0]);
////                       } ?><!--<!--"/>-->-->
<!--<!--            </div>-->-->
<!--<!--        </div>-->-->
<!--<!--    </div>-->-->
<!--<!--    <div class="row">-->-->
<!--<!--        <div class="meta-row form-group col-md-6">-->-->
<!--<!--            <div class="meta-th">-->-->
<!--<!--                <label for="telefoon_thuis" class="cr-row-title">Telefoon (thuis)</label>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-td">-->-->
<!--<!--                <input type="text" class="form-control cr-row-content" name="_cr_telefoon_thuis" id="telefoon_thuis"-->-->
<!--<!--                       value="-->--><?php ////if (!empty ($cr_stored_meta['_cr_telefoon_thuis'])) {
////                           echo esc_attr($cr_stored_meta['_cr_telefoon_thuis'][0]);
////                       } ?><!--<!--"/>-->-->
<!--<!--            </div>-->-->
<!--<!--        </div>-->-->
<!--<!--        <div class="meta-row form-group col-md-6">-->-->
<!--<!--            <div class="meta-th">-->-->
<!--<!--                <label for="telefoon_mobiel" class="cr-row-title">Telefoon (Mobiel)</label>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-td">-->-->
<!--<!--                <input type="text" class="form-control cr-row-content" name="_cr_telefoon_mobiel" id="telefoon_mobiel"-->-->
<!--<!--                       value="-->--><?php ////if (!empty ($cr_stored_meta['_cr_telefoon_mobiel'])) {
////                           echo esc_attr($cr_stored_meta['_cr_telefoon_mobiel'][0]);
////                       } ?><!--<!--"/>-->-->
<!--<!--            </div>-->-->
<!--<!--        </div>-->-->
<!--<!--    </div>-->-->
<!--<!--    <div class="meta-row form-group">-->-->
<!--<!--        <div class="meta-th">-->-->
<!--<!--            <label for="email" class="cr-row-title">E-mail</label>-->-->
<!--<!--        </div>-->-->
<!--<!--        <div class="meta-td">-->-->
<!--<!--            <input type="text" class="form-control cr-row-content" name="_cr_email" id="email"-->-->
<!--<!--                   value="-->--><?php ////if (!empty ($cr_stored_meta['_cr_email'])) {
////                       echo esc_attr($cr_stored_meta['_cr_email'][0]);
////                   } ?><!--<!--"/>-->-->
<!--<!--        </div>-->-->
<!--<!--    </div>-->-->
<!--<!--    <div class="row">-->-->
<!--<!--        <div class="meta-row form-group col-md-6">-->-->
<!--<!--            <div class="meta-th">-->-->
<!--<!--                <label for="adres" class="cr-row-title">Adres (straat)</label>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-td">-->-->
<!--<!--                <input type="text" class="form-control cr-row-content" name="_cr_adres" id="adres"-->-->
<!--<!--                       value="-->--><?php ////if (!empty ($cr_stored_meta['_cr_adres'])) {
////                           echo esc_attr($cr_stored_meta['_cr_adres'][0]);
////                       } ?><!--<!--"/>-->-->
<!--<!--            </div>-->-->
<!--<!--        </div>-->-->
<!--<!--        <div class="meta-row form-group col-md-3">-->-->
<!--<!--            <div class="meta-th">-->-->
<!--<!--                <label for="huisnummer" class="cr-row-title">Huisnummer</label>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-td">-->-->
<!--<!--                <input type="text" class="form-control cr-row-content" name="_cr_huisnummer" id="huisnummer"-->-->
<!--<!--                       value="-->--><?php ////if (!empty ($cr_stored_meta['_cr_huisnummer'])) {
////                           echo esc_attr($cr_stored_meta['_cr_huisnummer'][0]);
////                       } ?><!--<!--"/>-->-->
<!--<!--            </div>-->-->
<!--<!--        </div>-->-->
<!--<!--        <div class="meta-row form-group col-md-3">-->-->
<!--<!--            <div class="meta-th">-->-->
<!--<!--                <label for="adres_toevoegsel" class="cr-row-title">Toevoegsel</label>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-td">-->-->
<!--<!--                <input type="text" class="form-control cr-row-content" name="_cr_adres_toevoegsel" id="adres_toevoegsel"-->-->
<!--<!--                       value="-->--><?php ////if (!empty ($cr_stored_meta['_cr_adres_toevoegsel'])) {
////                           echo esc_attr($cr_stored_meta['_cr_adres_toevoegsel'][0]);
////                       } ?><!--<!--"/>-->-->
<!--<!--            </div>-->-->
<!--<!--        </div>-->-->
<!--<!--    </div>-->-->
<!--<!--    <div class="row">-->-->
<!--<!--        <div class="meta-row form-group col-md-6">-->-->
<!--<!--            <div class="meta-th">-->-->
<!--<!--                <label for="plaats" class="cr-row-title">Plaats</label>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-td">-->-->
<!--<!--                <input type="text" class="form-control cr-row-content" name="_cr_plaats" id="plaats"-->-->
<!--<!--                       value="-->--><?php ////if (!empty ($cr_stored_meta['_cr_plaats'])) {
////                           echo esc_attr($cr_stored_meta['_cr_plaats'][0]);
////                       } ?><!--<!--"/>-->-->
<!--<!--            </div>-->-->
<!--<!--        </div>-->-->
<!--<!--        <div class="meta-row form-group col-md-6">-->-->
<!--<!--            <div class="meta-th">-->-->
<!--<!--                <label for="postcode" class="cr-row-title">Postcode</label>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-td">-->-->
<!--<!--                <input type="text" class="form-control cr-row-content" name="_cr_postcode" id="postcode"-->-->
<!--<!--                       value="-->--><?php ////if (!empty ($cr_stored_meta['_cr_postcode'])) {
////                           echo esc_attr($cr_stored_meta['_cr_postcode'][0]);
////                       } ?><!--<!--"/>-->-->
<!--<!--            </div>-->-->
<!--<!--        </div>-->-->
<!--<!--    </div>-->-->
<!--<!--    <div class="meta-row form-group">-->-->
<!--<!--        <div class="meta-th">-->-->
<!--<!--            <label for="geslacht" class="cr-row-title">Geslacht</label>-->-->
<!--<!--        </div>-->-->
<!--<!--        <div class="meta-td">-->-->
<!--<!--            <input type="text" class="form-control cr-row-content" name="_cr_geslacht" id="geslacht"-->-->
<!--<!--                   value="-->--><?php ////if (!empty ($cr_stored_meta['_cr_geslacht'])) {
////                       echo esc_attr($cr_stored_meta['_cr_geslacht'][0]);
////                   } ?><!--<!--"/>-->-->
<!--<!--        </div>-->-->
<!--<!--    </div>-->-->
<!--<!--    <!--EIND NAW GEGEVENS-->-->-->
<!--<!---->-->
<!--<!--    -->--><?php
////}
////
//////BEGIN SAVE NAW GEGEVENS
////function cr_meta_save( $post_id ) {
////    // Checks save status
////    $is_autosave = wp_is_post_autosave( $post_id );
////    $is_revision = wp_is_post_revision( $post_id );
////    $is_valid_nonce = ( isset( $_POST[ 'cr_cursisten_nonce' ] ) && wp_verify_nonce( $_POST[ 'cr_cursisten_nonce' ], basename( _cr___FILE__ ) ) ) ? 'true' : 'false';
////
////    // Exits script depending on save status
////    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
////        return;
////    }
////
//////    NAW GEGEVENS
////    if ( isset( $_POST[ '_cr_cursist_id' ] ) ) {
////        update_post_meta( $post_id, '_cr_cursist_id', sanitize_text_field( $_POST[ '_cr_cursist_id' ] ) );
////    }
////
////    if ( isset( $_POST[ '_cr_voornaam' ] ) ) {
////        update_post_meta( $post_id, '_cr_voornaam', sanitize_text_field( $_POST[ '_cr_voornaam' ] ) );
////    }
////
////    if ( isset( $_POST[ '_cr_tussenvoegsel' ] ) ) {
////        update_post_meta( $post_id, '_cr_tussenvoegsel', sanitize_text_field( $_POST[ '_cr_tussenvoegsel' ] ) );
////    }
////
////    if ( isset( $_POST[ '_cr_achternaam' ] ) ) {
////        update_post_meta( $post_id, '_cr_achternaam', sanitize_text_field( $_POST[ '_cr_achternaam' ] ) );
////    }
////
////    if ( isset( $_POST[ '_cr_telefoon_thuis' ] ) ) {
////        update_post_meta( $post_id, '_cr_telefoon_thuis', sanitize_text_field( $_POST[ '_cr_telefoon_thuis' ] ) );
////    }
////
////    if ( isset( $_POST[ '_cr_telefoon_mobiel' ] ) ) {
////        update_post_meta( $post_id, '_cr_telefoon_mobiel', sanitize_text_field( $_POST[ '_cr_telefoon_mobiel' ] ) );
////    }
////
////    if ( isset( $_POST[ '_cr_email' ] ) ) {
////        update_post_meta( $post_id, '_cr_email', sanitize_text_field( $_POST[ '_cr_email' ] ) );
////    }
////
////    if ( isset( $_POST[ '_cr_adres' ] ) ) {
////        update_post_meta( $post_id, '_cr_adres', sanitize_text_field( $_POST[ '_cr_adres' ] ) );
////    }
////
////    if ( isset( $_POST[ '_cr_huisnummer' ] ) ) {
////        update_post_meta( $post_id, '_cr_huisnummer', sanitize_text_field( $_POST[ '_cr_huisnummer' ] ) );
////    }
////
////    if ( isset( $_POST[ '_cr_adres_toevoegsel' ] ) ) {
////        update_post_meta( $post_id, '_cr_adres_toevoegsel', sanitize_text_field( $_POST[ '_cr_adres_toevoegsel' ] ) );
////    }
////
////    if ( isset( $_POST[ '_cr_plaats' ] ) ) {
////        update_post_meta( $post_id, '_cr_plaats', sanitize_text_field( $_POST[ '_cr_plaats' ] ) );
////    }
////
////    if ( isset( $_POST[ '_cr_postcode' ] ) ) {
////        update_post_meta( $post_id, '_cr_postcode', sanitize_text_field( $_POST[ '_cr_postcode' ] ) );
////    }
////
////    if ( isset( $_POST[ '_cr_geslacht' ] ) ) {
////        update_post_meta( $post_id, '_cr_geslacht', sanitize_text_field( $_POST[ '_cr_geslacht' ] ) );
////    }
////}
////add_action( 'save_post', 'cr_meta_save' );
//////EIND SAVE NAW GEGEVENS
////
////
//////===================================================================
////
////function cr_meta_callback_cursussen( $post )
////    {
////        wp_nonce_field(basename(_cr___FILE__), 'cr_cursussen_nonce');
////        $cr_stored_meta = get_post_meta($post->ID);
////
////        $meta_element_class_1 = get_post_meta($post->ID, 'cr_meta_callback_cursussen_1', true); //true ensures you get just one value instead of an array
////        $meta_element_class_2 = get_post_meta($post->ID, 'cr_meta_callback_cursussen_2', true); //true ensures you get just one value instead of an array
////        $meta_element_class_3 = get_post_meta($post->ID, 'cr_meta_callback_cursussen_3', true); //true ensures you get just one value instead of an array
////
////        ?>
<!--<!--<!--begin metabox front-end-->-->-->
<!--<!--    <div class="cursus-block">-->-->
<!--<!--        <div class="row cursus-row">-->-->
<!--<!--            <div class="col-md-2">-->-->
<!--<!--                <div style="margin-top: 10px;" id="voeg-cursus-box-toe">+</div>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-row form-group col-md-4">-->-->
<!--<!--                <div class="meta-th">-->-->
<!--<!--                    <label for="custom_element_grid_class_2" class="cr-row-title">Cursus</label>-->-->
<!--<!--                </div>-->-->
<!--<!--                <div class="meta-td">-->-->
<!--<!--                    <div class="meta-row form-group">-->-->
<!--<!--                        <div class="meta-td">-->-->
<!--<!--                            <select name="custom_element_grid_class_2" id="custom_element_grid_class_2" class="col-md-12">-->-->
<!--<!--                                <option value="dj les" -->--><?php ////selected( $meta_element_class_2, 'dj les' ); ?><!--<!--dj les</option>-->-->
<!--<!--                                <option value="produceren" -->--><?php ////selected( $meta_element_class_2, 'produceren' ); ?><!--<!--produceren</option>-->-->
<!--<!--                                <option value="mixen" -->--><?php ////selected( $meta_element_class_2, 'mixen' ); ?><!--<!--mixen</option>-->-->
<!--<!--                            </select>-->-->
<!--<!--                        </div>-->-->
<!--<!--                    </div>-->-->
<!--<!--                </div>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-row form-group col-md-4">-->-->
<!--<!--                <div class="meta-th">-->-->
<!--<!--                    <label for="custom_element_grid_class_3" class="cr-row-title">Les</label>-->-->
<!--<!--                </div>-->-->
<!--<!--                <div class="meta-td">-->-->
<!--<!--                    <div class="meta-row form-group">-->-->
<!--<!--                        <div class="meta-td">-->-->
<!--<!--                            <select name="custom_element_grid_class_3" id="custom_element_grid_class_3" class="col-md-12">-->-->
<!--<!--                                <option value="Groepsles" -->--><?php ////selected( $meta_element_class_3, 'Groepsles' ); ?><!--<!--Groepsles</option>-->-->
<!--<!--                                <option value="Duo" -->--><?php ////selected( $meta_element_class_3, 'Duo' ); ?><!--<!--Duo</option>-->-->
<!--<!--                                <option value="Individueel" -->--><?php ////selected( $meta_element_class_3, 'Individueel' ); ?><!--<!--Individueel</option>-->-->
<!--<!--                            </select>-->-->
<!--<!--                        </div>-->-->
<!--<!--                    </div>-->-->
<!--<!--                </div>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-row form-group col-md-push-1 col-md-1" style="margin-left: -30px;">-->-->
<!--<!--                <div style="margin-top: 10px;" class="meta-th">-->-->
<!--<!--                    <p style="font-size: 50px;">&#9989;</p>-->-->
<!--<!--                </div>-->-->
<!--<!--            </div>-->-->
<!--<!--        </div>-->-->
<!--<!--        <div class="row">-->-->
<!--<!--            <div class="meta-row form-group col-md-3 col-md-offset-2">-->-->
<!--<!--                <div class="meta-th">-->-->
<!--<!--                    <label for="begin_datum_cursus" class="cr-row-title">Begin datum cusrus</label>-->-->
<!--<!--                </div>-->-->
<!--<!--                <div class="meta-td">-->-->
<!--<!--                    <div class="meta-row ">-->-->
<!--<!--                        <div class="meta-td">-->-->
<!--<!--                            <input type="date" name="_cr_begin_datum_cursus" id="begin_datum_cursus" value="-->--><?php ////if ( ! empty ( $cr_stored_meta['_cr_begin_datum_cursus'] ) ) {echo esc_attr( $cr_stored_meta['_cr_begin_datum_cursus'][0] );} ?><!--<!--">-->-->
<!--<!--                        </div>-->-->
<!--<!--                    </div>-->-->
<!--<!--                </div>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-row form-group col-md-3">-->-->
<!--<!--                <div class="meta-th">-->-->
<!--<!--                    <label for="eind_datum_cursus" class="cr-row-title">Eind datum cursus</label>-->-->
<!--<!--                </div>-->-->
<!--<!--                <div class="meta-td">-->-->
<!--<!--                    <div class="meta-row ">-->-->
<!--<!--                        <div class="meta-td">-->-->
<!--<!--                            <input type="date" name="_cr_eind_datum_cursus" id="eind_datum_cursus" value="-->--><?php ////if ( ! empty ( $cr_stored_meta['_cr_eind_datum_cursus'] ) ) {echo esc_attr( $cr_stored_meta['_cr_eind_datum_cursus'][0] );} ?><!--<!--">-->-->
<!--<!--                        </div>-->-->
<!--<!--                    </div>-->-->
<!--<!--                </div>-->-->
<!--<!--            </div>-->-->
<!--<!--            <div class="meta-row form-group col-md-4 ">-->-->
<!--<!--                <div class="meta-th">-->-->
<!--<!--                    <label for="status" class="cr-row-title">Status</label>-->-->
<!--<!--                </div>-->-->
<!--<!--                <div class="meta-td">-->-->
<!--<!--                    <div class="meta-row">-->-->
<!--<!--                        <div class="meta-td">-->-->
<!--<!--                            <select name="custom_element_grid_class" id="custom_element_grid_class">-->-->
<!--<!--                                <option value="ingepland" -->--><?php ////selected( $meta_element_class_1, 'ingepland' ); ?><!--<!--ingepland</option>-->-->
<!--<!--                                <option value="Actief" -->--><?php ////selected( $meta_element_class_1, 'Actief' ); ?><!--<!--Actief</option>-->-->
<!--<!--                                <option value="behaald" -->--><?php ////selected( $meta_element_class_1, 'behaald' ); ?><!--<!--behaald</option>-->-->
<!--<!--                            </select>-->-->
<!--<!--                        </div>-->-->
<!--<!--                    </div>-->-->
<!--<!--                </div>-->-->
<!--<!--            </div>-->-->
<!--<!--        </div>-->-->
<!--<!--        <div class="row">-->-->
<!--<!--            <div class="meta-row form-group col-md-10 col-md-offset-2">-->-->
<!--<!--                <div class="meta-th">-->-->
<!--<!--                    <label for="opmerkingen" class="cr-row-title">Opmerkingen</label>-->-->
<!--<!--                </div>-->-->
<!--<!--                <div class="meta-td">-->-->
<!--<!--                <textarea class="col-md-12" name="_cr_opmerkingen" id="opmerkingen" cols="30" rows="10" style="resize: none;">-->--><?php
////                    if ( ! empty ( $cr_stored_meta['_cr_opmerkingen'] ) ) {echo esc_attr( $cr_stored_meta['_cr_opmerkingen'][0] );}
////                    ?><!--<!--</textarea>-->-->
<!--<!--                </div>-->-->
<!--<!--            </div>-->-->
<!--<!--        </div>-->-->
<!--<!--    </div>-->-->
<!--<!--<!--eind metabox front-end-->-->
<!--<!--    -->--><?php ////}
//////=============================================================================================================
//////CODE ADVANCED INPUT FIELD SUBCURSUS IN THIS CASE FOR SAVE
////function cr_meta_callback_cursussen_2( ){wp_nonce_field(basename(_cr___FILE__), 'cr_cursussen_nonce');}
////function cr_meta_callback_cursussen_3( ){wp_nonce_field(basename(_cr___FILE__), 'cr_cursussen_nonce');}
////
//////SAVE CURSUS DATA
////function cr_meta_save_cursus( $post_id ) {
////    // Checks save status
////    $is_autosave = wp_is_post_autosave( $post_id );
////    $is_revision = wp_is_post_revision( $post_id );
////    $is_valid_nonce = ( isset( $_POST[ 'cr_cursussennonce' ] ) && wp_verify_nonce( $_POST[ 'cr_cursussennonce' ], basename( _cr___FILE__ ) ) ) ? 'true' : 'false';
////    // Exits script depending on save status
////    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
////        return;
////    }
////    if ( isset( $_POST[ '_cr_opmerkingen' ] ) ) {
////        update_post_meta( $post_id, '_cr_opmerkingen', sanitize_text_field( $_POST[ '_cr_opmerkingen' ] ) );
////    }
////    if ( isset( $_POST[ '_cr_begin_datum_cursus' ] ) ) {
////        update_post_meta( $post_id, '_cr_begin_datum_cursus', sanitize_text_field( $_POST[ '_cr_begin_datum_cursus' ] ) );
////    }
////    if ( isset( $_POST[ '_cr_eind_datum_cursus' ] ) ) {
////        update_post_meta( $post_id, '_cr_eind_datum_cursus', sanitize_text_field( $_POST[ '_cr_eind_datum_cursus' ] ) );
////    }
////    if ( isset( $_POST[ '_cr_status_datum' ] ) ) {
////        update_post_meta( $post_id, '_cr_status_datum', sanitize_text_field( $_POST[ '_cr_status_datum' ] ) );
////    }
////}
////add_action( 'save_post', 'cr_meta_save_cursus' );
////
//////CURSUS SAVE SELECT
////function so_save_metabox()
////{
////    global $post;
////    if (isset($_POST["custom_element_grid_class"])) {
////        $meta_element_class = $_POST['custom_element_grid_class'];
////        update_post_meta($post->ID, 'cr_meta_callback_cursussen', $meta_element_class);
////    }
////}
////add_action('save_post', 'so_save_metabox');
//////CURSUS SAVE SELECT
////function so_save_metabox_2()
////{
////    global $post;
////    if (isset($_POST["custom_element_grid_class_2"])) {
////        $meta_element_class_2 = $_POST['custom_element_grid_class_2'];
////        update_post_meta($post->ID, 'cr_meta_callback_cursussen_2', $meta_element_class_2);
////    }
////}
////add_action('save_post', 'so_save_metabox_2');
//////CURSUS SAVE SELECT
////function so_save_metabox_3()
////{
////    global $post;
////    if (isset($_POST["custom_element_grid_class_3"])) {
////        $meta_element_class_3 = $_POST['custom_element_grid_class_3'];
////        update_post_meta($post->ID, 'cr_meta_callback_cursussen_3', $meta_element_class_3);
////    }
////}
////add_action('save_post', 'so_save_metabox_3');
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//<?php
///**
// * Template Name: test agenda
// *
// *
// *
// * @package Graphene
// * @since Graphene 1.0.5
// */
//get_header(); ?>
<?php
//// if(isset($_POST["agenda-datum"])) {
////    //do processing
////     $agenda_datum = $_GET['agenda-datum'];
////     echo 'hallo het is hier' . $agenda_datum . "<br><br>";
////}
//
////if (isset($_POST['submit']))
////{
////    // Process Form
////    echo "<br>" . 'JA ' . "<br>";
////}
////else
////{
////    // Show Form
////    echo "<br>" . 'NEE '. "<br>";
////}
/////*
////*  Create PHP DateTime object from Date Piker Value
////*  this example expects the value to be saved in the format: yymmdd (JS) = Ymd (PHP)
////*/
////
////$format_in = 'Ymd'; // the format your value is saved in (set in the field options)
////$format_out = 'd-m-Y'; // the format you want to end up with
//////$format_out = 'Y-m-d'; // the format you want to end up with
////
////$dbdate = DateTime::createFromFormat($format_in, get_field('datum_les_1_1', 107)); echo $dbdate->format( $format_out );
////$inputdate = "2016-03-17";
////$newDate = date("d-m-Y", strtotime($inputdate));
////
////echo "<br>" . 'deze '. $newDate . "<br>";
////?>
<!--<!---->-->
<?php
////
/////*
////*  Create PHP DateTime object from Date Piker Value
////*  this example expects the value to be saved in the format: yymmdd (JS) = Ymd (PHP)
////*/
////
////$format_in = 'Ymd'; // the format your value is saved in (set in the field options)
////$format_out = 'd-m-Y'; // the format you want to end up with
////
////$date = DateTime::createFromFormat($format_in, get_field('datum_les_1_1', 107)); echo $date->format( $format_out );
////
////?>
<!---->
<!---->
<!---->
<?php ////echo get_field('datum_les_1_1',107); ?>
<!--<!--    <form action="agendatemplate.php" method="post">-->-->
<!--<!--        <input type="date" name="agenda-datum" id="agenda-datum">-->-->
<!--<!--        <select name="agenda-tijd" id="agenda-tijd">-->-->
<!--<!--            <option value="1">12:00 tot 13:00</option>-->-->
<!--<!--            <option value="2">12:00 tot 14:00</option>-->-->
<!--<!--        </select>-->-->
<!--<!--        <input type="submit" value="bekijken">-->-->
<!--<!--    </form>-->-->
<!--<!---->-->
<!--<!--    <p id="agenda-bericht"></p>-->-->
<!--<!--    <p id="agenda-submit">submit</p>-->-->
<!--<!---->-->
<?php //////$date = get_field('datum_les_1_1', 107); echo date_i18n('Y-m-d', $start);  ?>
<!--<!--    <script type="text/javascript">-->-->
<!--<!--        jQuery(function($) {-->-->
<!--<!--            $(document).ready(function() {-->-->
<!--<!---->-->
<!--<!--                $('#agenda-submit').click(function(){-->-->
<!--<!---->-->
<!--<!---->-->
<!--<!--                    var inputDate = new Date(datum);-->-->
<!--<!--//                    var todaysDate = new Date();-->-->
<!--<!--                    var datum = $('#agenda-datum').val();-->-->
<!--<!--                    var todaysDate = "-->--><?php ////$date = DateTime::createFromFormat($format_in, get_field('datum_les_1_1', 107)); ?>
<!---->
<!--<!--//                    alert(datum); // input-->-->
<!--<!--//                    alert(todaysDate); //db-->-->
<!--<!--//                });-->-->
<!--<!--//            });-->-->
<!--<!--//        });-->-->
<!--<!--//    </script>-->-->
<!---->
<!---->
<!---->
<!---->
<?php
//
///*
//*  get all custom fields and dump for testing
//*/
//
//$fields = get_fields(107);
//var_dump( $fields );
//
///*
//*  get all custom fields, loop through them and load the field object to create a label => value markup
//*/
//
//$fields = get_fields(107);
//
//if( $fields )
//{
//    foreach( $fields as $field_name => $value )
//    {
//        // get_field_object( $field_name, $post_id, $options )
//        // - $value has already been loaded for us, no point to load it again in the get_field_object function
//        $field = get_field_object($field_name, false, array('load_value' => false));
//
//        echo '<div>';
//        echo '<h3>' . $field_name . '</h3>';
//        echo $value;
//        echo '</div>';
//    }
//}
//
//?>
<!---->
<!---->
<!---->
<!---->
<?php
////convert db data van ACF naar goede format
//$format_in = 'Ymd'; // the format your value is saved in (set in the field options)
//$format_out = 'Y-m-d'; // the format you want to end up with
//
////datums vanuit database
//$date = DateTime::createFromFormat($format_in, get_field('datum_les_1_1', 107));
//
////haalt datums op met goed format
//if(isset($_POST['SubmitButton'])){ //check if form was submitted
//
////    var_dump($_POST);
//
//    $agenda_datum = $_POST['agenda_datum']; //get input datum
//    $agenda_tijd = $_POST['agenda_tijd']; //get input tijd
//
//    $acf_agenda_tijd = get_field('tijd_les_1_1', 107);
//    $message = "Success! You entered.";
//}
//?>
<!---->
<!--<form action="" method="post">-->
<!--    --><?php // if(isset($_POST['SubmitButton'])){ //check if form was submitted
//        $input = $_POST['agenda_datum']; //get input text
//        echo $input;
//    } ?>
<!--    <br>-->
<!--    --><?php //echo $date->format( $format_out ) . '     ' . $acf_agenda_tijd;?>
<!---->
<!--    <div class="form-group">-->
<!--        <input type="date" name="agenda_datum" id="agenda_datum">-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <select name="agenda_tijd" id="agenda_tijd">-->
<!--            <option value="1200_1400">12:00 - 14:00</option>-->
<!--            <option value="1500_1700">15:00 - 17:00</option>-->
<!--        </select>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <input type="submit" name="SubmitButton"/>-->
<!--    </div>-->
<!--</form>-->
<!---->
<!--<br>-->
<!--<br>-->
<!---->
<?php
////check of datums overeenkomen
//if($agenda_datum == $date->format( $format_out ) ){
//    echo '<h1>Datums komen overeen</h1><br>';
//} else {
//    echo '<h1>Datums komen niet overeen</h1><br>';
//}
//
////check of tijden overeenkomen
//if($agenda_tijd == $acf_agenda_tijd ){
//    echo '<h1>Tijden komen overeen</h1><br>';
//} else {
//    echo '<h1>Tijden komen niet overeen</h1><br>';
//}
//?>
<!---->
<!---->
<!---->
<?php //get_footer(); ?>
<!---->
<!---->
