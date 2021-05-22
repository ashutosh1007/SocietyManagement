
<?php
    $water = new Water();
  ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Water</h6> </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <?php
                    $id = 0;
                    $latestRecord = $water->getDetails();
                    while($row = mysqli_fetch_assoc($latestRecord)){
                        $id = $id+1;
                        $water_id = $row['id'];
                        $distance = $row['distance'];
                    }
                ?>

                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" 
                    aria-valuenow="<?php echo $distance; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $distance; ?>%</div>
                </div>

            </table>
        </div>
    </div>
</div>