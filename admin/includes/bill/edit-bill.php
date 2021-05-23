<?php 
    if(isset($_POST['submit_edit_bill'])) {
        $bid = $_GET['bid'];
        extract($_POST);
        $bill = new Bill();
        $bill_update = $bill->updateBill($bid, $bill_type, $bill_amount);
        $_SESSION['op'] = "update";
        $_SESSION['p'] = "success";
        $_SESSION['page'] = "bill";
        Functions::redirect("bill.php");
    }
?>

<?php 
    if( isset($_GET['bid'] ) ) {
        $bid = $_GET['bid'];
        $bill = new Bill();
        $result_set = $bill->getAllDetailsOfABill($bid);
        if($row = mysqli_fetch_assoc($result_set)){
            extract($row);
            $bill_id = $row['id'];
            $bill_type = $row['bill_type'];
            $bill_amount = $row['bill_amount'];
        }
    }
?>
<!-- Content Row -->
<div class="row">
   <div class="col-md-6">
    <form method="post">
    <div class="form-group">
                <select name="bill_type" id="bill_type" class="form-control">
                   <option value="Maintainence">Maintainence</option>
                   <option value="Water Bill">Water Bill</option>
                </select>
            </div>
            
            <div class="form-group">
                <input type="text" id="bill_amount" name="bill_amount" class="form-control" placeholder="Enter Bill Amount" value="<?php echo $bill_amount?>">
            </div>
         
        <div class="form-group">                       
            <button type="submit" name="submit_edit_bill" id="submit_edit_bill" class="btn btn-success">
            Edit Bill</button>
        </div>
    </form>
</div>
</div>
<!-- /.container-fluid -->