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
        <a class="nav-link <?= $source == 'Dashboard' ? 'active' : ''?>" href="index.php"> <i
                class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Member' ? 'active' : 'collapsed'?>" href="#" data-toggle="collapse"
            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <i class="fa fa-users"></i>
            <span>
                Members
            </span> </a>
        <div id="collapseOne" class="collapse <?= $source == 'Member' ? 'show' : ''?>" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                <?php
                            if($user_role == 'admin'){ 
                    ?>
                <a class="collapse-item <?= $src == 'add_member' ? 'active-sub' : ''?>"
                    href="members.php?source=add_member">Add</a>
                <?php
                    }
                    ?>
                <a class="collapse-item <?= $src == 'view_member' ? 'active-sub' : ''?>"
                    href="members.php?source=view_member">View</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Query' ? 'active' : 'collapsed'?>" href="#" data-toggle="collapse"
            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne"> <i class="fa fa-list-alt"></i>
            <span>
                Query
            </span> </a>
        <div id="collapseTwo" class="collapse <?= $source == 'Query' ? 'show' : ''?>" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                <a class="collapse-item <?= $src == 'view_query' ? 'active-sub' : ''?>"
                    href="query.php?source=view_query">View</a>
            </div>
        </div>
    </li> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Floor' ? 'active' : 'collapsed'?>" href="#" data-toggle="collapse"
            data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne"> <i
                class="far fa-building"></i> <span>
                Floor
            </span> </a>
        <div id="collapseThree" class="collapse <?= $source == 'Floor' ? 'show' : ''?>" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                <?php
                            if($user_role == 'admin'){ 
                    ?>
                <a class="collapse-item <?= $src == 'add_floor' ? 'active-sub' : ''?>"
                    href="floor.php?source=add_floor">Add</a>
                <?php
                    }
                    ?>
                <a class="collapse-item <?= $src == 'view_floor' ? 'active-sub' : ''?>"
                    href="floor.php?source=view_floor">View</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Flat' ? 'active' : 'collapsed'?>" href="#" data-toggle="collapse"
            data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne"> <i class="fas fa-home"></i>
            <span>
                Flat
            </span> </a>
        <div id="collapseFour" class="collapse <?= $source == 'Flat' ? 'show' : ''?>" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                <?php
                            if($user_role == 'admin'){ 
                    ?>
                <a class="collapse-item <?= $src == 'add_flat' ? 'active-sub' : ''?>"
                    href="flat.php?source=add_flat">Add</a>
                <?php
                        }
                    ?>
                <a class="collapse-item <?= $src == 'view_flat' ? 'active-sub' : ''?>"
                    href="flat.php?source=view_flat">View</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Notice' ? 'active' : 'collapsed'?>" href="#" data-toggle="collapse"
            data-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne"> <i
                class="fas fa-mail-bulk"></i> <span>
                Notice
            </span> </a>
        <div id="collapseFive" class="collapse <?= $source == 'Notice' ? 'show' : ''?>" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                <?php
                            if($user_role == 'admin'){ 
                    ?>
                <a class="collapse-item <?= $src == 'add_notice' ? 'active-sub' : ''?>"
                    href="notice.php?source=add_notice">Add</a>
                <?php
                    }
                    ?>
                <a class="collapse-item <?= $src == 'view_notice' ? 'active-sub' : ''?>"
                    href="notice.php?source=view_notice">View</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Water' ? 'active' : 'collapsed'?>" href="#" data-toggle="collapse"
            data-target="#collapseSix" aria-expanded="true" aria-controls="collapseOne"> <i
                class="fas fa-ruler-vertical"></i> <span>
                Water
            </span> </a>
        <div id="collapseSix" class="collapse <?= $source == 'Water' ? 'show' : ''?>" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                <a class="collapse-item <?= $src == 'view_water' ? 'active-sub' : ''?>"
                    href="water.php?source=view_water">View</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Bill' ? 'active' : 'collapsed'?>" href="#" data-toggle="collapse"
            data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseOne"> <i
                class="fas fa-file-invoice"></i> <span>
                Bill
            </span> </a>
        <div id="collapseSeven" class="collapse <?= $source == 'Bill' ? 'show' : ''?>" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                <?php
                            if($user_role == 'admin'){ 
                    ?>
                <a class="collapse-item <?= $src == 'add_bill' ? 'active-sub' : ''?>"
                    href="bill.php?source=add_bill">Add</a>
                <?php
                    }
                    ?>
                <a class="collapse-item <?= $src == 'view_bill' ? 'active-sub' : ''?>"
                    href="bill.php?source=view_bill">View</a>
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