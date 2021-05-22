<?php
$manage = $_POST['manage'];
if($manage == "member"){
    require_once("../classes/User.php");
    if($_REQUEST['mid']) {
        $mid = $_REQUEST['mid'];
        $user = new User();
        $user->deleteMember($mid);
        echo "success";
    }
} else if($manage == "floor"){
    require_once("../classes/Floor.php");
    if($_REQUEST['fid']) {
        $fid = $_REQUEST['fid'];
        $floor = new Floor();
        $floor->deleteFloor($fid);
        echo "success";
    }
} else if($manage == "flat"){
    require_once("../classes/Flat.php");
    if($_REQUEST['flatid']) {
        $flatid = $_REQUEST['flatid'];
        $floor = new Flat();
        $floor->deleteFloor($fid);
        echo "success";
    }
} else if($manage == "notice"){
    require_once("../classes/Notice.php");
    if($_REQUEST['nid']) {
        $noticeid = $_REQUEST['nid'];
        $notice = new Notice();
        $notice->deleteNotice($noticeid);
        echo "success";
    }
} else if($manage == "bill"){
    require_once("../classes/Bill.php");
    if($_REQUEST['bid']) {
        $billid = $_REQUEST['bid'];
        $bill = new Bill();
        $bill->deleteBill($billid);
        echo "success";
    }
}
?>