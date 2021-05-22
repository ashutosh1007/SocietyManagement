
<?php
    $user = new User();
    $flat = new Flat();
    if( isset($_GET['delete'] ) ) {
     $id = $_GET['delete'];
     $flat->deleteFloor($id);
     $_SESSION['op'] = "delete";
     $_SESSION['p'] = "success";
     $_SESSION['page'] = "floor";
     header("Location: floor.php"); 
 }
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Flat</h6> </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>     
                    <tr>
                        <th>Sr No.</th>
                        <th>Flat</th>
                        <th>Member Name</th>
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
                        <th>Flat</th>
                        <th>Member Name</th>
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
                        $allFlats = $flat->getDetails();
                        while($row = mysqli_fetch_assoc($allFlats)){
                            $id = $id+1;
                            $flat_id = $row['id'];
                            $flat_no = $row['flat_no'];
                            $member_name = $row['member_name'];
                            
                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$flat_no</td>";
                            echo "<td>$member_name</td>";
                            if($user_role == 'admin'){
                                echo "<td><a href='flat.php?source=edit_flat&flat_id=$flat_id' class='btn btn-primary'><span class='fa fa-pen'></span></a></td> ";
                                echo "<td><button type='button' class='btn btn-danger delete-flat' data-flat-id='$flat_id'> <span class='fa fa-trash'></span></button></td>";                            
                            }    
                            echo "</tr>";

                        }
                    ?>    
                </tbody>
            </table>
        </div>
    </div>
</div>