<?php 
    if(isset($_POST['submit_edit_notice'])) {
        $nid = $_GET['nid'];
        extract($_POST);
        $notice = new Notice();
        $notice_update = $notice->updateNotice($nid, $notice_title, $notice_description);
        $_SESSION['op'] = "update";
        $_SESSION['p'] = "success";
        $_SESSION['page'] = "notice";
        Functions::redirect("notice.php");
    }
?>

<?php 
    if( isset($_GET['nid'] ) ) {
        $nid = $_GET['nid'];
        $notice = new Notice();
        $result_set = $notice->getAllDetailsOfANotice($nid);
        if($row = mysqli_fetch_assoc($result_set)){
            extract($row);
            $notice_id = $row['id'];
            $notice_title = $row['notice_title'];
            $notice_description = $row['notice_description'];
        }
    }
?>
<!-- Content Row -->
<div class="row">
   <div class="col-md-6">
    <form method="post">
        <div class="form-group">
            <input type="text" id="notice_title" name="notice_title" class="form-control" placeholder="Enter Notice Title" value="<?php echo $notice_title; ?>"> 
        </div>
            
        <div class="form-group">
            <textarea id="notice_description" name="notice_description" class="form-control" cols="30" rows="10" placeholder="Notice Description"><?php echo $notice_description; ?></textarea>
        </div>
         
        <div class="form-group">                       
            <button type="submit" name="submit_edit_notice" id="submit_edit_notice" class="btn btn-success">
            Edit Notice</button>
        </div>
    </form>
</div>
</div>
<!-- /.container-fluid -->