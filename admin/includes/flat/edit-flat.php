<?php 

    $floor = new Floor();
    if(isset($_POST['submit_edit_flat'])) {
        $flat_id = $_GET['flat_id'];
        extract($_POST);
        $flat = new Flat();
        $flat_update = $flat->updateFlat($flat_id, $flat_no, $member_name);
        $_SESSION['op'] = "update";
        $_SESSION['p'] = "success";
        $_SESSION['page'] = "flat";
        Functions::redirect("flat.php");
    }
?>

<?php 
    if( isset($_GET['flat_id'] ) ) {
        $flat_id = $_GET['flat_id'];
        $flat = new Flat();
        $result_set = $flat->getAllDetailsOfAFlat($flat_id);
        if($row = mysqli_fetch_assoc($result_set)){
            extract($row);
            $flat_id = $row['id'];
            $flat_id = $row['flat_id'];
            $member_name = $row['member_name'];
        }
    }
?>
<!-- Content Row -->
<div class="row">
    <div class="col-md-6">
        <form method="post">
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
                <input type="text" id="member_name" name="member_name" class="form-control" value="<?php echo $member_name; ?>" placeholder="Owner Name"> 
            </div>
            
            <div class="form-group">
                <button type="submit" name="submit_edit_flat" id="submit_edit_flat" class="btn btn-success">
                 Edit Flat</button>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->