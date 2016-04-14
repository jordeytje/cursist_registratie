<?php ////get_header(); ?>
<!--    <style>-->
<!--        .drie-columns {-->
<!--            width: 33%;-->
<!--            float: left;-->
<!--        }-->
<!---->
<!--        .vier-columns {-->
<!--            width: 25%;-->
<!--            float: left;-->
<!--        }-->
<!---->
<!--        .cr_row {-->
<!--            width: 80%;-->
<!--            margin: 0 auto;-->
<!--            clear: both;-->
<!--        }-->
<!--    </style>-->
<!---->
<!--<div class="cr_row">-->
<!--    <h2>--><?php //the_title(); ?><!--</h2><br>-->
<!--    <h3 style="font-size: 21px;">Naw Gegevens</h3><hr><br>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="drie-columns">-->
<!--            <h3>Voornaam</h3>-->
<!--            <p>--><?php //echo get_field('voornaam'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="drie-columns">-->
<!--            <h3>Tussenvoegsel</h3>-->
<!--            <p>--><?php //echo get_field('tussenvoegsel'); ?><!-- </p>-->
<!--        </div>-->
<!--        <div class="drie-columns">-->
<!--            <h3>Achternaam</h3>-->
<!--            <p>--><?php //echo get_field('achternaam'); ?><!-- </p>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="drie-columns">-->
<!--            <h3>E-mail</h3>-->
<!--            <p>--><?php //echo get_field('e-mail'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="drie-columns">-->
<!--            <h3>Telefoon (mobiel)</h3>-->
<!--            <p>--><?php //echo get_field('mobiel'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="drie-columns">-->
<!--            <h3>Telefoon (thuis)</h3>-->
<!--            <p>--><?php //echo get_field('thuis'); ?><!-- </p>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="drie-columns">-->
<!--            <h3>Adres</h3>-->
<!--            <p>--><?php //echo get_field('adres'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="drie-columns">-->
<!--            <h3>Huisnummer</h3>-->
<!--            <p>--><?php //echo get_field('huisnummer'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="drie-columns">-->
<!--            <h3>Huisnr. toevoegsel</h3>-->
<!--            <p>--><?php //echo get_field('toevoegsel'); ?><!-- </p>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div>-->
<!--        <div class="drie-columns">-->
<!--            <h3>Plaats</h3>-->
<!--            <p>--><?php //echo get_field('plaats'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="drie-columns">-->
<!--            <h3>Postcode</h3>-->
<!--            <p>--><?php //echo get_field('postcode'); ?><!-- </p>-->
<!--        </div>-->
<!--        <div class="drie-columns">-->
<!--            <h3></h3>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->
<!---->
<!--<!--    cursus gegevens-->-->
<!--    <br><br>-->
<!--<div class="cr_row">-->
<!--    <h3 style="font-size: 21px; clear: both; margin-top: 50px;">Cursus Gegevens</h3><hr><br>-->
<!--    <div class="row">-->
<!--        <div class="vier-columns">-->
<!--            <h3>Cursus:</h3>-->
<!--            <p>--><?php //echo get_field('cursus'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Les type:</h3>-->
<!--            <p>--><?php //echo get_field('les_type'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Begin datum:</h3>-->
<!--            <p>--><?php //echo get_field('begin_datum'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Eind datum:</h3>-->
<!--            <p>--><?php //echo get_field('eind_datum'); ?><!-- </p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Status:</h3>-->
<!--            <p>--><?php //echo get_field('status'); ?><!-- </p>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="vier-columns">-->
<!--            <h3>Datum les 1</h3>-->
<!--            <p>--><?php //echo get_field('datum_les_1_1'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Tijd les 1</h3>-->
<!--            <p>--><?php //echo get_field('tijd_les_1_1'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Datum les 2</h3>-->
<!--            <p>--><?php //echo get_field('datum_les_2_1'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Tijd les 2</h3>-->
<!--            <p>--><?php //echo get_field('tijd_les_2_1'); ?><!--</p>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="vier-columns">-->
<!--            <h3>Datum les 3</h3>-->
<!--            <p>--><?php //echo get_field('datum_les_3_1'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Tijd les 3</h3>-->
<!--            <p>--><?php //echo get_field('tijd_les_3_1'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Datum les 4</h3>-->
<!--            <p>--><?php //echo get_field('datum_les_4_1'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Tijd les 4</h3>-->
<!--            <p>--><?php //echo get_field('tijd_les_4_1'); ?><!--</p>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="vier-columns">-->
<!--            <h3>Datum les 5</h3>-->
<!--            <p>--><?php //echo get_field('datum_les_5_1'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Tijd les 5</h3>-->
<!--            <p>--><?php //echo get_field('tijd_les_5_1'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Datum les 6</h3>-->
<!--            <p>--><?php //echo get_field('datum_les_6_1'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Tijd les 6</h3>-->
<!--            <p>--><?php //echo get_field('tijd_les_6_1'); ?><!--</p>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="vier-columns">-->
<!--            <h3>Datum les 7</h3>-->
<!--            <p>--><?php //echo get_field('datum_les_7_1'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Tijd les 7</h3>-->
<!--            <p>--><?php //echo get_field('tijd_les_7_1'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Datum les 8</h3>-->
<!--            <p>--><?php //echo get_field('datum_les_8_1'); ?><!--</p>-->
<!--        </div>-->
<!--        <div class="vier-columns">-->
<!--            <h3>Tijd les 8</h3>-->
<!--            <p>--><?php //echo get_field('tijd_les_8_1'); ?><!--</p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<?php ////get_footer(); ?>

<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post();
    the_title();
    echo '<h1>HALLO</h1>';
    echo '<div class="entry-content">';
    the_field('cursus_cr');
    echo '</div>';
endwhile; endif;
get_footer();
?>