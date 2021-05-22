toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

function removeSigns() {
    var pin_code = document.getElementById("pin_code");
    input.value = parseInt(input.value.toString().replace('+', '').replace('-', ''));
}

function addFlat() {
    var div = document.createElement("div");
    div.classList.add('form-group')
    const flat = document.getElementById("flat");
    flat.appendChild(div.appendChild(document.createElement("input")))

}

$(document).ready(function () {

    var delay = 500;
    $(".progress-bar").each(function (i) {
        $(this).delay(delay * i).animate({
            width: $(this).attr('aria-valuenow') + '%'
        }, delay);

        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: delay,
            // easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now) + '%');
            }
        });
    });
    // $('.progress .progress-bar').css("width",
    //     function() {
    //         return $(this).attr("aria-valuenow") + "%";
    //     }
    // )

    //Member Validation
    $("#member").validate({
        rules: {
            member_name: {
                required: true
            },
            member_email: {
                required: true,
                email: true
            },
            member_role: {
                required: true
            }
        },
        messages: {
            member_name: "Please Type your Full Name",
            member_email: "Please Type your Email",
            member_role: "Please Select your Role"
        }
    });
});