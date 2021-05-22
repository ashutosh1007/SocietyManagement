<?php
    if(isset($_POST['add_bill'])){
        extract($_POST);
        $bill = new Bill();
        $bill_id = $bill->insertBill($bill_type, $bill_amount);
        $_SESSION['op'] = "add";
        $_SESSION['p'] = "success";
        $_SESSION['page'] = "bill";
        Functions::redirect("bill.php");
    }
?>

<!-- Content Row -->
<div class="row">
    <div class="col-md-6">
        <form method="post" id="bill">
            <div class="form-group">
                <select name="bill_type" id="bill_type" class="form-control">
                   <option value="Maintainence">Maintainence</option>
                   <option value="Water Bill">Water Bill</option>
                </select>
            </div>
            
            <div class="form-group">
                <input type="text" id="bill_amount" name="bill_amount" class="form-control" placeholder="">
            </div>

            <div class="form-group">
                <button type="submit" name="add_bill" id="add_bill" class="btn btn-success">
                 Add Bill</button>
            </div>

        </form>
    </div>
</div>
<!-- /.container-fluid -->