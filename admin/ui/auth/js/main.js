(function ($) {
    "use strict";

    /***********for Photo Preview***********/

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photo').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#photograph").on("change",function(){
        readURL(this);
    });


    /***********for submit button***********/


// jQuery methods go here...



}(jQuery));