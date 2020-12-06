<script>
    <?php
        if(isset($_SESSION['op'])){
            $op = $_SESSION['op'];
            $page = $_SESSION['page'];
            $p = $_SESSION['p'];

            switch ($page){
                case "member":
                    $notification_for = "Member";
                    break;
            }
            if($op == "add" && $p == "success"){
    ?>

    toastr["success"]("<?php echo $notification_for; ?> Successfully Added", "<?php echo $notification_for; ?> Added")

    toastr.options = {
        "closeButton": false,
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
    <?php
//            $_SESSION['op'] = null;
//            $_SESSION['page'] = null;
//            $_SESSION['p'] = null;
        } else if($op == "update" && $p == "success"){
    ?>
    toastr["info"]("<?php echo $notification_for; ?> Successfully Updated", "<?php echo $notification_for; ?> Updated")

    toastr.options = {
        "closeButton": false,
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
    <?php
            }
        else if($op == "delete" && $p == "success"){
    ?>
    toastr["error"]("<?php echo $notification_for; ?> Successfully Deleted", "<?php echo $notification_for; ?> Deleted")

    toastr.options = {
        "closeButton": false,
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
    <?php
            }

        }
    ?>
</script>