jQuery(function($) {
    $(document).ready(function(){

        //generate html buttons
        $('.acf_postbox').find('#acf-opmerkingen').after('<p class="customButton">+</p>');
        $('.acf_postbox').find('#acf-opmerkingen2').after('<p class="customButton">+</p>');
        $('.acf_postbox').find('#acf-opmerkingen3').after('<p class="customButton">+</p>');
        $('.acf_postbox').find('#acf-opmerkingen4').after('<p class="customButton">+</p>');
        $('.acf_postbox').find('#acf-opmerkingen5').after('<p class="customButton">+</p>');
        $('.acf_postbox').find('#acf-opmerkingen6').after('<p class="customButton">+</p>');
        $('.acf_postbox').find('#acf-opmerkingen7').after('<p class="customButton">+</p>');
        $('.acf_postbox').find('#acf-opmerkingen8').after('<p class="customButton">+</p>');
        $('.acf_postbox').find('#acf-opmerkingen9').after('<p class="customButton">+</p>');

        $('.acf_postbox').css('display', 'none');
        $('.acf_postbox:first').css('display', 'block');
        $('.acf_postbox:nth-child(2)').css('display', 'block');

        // add box button + text change
        $('.customButton').click(function(){
            $(this).parent().parent().next().slideToggle("fast");
            var $this = $(this);
            $this.toggleClass('SeeMore2');
            if($this.hasClass('SeeMore2')){
                $this.text('-');
            } else {
                $this.text('+');
            }
        });

        //agenda fields
        //cursus 1
        $('.acf_postbox').find('#acf-datum_les_1_1, #acf-datum_les_2_1, #acf-datum_les_3_1, #acf-datum_les_4_1, #acf-datum_les_5_1, #acf-datum_les_6_1, #acf-datum_les_7_1').before('<p class="customButton2">+</p>');
        $('.acf_postbox').find('#acf-datum_les_8_1').before('<p class="fillUp"></p>');

        $('#acf-datum_les_2_1, #acf-tijd_les_2_1, #acf-datum_les_3_1, #acf-tijd_les_3_1, #acf-datum_les_4_1, #acf-tijd_les_4_1, #acf-datum_les_5_1, #acf-tijd_les_5_1, #acf-datum_les_6_1, #acf-tijd_les_6_1, #acf-datum_les_7_1, #acf-tijd_les_7_1, #acf-datum_les_8_1, #acf-tijd_les_8_1').css('display', 'none');
        $('#acf-datum_les_2_1, #acf-tijd_les_2_1, #acf-datum_les_3_1, #acf-tijd_les_3_1, #acf-datum_les_4_1, #acf-tijd_les_4_1, #acf-datum_les_5_1, #acf-tijd_les_5_1, #acf-datum_les_6_1, #acf-tijd_les_6_1, #acf-datum_les_7_1, #acf-tijd_les_7_1, #acf-datum_les_8_1, #acf-tijd_les_8_1').prev().css('display', 'none');

        //momenteel 2 niet aanwezig
        $('#acf-datum_les_2_2, #acf-tijd_les_2_2, #acf-datum_les_3_2, #acf-tijd_les_3_2, #acf-datum_les_4_2, #acf-tijd_les_4_2, #acf-datum_les_5_2, #acf-tijd_les_5_2, #acf-datum_les_6_2, #acf-tijd_les_6_2, #acf-datum_les_7_2, #acf-tijd_les_7_2, #acf-datum_les_8_2, #acf-tijd_les_8_2').css('display', 'none');
        $('#acf-datum_les_2_2, #acf-tijd_les_2_2, #acf-datum_les_3_2, #acf-tijd_les_3_2, #acf-datum_les_4_2, #acf-tijd_les_4_2, #acf-datum_les_5_2, #acf-tijd_les_5_2, #acf-datum_les_6_2, #acf-tijd_les_6_2, #acf-datum_les_7_2, #acf-tijd_les_7_2, #acf-datum_les_8_2, #acf-tijd_les_8_2').prev().css('display', 'none');
        //

        //cursus 3
        $('.acf_postbox').find('#acf-datum_les_1_3, #acf-datum_les_2_3, #acf-datum_les_3_3, #acf-datum_les_4_3, #acf-datum_les_5_3, #acf-datum_les_6_3, #acf-datum_les_7_3').before('<p class="customButton2">+</p>');
        $('.acf_postbox').find('#acf-datum_les_8_3').before('<p class="fillUp"></p>');

        $('#acf-datum_les_2_3, #acf-tijd_les_2_3, #acf-datum_les_3_3, #acf-tijd_les_3_3, #acf-datum_les_4_3, #acf-tijd_les_4_3, #acf-datum_les_5_3, #acf-tijd_les_5_3, #acf-datum_les_6_3, #acf-tijd_les_6_3, #acf-datum_les_7_3, #acf-tijd_les_7_3, #acf-datum_les_8_3, #acf-tijd_les_8_3').css('display', 'none');
        $('#acf-datum_les_2_3, #acf-tijd_les_2_3, #acf-datum_les_3_3, #acf-tijd_les_3_3, #acf-datum_les_4_3, #acf-tijd_les_4_3, #acf-datum_les_5_3, #acf-tijd_les_5_3, #acf-datum_les_6_3, #acf-tijd_les_6_3, #acf-datum_les_7_3, #acf-tijd_les_7_3, #acf-datum_les_8_3, #acf-tijd_les_8_3').prev().css('display', 'none');

        //cursus 4
        $('.acf_postbox').find('#acf-datum_les_1_4, #acf-datum_les_2_4, #acf-datum_les_3_4, #acf-datum_les_4_4, #acf-datum_les_5_4, #acf-datum_les_6_4, #acf-datum_les_7_4').before('<p class="customButton2">+</p>');
        $('.acf_postbox').find('#acf-datum_les_8_4').before('<p class="fillUp"></p>');

        $('#acf-datum_les_2_4, #acf-tijd_les_2_4, #acf-datum_les_3_4, #acf-tijd_les_3_4, #acf-datum_les_4_4, #acf-tijd_les_4_4, #acf-datum_les_5_4, #acf-tijd_les_5_4, #acf-datum_les_6_4, #acf-tijd_les_6_4, #acf-datum_les_7_4, #acf-tijd_les_7_4, #acf-datum_les_8_4, #acf-tijd_les_8_4').css('display', 'none');
        $('#acf-datum_les_2_4, #acf-tijd_les_2_4, #acf-datum_les_3_4, #acf-tijd_les_3_4, #acf-datum_les_4_4, #acf-tijd_les_4_4, #acf-datum_les_5_4, #acf-tijd_les_5_4, #acf-datum_les_6_4, #acf-tijd_les_6_4, #acf-datum_les_7_4, #acf-tijd_les_7_4, #acf-datum_les_8_4, #acf-tijd_les_8_4').prev().css('display', 'none');

        //cursus 5
        $('.acf_postbox').find('#acf-datum_les_1_5, #acf-datum_les_2_5, #acf-datum_les_3_5, #acf-datum_les_4_5, #acf-datum_les_5_5, #ac1-datum_les_6_5, #acf-datum_les_7_5').before('<p class="customButton2">+</p>');
        $('.acf_postbox').find('#acf-datum_les_8_5').before('<p class="fillUp"></p>');

        $('#acf-datum_les_2_5, #acf-tijd_les_2_5, #acf-datum_les_3_5, #acf-tijd_les_3_5, #acf-datum_les_4_5, #acf-tijd_les_4_5, #acf-datum_les_5_5, #acf-tijd_les_5_5, #acf-datum_les_6_5, #acf-tijd_les_6_5, #acf-datum_les_7_5, #acf-tijd_les_7_5, #acf-datum_les_8_5, #acf-tijd_les_8_5').css('display', 'none');
        $('#acf-datum_les_2_5, #acf-tijd_les_2_5, #acf-datum_les_3_5, #acf-tijd_les_3_5, #acf-datum_les_4_5, #acf-tijd_les_4_5, #acf-datum_les_5_5, #acf-tijd_les_5_5, #acf-datum_les_6_5, #acf-tijd_les_6_5, #acf-datum_les_7_5, #acf-tijd_les_7_5, #acf-datum_les_8_5, #acf-tijd_les_8_5').prev().css('display', 'none');

        //cursus 6
        $('.acf_postbox').find('#acf-datum_les_1_6, #acf-datum_les_2_6, #acf-datum_les_3_6, #acf-datum_les_4_6, #acf-datum_les_5_6, #acf-datum_les_6_6, #acf-datum_les_7_6').before('<p class="customButton2">+</p>');
        $('.acf_postbox').find('#acf-datum_les_8_6').before('<p class="fillUp"></p>');

        $('#acf-datum_les_2_6, #acf-tijd_les_2_6, #acf-datum_les_3_6, #acf-tijd_les_3_6, #acf-datum_les_4_6, #acf-tijd_les_4_6, #acf-datum_les_5_6, #acf-tijd_les_5_6, #acf-datum_les_6_6, #acf-tijd_les_6_6, #acf-datum_les_7_6, #acf-tijd_les_7_6, #acf-datum_les_8_6, #acf-tijd_les_8_6').css('display', 'none');
        $('#acf-datum_les_2_6, #acf-tijd_les_2_6, #acf-datum_les_3_6, #acf-tijd_les_3_6, #acf-datum_les_4_6, #acf-tijd_les_4_6, #acf-datum_les_5_6, #acf-tijd_les_5_6, #acf-datum_les_6_6, #acf-tijd_les_6_6, #acf-datum_les_7_6, #acf-tijd_les_7_6, #acf-datum_les_8_6, #acf-tijd_les_8_6').prev().css('display', 'none');

        //cursus 7
        $('.acf_postbox').find('#acf-datum_les_1_7, #acf-datum_les_2_7, #acf-datum_les_3_7, #acf-datum_les_4_7, #acf-datum_les_5_7, #acf-datum_les_6_7, #acf-datum_les_7_7').before('<p class="customButton2">+</p>');
        $('.acf_postbox').find('#acf-datum_les_8_7').before('<p class="fillUp"></p>');

        $('#acf-datum_les_2_7, #acf-tijd_les_2_7, #acf-datum_les_3_7, #acf-tijd_les_3_7, #acf-datum_les_4_7, #acf-tijd_les_4_7, #acf-datum_les_5_7, #acf-tijd_les_5_7, #acf-datum_les_6_7, #acf-tijd_les_6_7, #acf-datum_les_7_7, #acf-tijd_les_7_7, #acf-datum_les_8_7, #acf-tijd_les_8_7').css('display', 'none');
        $('#acf-datum_les_2_7, #acf-tijd_les_2_7, #acf-datum_les_3_7, #acf-tijd_les_3_7, #acf-datum_les_4_7, #acf-tijd_les_4_7, #acf-datum_les_5_7, #acf-tijd_les_5_7, #acf-datum_les_6_7, #acf-tijd_les_6_7, #acf-datum_les_7_7, #acf-tijd_les_7_7, #acf-datum_les_8_7, #acf-tijd_les_8_7').prev().css('display', 'none');

        //cursus 8
        $('.acf_postbox').find('#acf-datum_les_1_8, #acf-datum_les_2_8, #acf-datum_les_3_8, #acf-datum_les_4_8, #acf-datum_les_5_8, #acf-datum_les_6_8, #acf-datum_les_7_8').before('<p class="customButton2">+</p>');
        $('.acf_postbox').find('#acf-datum_les_8_8').before('<p class="fillUp"></p>');

        $('#acf-datum_les_2_8, #acf-tijd_les_2_8, #acf-datum_les_3_8, #acf-tijd_les_3_8, #acf-datum_les_4_8, #acf-tijd_les_4_8, #acf-datum_les_5_8, #acf-tijd_les_5_8, #acf-datum_les_6_8, #acf-tijd_les_6_8, #acf-datum_les_7_8, #acf-tijd_les_7_8, #acf-datum_les_8_8, #acf-tijd_les_8_8').css('display', 'none');
        $('#acf-datum_les_2_8, #acf-tijd_les_2_8, #acf-datum_les_3_8, #acf-tijd_les_3_8, #acf-datum_les_4_8, #acf-tijd_les_4_8, #acf-datum_les_5_8, #acf-tijd_les_5_8, #acf-datum_les_6_8, #acf-tijd_les_6_8, #acf-datum_les_7_8, #acf-tijd_les_7_8, #acf-datum_les_8_8, #acf-tijd_les_8_8').prev().css('display', 'none');

        //cursus 9
        $('.acf_postbox').find('#acf-datum_les_1_9, #acf-datum_les_2_9, #acf-datum_les_3_9, #acf-datum_les_4_9, #acf-datum_les_5_9, #acf-datum_les_6_9, #acf-datum_les_7_9').before('<p class="customButton2">+</p>');
        $('.acf_postbox').find('#acf-datum_les_8_9').before('<p class="fillUp"></p>');

        $('#acf-datum_les_2_9, #acf-tijd_les_2_9, #acf-datum_les_3_9, #acf-tijd_les_3_9, #acf-datum_les_4_9, #acf-tijd_les_4_9, #acf-datum_les_5_9, #acf-tijd_les_5_9, #acf-datum_les_6_9, #acf-tijd_les_6_9, #acf-datum_les_7_9, #acf-tijd_les_7_9, #acf-datum_les_8_9, #acf-tijd_les_8_9').css('display', 'none');
        $('#acf-datum_les_2_9, #acf-tijd_les_2_9, #acf-datum_les_3_9, #acf-tijd_les_3_9, #acf-datum_les_4_9, #acf-tijd_les_4_9, #acf-datum_les_5_9, #acf-tijd_les_5_9, #acf-datum_les_6_9, #acf-tijd_les_6_9, #acf-datum_les_7_9, #acf-tijd_les_7_9, #acf-datum_les_8_9, #acf-tijd_les_8_9').prev().css('display', 'none');

        //cursus 10
        $('.acf_postbox').find('#acf-datum_les_1_10, #acf-datum_les_2_10, #acf-datum_les_3_10, #acf-datum_les_4_10, #acf-datum_les_5_10, #acf-datum_les_6_10, #acf-datum_les_7_10').before('<p class="customButton2">+</p>');
        $('.acf_postbox').find('#acf-datum_les_8_10').before('<p class="fillUp"></p>');

        $('#acf-datum_les_2_10, #acf-tijd_les_2_10, #acf-datum_les_3_10, #acf-tijd_les_3_10, #acf-datum_les_4_10, #acf-tijd_les_4_10, #acf-datum_les_5_10, #acf-tijd_les_5_10, #acf-datum_les_6_10, #acf-tijd_les_6_10, #acf-datum_les_7_10, #acf-tijd_les_7_10, #acf-datum_les_8_10, #acf-tijd_les_8_10').css('display', 'none');
        $('#acf-datum_les_2_10, #acf-tijd_les_2_10, #acf-datum_les_3_10, #acf-tijd_les_3_10, #acf-datum_les_4_10, #acf-tijd_les_4_10, #acf-datum_les_5_10, #acf-tijd_les_5_10, #acf-datum_les_6_10, #acf-tijd_les_6_10, #acf-datum_les_7_10, #acf-tijd_les_7_10, #acf-datum_les_8_10, #acf-tijd_les_8_10').prev().css('display', 'none');


        // add box button + text change
        $('.customButton2').click(function(){
            $(this).next().next().next().slideToggle("slow");
            $(this).next().next().next().next().slideToggle("slow");
            $(this).next().next().next().next().next().slideToggle("slow");
            var $this = $(this);
            $this.toggleClass('SeeMore2');
            if($this.hasClass('SeeMore2')){
                $this.text('-');
            } else {
                $this.text('+');
            }
        });

        $('#acf-datum_les_1_1, #acf-tijd_les_1_1').on('change', function() {
            var datum_1_1 = $('#acf-datum_les_1_1 input').val();
            var tijd_1_1 = $('#acf-tijd_les_1_1 select').val();
            var combined_1_1 = datum_1_1 + tijd_1_1;
            $('#acf-datum-tijd_1_1 input').val(combined_1_1);

            console.log('datum ' + datum_1_1);
            console.log('tijd ' + tijd_1_1);
            console.log('combined ' + combined_1_1);
        });

        $('#agenda_datum, #agenda_tijd').on('change', function() {
            var user_datum = $('#agenda_datum').val();
            var user_tijd = $('#agenda_tijd').val();
            var combined = user_datum + user_tijd;
            $('#user_combined').val(combined);
            console.log('datum ' + user_datum);
            console.log('tijd ' + user_tijd);
            console.log('combined ' + combined);

            $.ajax({
                url: ajaxurl,
                type: 'GET',
                dataType: 'json',
                data: data,
                success: function(response){
                    alert('success');
                },
                error: function(error) {
                    alert('failed');
                }
            });

        });


    });
});