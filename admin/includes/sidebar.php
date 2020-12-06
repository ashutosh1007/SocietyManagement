<!-- Sidebar -->
<?php 
$source;
if(isset($_GET['source'])){
    $src = $_GET['source'];
}
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15"> <i class="fas fa-laugh-wink"></i> </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Dashboard' ? 'active' : ''?>" href="index.php"> <i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Member' ? 'active' : 'collapsed'?>" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <i class="fa fa-list-alt"></i> <span>
              Members
          </span> </a>
        <div id="collapseOne" class="collapse <?= $source == 'Member' ? 'show' : ''?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6> 
                    <a class="collapse-item <?= $src == 'add_member' ? 'active-sub' : ''?>" href="members.php?source=add_member">Add</a> 
                    <a class="collapse-item <?= $src == 'view_member' ? 'active-sub' : ''?>" href="members.php?source=view_member">View</a> 
            </div>
        </div>
    </li>
    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Forum' ? 'active' : 'collapsed'?>" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne"> <i class="fa fa-list-alt"></i> <span>
              Forum
          </span> </a>
        <div id="collapseTwo" class="collapse <?= $source == 'Forum' ? 'show' : ''?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6> 
                    <a class="collapse-item <?= $src == 'add_post' ? 'active-sub' : ''?>" href="forum.php?source=add_post">Add</a> 
                    <a class="collapse-item <?= $src == 'view_post' ? 'active-sub' : ''?>" href="forum.php?source=view_post">View</a> 
            </div>
        </div>
    </li>
   
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->