<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $source = "Member";
    include_once("includes/header.php");
    include_once("classes/User.php");
    include_once("classes/Functions.php");
    
    $user = new User();
    $email = $user->checkUser();
    $user_role = $_SESSION['member_role'];
    if($user_role == 'admin'){
?>

<body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <?php
                include_once("includes/sidebar.php")
            ?>
                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">
                    <!-- Main Content -->
                    <div id="content">
                        <?php 
                         include_once("includes/navbar.php")
                        ?>
                            <!-- Begin Page Content -->
                            <div class="container-fluid">
                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800"></h1> </div>
                                <?php 
                                    $source = "";
                                    if( isset( $_GET['source'] ) ){
                                        $source = $_GET['source'];  
                                    }
                                    switch($source){

                                        case 'add_member':
                                        include_once("includes/members/add-member.php");
                                        break;

                                        case 'edit_member':
                                        include_once("includes/members/edit-member.php");
                                        break;

                                        default: 
                                        include_once("includes/members/view-member.php");
                                        break;
                                    }
//                                    include_once("includes/modal-delete.php");
                                ?>
                            </div>
                            <!-- /.container-fluid -->
                    </div>
                    <!-- End of Main Content -->                
                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto"> <span>Copyright &copy; Your Website 2020</span> </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->
                </div>
                <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i> </a>
        <?php  include_once("includes/footer.php"); ?>
        
       <script>     
        ! function (t) {
            "use strict";
            var n = function () {};
            n.prototype.init = function () {
                t(".delete-member").click(function (e) {
                    var mid = $(this).attr('data-member-id');
                     e.preventDefault(); //cancel default action
                     swal({
                         title: "Are you sure, you wanna delete this member entry?",
                         text: "You won't be able to revert this!",
                         icon: "warning",
                         buttons: [true, "Yes, delete it!"],
                     }).then((willDelete) => {
                         if (willDelete) {
                            $.ajax({
                                type: 'POST',
                                  url: 'includes/delete-record.php',
                                 data: 'mid=' + mid + "&manage=member"
                                }).done(function(){
                                    swal({
                                        title: "Deleted !",
                                        text: "Member has been deleted!",
                                        icon: "success",
                                        buttons: "ok",
//                                        confirmButtonClass: "btn btn-confirm mt-2"
                                    }).then(function(){
                                        self.location = "member.php"
                                    })
                                })
                            } else {
                                swal({
                                     title: "Issue !",
                                     text: "There was issue deleteing member, please try again later!",
                                     icon: "error",
                                     confirmButtonClass: "btn btn-confirm mt-2"
                                })
                            }                
                    })
                })
                
            }
            , t.SweetAlert = new n
            , t.SweetAlert.Constructor = n
        }
    
            (window.jQuery),
            function (t) {
                "use strict";
                t.SweetAlert.init()
            }(window.jQuery);
        </script>
    </body>

    <?php
    } elseif($user_role == 'Society Member')
    {
    ?>
        
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <?php
                include_once("includes/sidebar.php")
            ?>
                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">
                    <!-- Main Content -->
                    <div id="content">
                        <?php 
                         include_once("includes/navbar.php")
                        ?>
                            <!-- Begin Page Content -->
                            <div class="container-fluid">
                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800"></h1> </div>
                                <?php 
                                    $source = "";
                                    if( isset( $_GET['source'] ) ){
                                        $source = $_GET['source'];  
                                    }
                                    switch($source){

                                        case 'add_member':
                                        include_once("includes/member/add-member.php");
                                        break;

                                        case 'edit_member':
                                        include_once("includes/member/edit-member.php");
                                        break;

                                        default: 
                                        include_once("includes/member/view-member.php");
                                        break;
                                    }
//                                    include_once("includes/modal-delete.php");
                                ?>
                            </div>
                            <!-- /.container-fluid -->
                    </div>
                    <!-- End of Main Content -->                
                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto"> <span>Copyright &copy; Your Website 2020</span> </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->
                </div>
                <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        <!-- Scroll to Top Button-->
    <?php
    }
    else{
        echo "<h1>You are not allowed to view this part</h1><a href='logout.php'>back</a>";
    }
  
    ?>
        <a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i> </a>
        <?php  include_once("includes/footer.php"); ?>
        
       </body>

    <?php include_once("includes/scripts/show-notifications.php");?>
</html>

