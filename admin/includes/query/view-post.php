
<?php
    $user = new User();
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
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr No.</th>
                        <th>Member Name</th>
                        <th>Member Email</th>
                        <th>Member Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
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
                            echo "<td><a href='members.php?source=edit_member&mid=$member_id' class='btn btn-primary'><span class='fa fa-pen'></span> Edit</a></td> ";
                            
                            echo "<td> <button type='button' class='btn btn-danger' data-target='#confirmfordelete' data-toggle='modal' data-member_name = '$member_name' data-member_id = '$member_id'> <span class='fa fa-times'></span> Delete </button></td>";                
                            
                            echo "</tr>";
                        }
                    ?>    
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
 if( isset($_GET['delete'] ) ) {
     $id = $_GET['delete'];
     $user = new User();
     $user->deleteMember($id);
     header("Location: members.php"); 
 }
?>