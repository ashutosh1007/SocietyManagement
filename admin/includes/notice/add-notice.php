<?php
    if(isset($_POST['add_notice'])){
        extract($_POST);
        $notice = new Notice();
        $notice_id = $notice->insertNotice($notice_title, $notice_description);
        $_SESSION['op'] = "add";
        $_SESSION['p'] = "success";
        $_SESSION['page'] = "notice";
        Functions::redirect("notice.php");
    }
?>

<!-- Content Row -->
<div class="row">
    <div class="col-md-6">
        <form method="post" id="notice">
            <div class="form-group">
                <input type="text" id="notice_title" name="notice_title" class="form-control" placeholder="Enter Notice Title"> 
            </div>
            
            <div class="form-group">
                <textarea id="notice_description" name="notice_description" class="form-control" cols="30" rows="10" placeholder="Notice Description"></textarea>
            </div>
         
            <div class="form-group">
                <button type="submit" name="add_notice" id="add_notice" class="btn btn-success">
                 Add Notice</button>
            </div>

        </form>
    </div>
</div>
<!-- /.container-fluid -->