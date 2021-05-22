$(document).ready(function () {       
    $("#portfolio-wrapper").magnificPopup({
        delegate: 'a'
        , type: 'image'
        , gallery: {
            enabled: true
        }
        , zoom: {
            enabled: true
            , duration: 300
            , easing: 'ease-in-out'
            , opener: function (openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });
    
    //Create Category
    $("#enquiry_form").validate({
        rules: {
                contact_name: {
                    required: true
                }
                , company_name: {
                    required: true
                }
                , your_message: {
                    required: true
                }
                , email: {
                    required: true,
                    email: true,
                }
        }
        
        , messages: {
                contact_name: "Please Type Your Name"
                , company_name: "Please Type Your Company Name"
                , your_message: "Please Type Your Your Message"
                , email: "Please Type Your Email Address"
        }
        
        , submitHandler: function (form) {
            var checkedValue = [];
            $.each($(".category:checked"), function(){
                checkedValue.push($(this).val());
            });
            
            data = {
                "contact_name": $('#contact_name').val()
                , "company_name": $('#company_name').val()
                , "your_message": $('#your_message').val()
                , "category" : checkedValue
                , "email": $('#email').val()
                , "action": "create_enquiry"
            }
            
            , $.ajax({
                url: "form.php"
                , type: "POST"
                , data: data
                , success: function (result) {
                    $('#contact_name').val('');
                    $('#company_name').val('');
                    $('#your_message').val('');
                    $('.category').prop('checked', false);
                    $('#email').val('');
                    toastr.success("Enquiry Sent Successfully");
                }
                , error: function (result) {
                    toastr.error("Failed to send enquiry");
                }
            });
        }
    });
});

    
