
<?php
    $user = new User();
    $floor = new Floor();
    if( isset($_GET['delete'] ) ) {
        $id = $_GET['delete'];
        $floor->deleteFloor($id);
        $_SESSION['op'] = "delete";
        $_SESSION['p'] = "success";
        $_SESSION['page'] = "floor";
        header("Location: floor.php"); 
 }
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Floor</h6> </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>     
                    <tr>
                        <th>Sr No.</th>
                        <th>Floor</th>
                        <th>Flat</th>
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
                        <th>Floor</th>
                        <th>Flat</th>
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
                        $allFloors = $floor->readAllFloor();
                        while($row = mysqli_fetch_assoc($allFloors)){
                            $id = $id+1;
                            $floor_id = $row['id'];
                            $floor_no = $row['floor_no'];
                            $flat_no = $row['flat_no'];
                            
                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$floor_no</td>";
                            echo "<td>$flat_no</td>";
                            if($user_role == 'admin'){ 
                                echo "<td><a href='floor.php?source=edit_floor&fid=$floor_id' class='btn btn-primary'><span class='fa fa-pen'></span></a></td> ";
                                echo "<td><button type='button' class='btn btn-danger delete-floor' data-floor-id='$floor_id'> <span class='fa fa-trash'></span></button></td>";                            
                            } 
                            echo "</tr>";
                        }
                    ?>    
                </tbody>
            </table>
        </div>
    </div>
</div>