<?php 
    if(isset($_POST['submit_edit_member'])) {
        $mid = $_GET['mid'];
        extract($_POST);
        $user = new User();
        $member_update = $user->updateMember($mid, $member_name, $member_email, $member_role);
        $_SESSION['op'] = "update";
        $_SESSION['p'] = "success";
        $_SESSION['page'] = "member";
        Functions::redirect("member.php");
    }
?>

<?php 
    if( isset($_GET['mid'] ) ) {
        $mid = $_GET['mid'];
        $user = new User();
        $result_set = $user->getAllDetailsOfAMember($mid);
        if($row = mysqli_fetch_assoc($result_set)){
            extract($row);
            $member_id = $row['id'];
            $member_name = $row['member_name'];
            $member_email = $row['member_email'];
            $member_role = $row['member_role'];
        }
    }
?>
<!-- Content Row -->
<div class="row">
   <div class="col-md-6">
    <form method="post">
       <input type="hidden" id="member_id" value="<?php echo $member_id; ?>"> 
        <div class="form-group">
            <input type="text" id="member_name" name="member_name" class="form-control" value="<?php echo $member_name; ?>" required> 
        </div>

       <div class="form-group">
            <input type="text" id="member_email" name="member_email" class="form-control" value="<?php echo $member_email; ?>" required> 
        </div>
        
        <div class="form-group">
                <select name="member_role" id="member_role" class="form-control">
                   <option value="admin">Committee Member</option>
                   <option value="Society Member">Society Member</option>
                   <option value="Visitor">Visitor</option>
                </select>
        </div>

        <div class="form-group">                       
            <button type="submit" name="submit_edit_member" class="btn btn-success">
            Edit Member</button>
        </div>

    </form>
</div>
</div>
<!-- /.container-fluid -->