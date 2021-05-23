
<?php
    $user = new User();
    if( isset($_GET['delete'] ) ) {
     $id = $_GET['delete'];
     $user->deleteMember($id);
     $_SESSION['op'] = "delete";
     $_SESSION['p'] = "success";
     $_SESSION['page'] = "member";
     header("Location: member.php"); 
 }
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Members</h6> </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>     
                    <tr>
                        <th>Sr No.</th>
                        <th>Member Name</th>
                        <th>Member Email</th>
                        <th>Member Role</th>
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
                        <th>Member Name</th>
                        <th>Member Email</th>
                        <th>Member Role</th>
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
                        $allMembers = $user->readAllMembers();
                        while($row = mysqli_fetch_assoc($allMembers)){
                            $id = $id+1;
                            $member_id = $row['id'];
                            $member_name = $row['member_name'];
                            $member_email = $row['member_email'];
                            $member_role = $row['member_role'];
                        
                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$member_name</td>";
                            echo "<td>$member_email</td>";
                            echo "<td>$member_role</td>";
                            if($user_role == 'admin'){ 
                                echo "<td><a href='member.php?source=edit_member&mid=$member_id' class='btn btn-primary'><span class='fa fa-pen'></span> </a></td> ";
                                echo "<td><button type='button' class='btn btn-danger delete-member' data-member-id='$member_id'> <span class='fa fa-trash'></span></button></td>";
                            } 
                            echo "</tr>";
                        }
                    ?>    
                </tbody>
            </table>
        </div>
    </div>
</div>