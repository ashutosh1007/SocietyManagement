<?php 
    if(isset($_POST['submit_edit_floor'])) {
        $fid = $_GET['fid'];
        extract($_POST);
        $floor = new Floor();
        $floor_update = $floor->updateFloor($fid, $floor_no, $flat_no);
        $_SESSION['op'] = "update";
        $_SESSION['p'] = "success";
        $_SESSION['page'] = "floor";
        Functions::redirect("floor.php");
    }
?>

<?php 
    if( isset($_GET['fid'] ) ) {
        $fid = $_GET['fid'];
        $floor = new Floor();
        $result_set = $floor->getAllDetailsOfAFloor($fid);
        if($row = mysqli_fetch_assoc($result_set)){
            extract($row);
            $floor_id = $row['id'];
            $floor_no = $row['floor_no'];
            $flat_no = $row['flat_no'];
        }
    }
?>
<!-- Content Row -->
<div class="row">
    <div class="col-md-6">
        <form method="post" id="floor">
            <div class="form-group">
                <input type="text" id="floor_no" name="floor_no" class="form-control" placeholder="Floor Number" value="<?php echo $floor_no; ?>" required> 
            </div>
            <div class="form-group">
                <input type="text" id="flat_no" name="flat_no" class="form-control" placeholder="Flat Number" value="<?php echo $flat_no; ?>" required> 
            </div>
            <div class="form-group">
                <button type="submit" name="submit_edit_floor" id="submit_edit_floor" class="btn btn-success">
                 Edit Flat</button>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->