
<?php
    $notice = new Notice();
    if( isset($_GET['delete'] ) ) {
        $id = $_GET['delete'];
        $notice->deleteNotice($id);
        $_SESSION['op'] = "delete";
        $_SESSION['p'] = "success";
        $_SESSION['page'] = "notice";
        header("Location: notice.php"); 
    }
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Notice</h6> </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>     
                    <tr>
                        <th>Sr No.</th>
                        <th>Notice Title</th>
                        <th>Notice Description</th>
                        <?php
                            if($user_role == 'admin'){ 
                        ?>
                        <th>Edit</th>
                        <th>Delete</th>
                        <?php
                            } 
                        ?>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr No.</th>
                        <th>Notice Title</th>
                        <th>Notice Description</th>
                        <?php
                            if($user_role == 'admin'){ 
                        ?>
                        <th>Edit</th>
                        <th>Delete</th>
                        <?php
                            } 
                        ?>
                    </tr>
                </tfoot>
                 <tbody>
                  <?php
                        $id = 0;
                        $allNotices = $notice->readAllNotice();
                        while($row = mysqli_fetch_assoc($allNotices)){
                            $id = $id+1;
                            $notice_id = $row['id'];
                            $notice_title = $row['notice_title'];
                            $notice_description = $row['notice_description'];
                        
                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$notice_title</td>";
                            echo "<td>$notice_description</td>";
                            if($user_role == 'admin'){ 
                                echo "<td><a href='notice.php?source=edit_notice&nid=$notice_id' class='btn btn-primary'><span class='fa fa-pen'></span></a></td> ";
                                echo "<td><button type='button'  class='btn btn-danger delete-notice' data-notice-id='$notice_id'> <span class='fa fa-trash'></span></button></td>";                            
                            } 
                            echo "</tr>";
                        }
                    ?>    
                </tbody>
            </table>
        </div>
    </div>
</div>