<!DOCTYPE html>
<html lang="en">
    

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        
        <!-- Begin page -->
        
        <div class="wrapper">
                <div class="content">
                    
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="<?php echo base_url('assets')?>/images/logos/Happy Smile (2).png" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name"><?php echo $this->session->userdata('FIRSTNAME')?></span>
                                        <span class="account-position"><?php echo $this->session->userdata('USERS_TYPE')?></span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop02">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>My Account</span>
                                    </a> 

                                    <!-- item-->
                                    <a href="<?php echo base_url('login')?>" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        
                    </div>

                    <!-- end Topbar -->
                    <?php include('account.php')?>
    </body>
</html>
