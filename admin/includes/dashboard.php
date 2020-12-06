<?php
    include_once('classes/User.php');
    
    $user = new User();
    $totalMembers = $user->getTotalMemberCount();
?>
<!-- Categories Card -->
<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Members</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo $totalMembers; ?>
                    </div>
                </div>
                <div class="col-auto"> <i class="fa fa-user fa-2x text-gray-300"></i> </div>
            </div>
        </div>
    </div>
</div>