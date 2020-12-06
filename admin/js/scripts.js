toastr.options = {
        "closeButton": true
        , "debug": false
        , "newestOnTop": false
        , "progressBar": true
        , "positionClass": "toast-top-right"
        , "preventDuplicates": false
        , "onclick": null
        , "showDuration": "300"
        , "hideDuration": "1000"
        , "timeOut": "5000"
        , "extendedTimeOut": "1000"
        , "showEasing": "swing"
        , "hideEasing": "linear"
        , "showMethod": "fadeIn"
        , "hideMethod": "fadeOut"
    }

function removeSigns() {
    var pin_code = document.getElementById("pin_code");
    input.value = parseInt(input.value.toString().replace('+', '').replace('-', ''));
}

$(document).ready(function () {
    //Member Validation
    $("#member").validate({
        rules: {
            member_name: {
                required: true
            }
            , 
            member_email: {
                required: true
                , email: true
            } 
            , 
            member_role: {
                required: true
            }
        }
        , messages: {
            member_name: "Please Type your Full Name"
            , member_email: "Please Type your Email"
            , member_role: "Please Select your Role"
        }
    });      
});