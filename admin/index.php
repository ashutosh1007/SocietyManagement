<!DOCTYPE html>
<html lang="en">
<?php    
    $source = "Dashboard";
    include_once("includes/header.php");
    include_once("classes/User.php");
    include_once("classes/Functions.php");

    $user = new User();
    $email = $user->checkUser();
    $user_role = $_SESSION['member_role'];
    // if($user_role == 'admin'){
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
          include_once("includes/navbar.php")?>
                        <!-- Begin Page Content -->
                        <div class="container-fluid">
                            <!--Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800"><?php echo $source; ?></h1> 
                            </div>
                            <!-- Content Row -->
                            <div class="row"> 
                                <?php include_once('includes/dashboard.php');?>
                            </div>
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
    // }
    // else{
    //     echo "<h1>You are not allowed to view this part</h1><a href='logout.php'>back</a>";
    // }
    include_once("includes/footer.php")
    ?>
</body>
</html>