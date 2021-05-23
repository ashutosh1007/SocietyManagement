<?php
    if(isset($_POST['add_member'])){
        extract($_POST);
        $user = new User();
        $user_id = $user->insertMember($member_name, $member_email, $member_role);
        Functions::redirect("members.php");
    }
?>

<!-- Content Row -->
<div class="row">
    <div class="col-md-6">
        <form method="post" id="member">
            <div class="form-group">
                <input type="text" id="member_name" name="member_name" class="form-control" placeholder="Enter Your Full Name"> 
            </div>
            
            <div class="form-group">
                <input type="email" id="member_email" name="member_email" class="form-control" placeholder="someone@example.com"> 
            </div>
        
           <div class="form-group">
                <select name="member_role" id="member_role" class="form-control">
                   <option value="admin">Committee Member</option>
                   <option value="society_member">Society Member</option>
                </select>
            </div>
            
            <div class="form-group">
                <button type="submit" name="add_member" id="add_member" class="btn btn-success">
                 Add Member</button>
            </div>

        </form>
    </div>
</div>
<!-- /.container-fluid -->