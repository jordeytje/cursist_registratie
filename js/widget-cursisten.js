jQuery(function($) {
    $(document).ready(function(){
        //geeft value zelfde value als title
        var title = $('#poststuff').find('#titlewrap').find('input');

        $(title).keyup(function () {
            var titleval = $('#poststuff').find('#titlewrap').find('input').val();

            $('#acf-field-value').val(titleval);

            //vervangt spatie met underscore
            var textValue = title.val().toLowerCase();
            textValue = textValue.replace(/ /g,"_");
            $('#acf-field-value').val(textValue);
        });
//
////      verandert spatie in underscore
//        $("#acf-field-value").keyup(function () {
//            var textValue = $(this).val();
//            textValue = textValue.replace(/ /g,"_");
//            $(this).val(textValue);
//        });
    });
});
