
<?php
    $bill = new Bill();
    $floor = new Floor();
    $totalFlatCount = $floor->getTotalFlatCount();
    if( isset($_GET['delete'] ) ) {
        $id = $_GET['delete'];
        $bill->deleteBill($id);
        $_SESSION['op'] = "delete";
        $_SESSION['p'] = "success";
        $_SESSION['page'] = "notice";
        header("Location: bill.php"); 
    }
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bill</h6> </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>     
                    <tr>
                        <th>Sr No.</th>
                        <th>Bill Type</th>
                        <th>Amount</th>
                        <th>Total Amount</th>
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
                        <th>Bill Type</th>
                        <th>Amount</th>
                        <th>Total Amount</th>
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
                        $allBills = $bill->readAllBill();
                        while($row = mysqli_fetch_assoc($allBills)){
                            $id = $id+1;
                            $bill_id = $row['id'];
                            $bill_type = $row['bill_type'];
                            $bill_amount = $row['bill_amount'];
                            $total_amount = $bill_amount*$totalFlatCount;
                        
                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$bill_type</td>";
                            echo "<td>$bill_amount</td>";
                            echo "<td>$total_amount</td>";
                            if($user_role == 'admin'){ 

                            echo "<td><a href='bill.php?source=edit_bill&bid=$bill_id' class='btn btn-primary'><span class='fa fa-pen'></span></a></td> ";
                            echo "<td><button type='button' class='btn btn-danger delete-bill' data-bill-id='$bill_id'> <span class='fa fa-trash'></span></button></td>";
                            } 
                            echo "</tr>";
                        }
                    ?>    
                </tbody>
            </table>
        </div>
    </div>
</div>