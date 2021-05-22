<?php
    $floor = new Floor();
    if(isset($_POST['add_flat_details'])){
        extract($_POST);
        $flat = new Flat();
        $flat_id = $flat->insertFlatDetails($flat_no, $member_name);
        $_SESSION['op'] = "add";
        $_SESSION['p'] = "success";
        $_SESSION['page'] = "flat";
        Functions::redirect("flat.php");
    }
?>

<!-- Content Row -->
<div class="row">
    <div class="col-md-6">
        <form method="post" id="flat">
            <div class="form-group">
                <select name="flat_no" id="flat_no" class="form-control">
                    <?php 
                        $allFlats = $floor->readAllFloor();
                        while($row = mysqli_fetch_assoc($allFlats)){
                            $floor_id = $row['id'];
                            $flat_no = $row['flat_no'];
                    ?>
                   <option value="<?php echo $floor_id ?>"><?php echo $flat_no?></option>
                   <?php 
                        }
                   ?>
                </select>
            </div>
            <div class="form-group">
                <input type="text" id="member_name" name="member_name" class="form-control" placeholder="Owner Name"> 
            </div>
            <div class="form-group">
                <button type="submit" name="add_flat_details" id="add_flat_details" class="btn btn-success">
                 Add Flat Details</button>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->