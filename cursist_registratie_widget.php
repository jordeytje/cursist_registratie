<?php

class cr_preference_calender extends WP_Widget {
    //details
    function __construct(){
        parent::__construct(false, $name = __('Voorkeur Kalender'));
    }
    //adminpanel data regelen met form
    function form($instance){

    }
    //update form data
    function update($new_instance, $old_instance){

    }
    //display
    function widget($args, $instance){
        ?>
        <div class="widget preference-calender">
            <div style="text-align: center;">
                <h2>Zelf ook een cursus volgen of liever een workshop?</h2>
                <h4>Vul hieronder uw voorkeur in en neem contact op.</h4>
            </div>
            <?php $_POST = array(); ?>
            <form action="http://djschoolinternational.com/inschrijven" method="post">
                <?php
                $widget_content = new wp_query([
                    'category_name' => 'cursus',
                    'post_type' => 'cr_voorkeur_widget'
                ]);
                ?>
                <div class="form-group" style="margin-bottom: 15px">
                    <label for="cr_agenda_cursus">Maak een keuze</label>
                    <select name="cr_agenda_cursus" id="cr_agenda_cursus" style="display: block; width: 100%; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; border: 1px solid #ccc;">
                        <option value="invalid" selected>Maak een keuze</option>
                        <?php while ( $widget_content->have_posts() ) : $widget_content->the_post(); ?>
                            <option value="<?php global $post_id; echo get_field('value', $post_id); ?>"><?php the_title(); ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <?php
                $widget_content_dj = new wp_query([
                    'category_name' => 'dj',
                    'post_type' => 'cr_voorkeur_widget'
                ]);
                ?>
                <div class="form-group selectdj" style="margin-bottom: 15px; display: none;">
                    <label for="cr_agenda_cursus_dj">Cursus DJ, maak een keuze</label>
                    <select class="cr_select_dj" name="cr_agenda_cursus_dj" id="cr_agenda_cursus_dj" style="display: block; width: 100%; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; border: 1px solid #ccc;">
                        <?php while ( $widget_content_dj->have_posts() ) : $widget_content_dj->the_post(); ?>
                            <option value="<?php global $post_id; echo get_field('value', $post_id); ?>"><?php the_title(); ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <?php
                $widget_content_produceren = new wp_query([
                    'category_name' => 'produceren',
                    'post_type' => 'cr_voorkeur_widget'
                ]);
                ?>
                <div class="form-group selectproduceren" style="margin-bottom: 15px; display: none;">
                    <label for="cr_agenda_cursus_produceren">Cursus Produceren, maak een keuze</label>
                    <select class="cr_select_produceren" name="cr_agenda_cursus_produceren" id="cr_agenda_cursus_produceren" style="display: block; width: 100%; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; border: 1px solid #ccc;">
                        <?php while ( $widget_content_produceren->have_posts() ) : $widget_content_produceren->the_post(); ?>
                            <option value="<?php global $post_id; echo get_field('value', $post_id); ?>"><?php the_title(); ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <?php
                $widget_content_digitaal_mixen = new wp_query([
                    'category_name' => 'digitaal mixen',
                    'post_type' => 'cr_voorkeur_widget'
                ]);
                ?>
                <div class="form-group selectdigitaal" style="margin-bottom: 15px; display: none;">
                    <label for="cr_agenda_cursus_digitaal_mixen">Cursus Digitaal mixen, maak een keuze</label>
                    <select class="cr_select_digitaal_mixen" name="cr_agenda_cursus_digitaal_mixen" id="cr_agenda_cursus_digitaal_mixen" style="display: block; width: 100%; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; border: 1px solid #ccc;">
                        <?php while ( $widget_content_digitaal_mixen->have_posts() ) : $widget_content_digitaal_mixen->the_post(); ?>
                            <option value="<?php global $post_id; echo get_field('value', $post_id); ?>"><?php the_title(); ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <?php
                $widget_content_difficulty = new wp_query([
                    'category_name' => 'cursus moeilijkheidsgraad',
                    'post_type' => 'cr_voorkeur_widget'
                ]);
                ?>
                <div class="form-group selectdifficulty" style="margin-bottom: 15px; display: none;">
                    <label for="cr_agenda_cursus_difficulty">Kies wat voor type cursus</label>
                    <select class="cr_select_cursus_difficulty" name="cr_agenda_cursus_difficulty" id="cr_agenda_cursus_difficulty" style="display: block; width: 100%; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px">
                        <?php while ( $widget_content_difficulty->have_posts() ) : $widget_content_difficulty->the_post(); ?>
                            <option value="<?php global $post_id; echo get_field('value', $post_id); ?>"><?php the_title(); ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <?php
                $widget_content_cursistenaantal = new wp_query([
                    'category_name' => 'cursisten aantal',
                    'post_type' => 'cr_voorkeur_widget'
                ]);
                ?>
                <div class="form-group selectcursistenaantal" style="margin-bottom: 15px; display: none;">
                    <label for="cr_agenda_cursistenaantal">Kies hoeveel cursisten</label>
                    <select class="cr_select_cursistenaantal" name="cr_agenda_cursistenaantal" id="cr_agenda_cursistenaantal" style="display: block; width: 100%; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px">
                        <?php while ( $widget_content_cursistenaantal->have_posts() ) : $widget_content_cursistenaantal->the_post(); ?>
                            <option value="<?php global $post_id; echo get_field('value', $post_id); ?>"><?php the_title(); ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <?php
                $widget_content_workshops = new wp_query([
                    'category_name' => 'workshops',
                    'post_type' => 'cr_voorkeur_widget'
                ]);
                ?>
                <div class="form-group selectworkshops" style="margin-bottom: 15px; display: none;">
                    <label for="cr_agenda_cursus_workshops">Workshops, kies een locatie</label>
                    <select class="cr_select_workshops" name="cr_agenda_cursus_workshops" id="cr_agenda_cursus_workshops" style="display: block; width: 100%; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; border: 1px solid #ccc;">
                        <?php while ( $widget_content_workshops->have_posts() ) : $widget_content_workshops->the_post(); ?>
                            <option value="<?php global $post_id; echo get_field('value', $post_id); ?>"><?php the_title(); ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <?php
                $widget_content_juniorfeestje = new wp_query([
                    'category_name' => 'juniorfeestje',
                    'post_type' => 'cr_voorkeur_widget'
                ]);
                ?>
                <div class="form-group selectjuniorsfeestje" style="margin-bottom: 15px; display: none;">
                    <label for="cr_agenda_cursus_juniorfeestje">Juniorfeestje, maak een keuze</label>
                    <select class="cr_select_juniorfeestje" name="cr_agenda_cursus_juniorfeestje" id="cr_agenda_cursus_juniorfeestje" style="display: block; width: 100%; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; border: 1px solid #ccc;">
                        <?php while ( $widget_content_juniorfeestje->have_posts() ) : $widget_content_juniorfeestje->the_post(); ?>
                            <option value="<?php global $post_id; echo get_field('value', $post_id); ?>"><?php the_title(); ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <?php
                $widget_content_huren = new wp_query([
                    'category_name' => 'huren',
                    'post_type' => 'cr_voorkeur_widget'
                ]);
                ?>
                <div class="form-group selecthuren" style="margin-bottom: 15px; display: none;">
                    <label for="cr_agenda_cursus_huren">Huren van de ruimtes</label>
                    <select class="cr_select_huren" name="cr_agenda_cursus_huren" id="cr_agenda_cursus_huren" style="display: block; width: 100%; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; border: 1px solid #ccc;">
                        <?php while ( $widget_content_huren->have_posts() ) : $widget_content_huren->the_post(); ?>
                            <option value="<?php global $post_id; echo get_field('value', $post_id); ?>"><?php the_title(); ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="cr_agenda_datum">Kies een datum</label>
                    <input style="display: block; width: 100%; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px" type="date" name="cr_agenda_datum" id="cr_agenda_datum">
                </div>
                <div class="form-group two-oolumns" style="margin-bottom: 15px; width: 48%; display: inline-block; float:left;">
                    <label for="cr_agenda_tijd_begin">Kies een begin tijd</label>
                    <select style="display: block; width: 100%; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px" name="cr_agenda_tijd_begin" id="cr_agenda_tijd_begin">
                        <option value="10_uur">10:00</option>
                        <option value="11_uur">11:00</option>
                        <option value="12_uur">12:00</option>
                        <option value="13_uur">13:00</option>
                        <option value="14_uur">14:00</option>
                        <option value="15_uur">15:00</option>
                        <option value="16_uur">16:00</option>
                        <option value="17_uur">17:00</option>
                        <option value="18_uur">18:00</option>
                        <option value="19_uur">19:00</option>
                        <option value="20_uur">20:00</option>
                        <option value="21_uur">21:00</option>
                        <option value="22_uur">22:00</option>
                    </select>
                </div>
                <div class="form-group two-oolumns" style="margin-left: 4%; margin-bottom: 15px; width: 48%; display: inline-block; float:left;">
                    <label for="cr_agenda_tijd_eind">Kies een eind tijd</label>
                    <select style="display: block; width: 100%; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.42857143; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px" name="cr_agenda_tijd_eind" id="cr_agenda_tijd_eind">
                        <option value="10_uur">10:00</option>
                        <option value="11_uur">11:00</option>
                        <option value="12_uur">12:00</option>
                        <option value="13_uur">13:00</option>
                        <option value="14_uur">14:00</option>
                        <option value="15_uur">15:00</option>
                        <option value="16_uur">16:00</option>
                        <option value="17_uur">17:00</option>
                        <option value="18_uur">18:00</option>
                        <option value="19_uur">19:00</option>
                        <option value="20_uur">20:00</option>
                        <option value="21_uur">21:00</option>
                        <option value="22_uur">22:00</option>
                    </select>
                </div>
                <div class="form-group" style="margin-bottom: 15px; text-align: center">
                    <p style="clear: both;" id="widget-error-message"></p>
                    <p id="validate" style="cursor: pointer; clear: both; color: white; margin: 0 auto; padding: 5px; background: #d60056; border-radius: 20px; width: 150px; border: none;" >Verder</p>
                    <input id="cursus_inplannen" type="submit" value="Cursus inplannen" style="margin: 0 auto ;display: none; color: white; font-weight: 500; padding: 5px; background: #d60056; border-radius: 20px; width: 150px; border: none;">
                </div>
            </form>
        </div>
        <script>
            jQuery(function($){
                $(document).ready(function(){
                    //change validate text on hover
                    $('#validate').mouseenter(function(){
                        $(this).text('Valideer');
                    });
                    $('#validate').mouseleave(function(){
                        $(this).text('Verder');
                    });

                    //if radiobutton cursus is checked
                    $('#cr_agenda_choice_cursus').click(function() {
                        if($('#cr_agenda_choice_cursus').is(':checked')) { alert("cursus"); }
                    });

                    //if radiobutton workshop is checked
                    $('#cr_agenda_choice_workshop').click(function() {
                        if($('#cr_agenda_choice_workshop').is(':checked')) { alert("workshop"); }
                    });

                    //based on what is selected as cursus CHANGE FUNCTION
                    $('#cr_agenda_cursus').change(function(){
                        var selectedoption =  $('#cr_agenda_cursus').val();

                        //disable all
                        function cr_HideAndDisabled(){
                            //disable
                            $('.cr_select_dj, .cr_select_produceren, .cr_select_digitaal_mixen, .cr_select_cursus_difficulty, .cr_select_cursistenaantal, .cr_select_workshops, .cr_select_juniorfeestje, .cr_select_huren ').prop('disabled', 'disabled');
                            //hide
                            $('.selectdj, .selectdigitaal, .selectproduceren, .selectdifficulty, .selectcursistenaantal, .selectworkshops, .selectjuniorsfeestje, .selecthuren').css('display', 'none');
                        }

                        //if option is equal to dj
                        if (selectedoption == 'dj'){
                            console.log('dj if');
                            //disable and hide other options code
                            cr_HideAndDisabled();
                            //show option code
                            $('.selectdj, .selectcursistenaantal').css('display', 'block');
                            //get option code
                            $('.cr_select_dj, .cr_select_cursistenaantal').removeAttr('disabled');
                        }

                        //if option is equal to produceren
                        if (selectedoption == 'produceren'){
                            console.log('produ if');
                            //disable and hide other options code
                            cr_HideAndDisabled();
                            //show option code
                            $('.selectproduceren, .selectdifficulty, .selectcursistenaantal').css('display', 'block');
                            //get option code
                            $('.cr_select_produceren, .cr_select_cursus_difficulty, .cr_select_cursistenaantal').removeAttr('disabled');
                        }

                        //if option is equal to digitaal mixen
                        if (selectedoption == 'digitaal_mixen'){
                            console.log('digi if');
                            //disable and hide other options code
                            cr_HideAndDisabled();
                            //show option code
                            $('.selectdigitaal, .selectdifficulty, .selectcursistenaantal').css('display', 'block');
                            //get option code
                            $('.cr_select_digitaal_mixen, .cr_select_cursus_difficulty, .cr_select_cursistenaantal').removeAttr('disabled');
                        }

                        //if option is equal to workshops
                        if (selectedoption == 'workshops'){
                            console.log('work if');
                            //disable and hide other options code
                            cr_HideAndDisabled();
                            //show option code
                            $('.selectworkshops').css('display', 'block');
                            //get option code
                            $('.cr_select_workshops').removeAttr('disabled');
                        }

                        //if option is equal to juniorfeestje
                        if (selectedoption == 'juniorfeestje'){
                            console.log('juni if');
                            //disable and hide other options code
                            cr_HideAndDisabled();
                            //show option code
                            $('.selectjuniorsfeestje').css('display', 'block');
                            //get option code
                            $('.cr_select_juniorfeestje').removeAttr('disabled');
                        }

                        //if option is equal to huren
                        if (selectedoption == 'huren'){
                            console.log('hure if');
                            //disable and hide other options code
                            cr_HideAndDisabled();
                            //show option code
                            $('.selecthuren').css('display', 'block');
                            //get option code
                            $('.cr_select_huren').removeAttr('disabled');
                        }

                        //if option is equal to invalid
                        if (selectedoption == 'invalid'){
                            console.log('inva if');
                            //disable and hide other options code
                            cr_HideAndDisabled();
                        }

                    });

                    //validation when click on validate
                    $('#validate, #cursus_inplannen').click(function(){
                        var begin_tijd = $('#cr_agenda_tijd_begin').val();  //time 1
                        var eind_tijd = $('#cr_agenda_tijd_eind').val();    //time2
                        var cursus_datum = $('#cr_agenda_datum').val();     //date
                        var cursus = $('#cr_agenda_cursus').val();          //cursus
                        var no_entry = 0;                                   //validation

                        //submit disabled
                        $('#cursus_inplannen').prop('disabled', true);

                        //if times are the same give error
                        if (begin_tijd == eind_tijd){
                            $('#cursus_inplannen').prop('disabled', true);
                            no_entry = 1;
                            $('#cursus_inplannen').css('display', 'none');
                            $('#widget-error-message').text('De begin en eind tijd zijn hetzelfde of ongeldig, probeert u het nogmaals.');
                        }

                        //if date is empty get error
                        if (cursus_datum == ''){
                            $('#cursus_inplannen').prop('disabled', true);
                            no_entry = 1;
                            $('#cursus_inplannen').css('display', 'none');
                            $('#widget-error-message').text('Deze datum is ongeldig, probeert u het opnieuw.');
                        }

                        if (cursus == 'invalid'){
                            $('#cursus_inplannen').prop('disabled', true);
                            no_entry = 1;
                            $('#cursus_inplannen').css('display', 'none');
                            $('#widget-error-message').text('Deze cursus is ongeldig, probeert u het opnieuw.');
                        }

                        //if no_entry is NOT 1 you can continue
                        if (no_entry == 1){
                            $('#cursus_inplannen').prop('disabled', true);
                            $('#validate').css('display', 'block');
                            $('#cursus_inplannen').css('display', 'none');
                        }else {
                            $('#cursus_inplannen').prop('disabled', false);
                            $('#validate').css('display', 'none');
                            $('#widget-error-message').text('Klik op cursus inplannen om verder te gaan.');
                            $('#cursus_inplannen').css('display', 'block');
                        }
                    });

                });
            });
        </script>
        <?php
    }
}

add_action('widgets_init', function(){
    register_widget('cr_preference_calender');
});
?>