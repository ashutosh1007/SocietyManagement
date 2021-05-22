<?php
    if(isset($_POST['add_floor_details'])){
        extract($_POST);
        $floor = new Floor();
        $floor_id = $floor->insertFloorDetails($floor_no, $flat_no);
        $_SESSION['op'] = "add";
        $_SESSION['p'] = "success";
        $_SESSION['page'] = "floor";
        Functions::redirect("floor.php");
    }
?>

<!-- Content Row -->
<div class="row">
    <div class="col-md-6">
        <form method="post" id="member">
            <div class="form-group">
                <input type="text" id="floor_no" name="floor_no" class="form-control" placeholder="Floor Number"> 
            </div>
            <div class="form-group">
                <input type="text" id="flat_no" name="flat_no" class="form-control" placeholder="Flat Number"> 
            </div>
            <div class="form-group">
                <button type="submit" name="add_floor_details" id="add_floor_details" class="btn btn-success">
                 Add Flat</button>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->