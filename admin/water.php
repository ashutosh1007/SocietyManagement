<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $source = "Water";
    include_once("includes/header.php");
    include_once("classes/User.php");
    include_once("classes/Functions.php");
    include_once("classes/Water.php");
    
    $user = new User();
    $water = new Water();
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
                                        default: 
                                        include_once("includes/water/view-water.php");
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
    <?php
    
    include_once("includes/footer.php")
    ?>
        <a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i> </a>
        <?php  include_once("includes/footer.php"); ?>
        
       <script>     
        ! function (t) {
            "use strict";
            var n = function () {};
            n.prototype.init = function () {
                t(".delete-water").click(function (e) {
                    var nid = $(this).attr('data-water-id');
                     e.preventDefault(); //cancel default action
                     swal({
                         title: "Are you sure, you wanna delete this water entry?",
                         text: "You won't be able to revert this!",
                         icon: "warning",
                         buttons: [true, "Yes, delete it!"],
                     }).then((willDelete) => {
                         if (willDelete) {
                            $.ajax({
                                type: 'POST',
                                  url: 'includes/delete-record.php',
                                 data: 'nid=' + nid + "&manage=water"
                                }).done(function(){
                                    swal({
                                        title: "Deleted !",
                                        text: "Member has been deleted!",
                                        icon: "success",
                                        buttons: "ok",
//                                        confirmButtonClass: "btn btn-confirm mt-2"
                                    }).then(function(){
                                        self.location = "water.php"
                                    })
                                })
                            } else {
                                swal({
                                     title: "Issue !",
                                     text: "There was issue deleteing water, please try again later!",
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
        } elseif($user_role == 'Society Member') {

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
                                        default: 
                                        include_once("includes/water/view-water.php");
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
        else {
            echo "<h1>You are not allowed to view this part</h1><a href='logout.php'>back</a>";
        } 
    include_once("includes/footer.php")
    ?>
        <a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i> </a>
        <?php  include_once("includes/footer.php"); ?>
        
    </body>

    <?php include_once("includes/scripts/show-notifications.php");?>
</html>

