<!DOCTYPE html>
<html lang="en">
    

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="<?php echo base_url('admin')?>" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="<?php echo base_url('assets')?>/images/logos/123.png" alt="" height="60" width="160">
                    </span>
                    <span class="logo-sm">
                        <img src="<?php echo base_url('assets')?>/images/logos/2.png" alt="" height="30" width="30">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a href="<?php echo base_url('admin')?>" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item">ADMIN</li>


                        <li class="side-nav-item">
                            <a data-bs-toggle="" href="<?php echo base_url('admin/users')?>" class="side-nav-link">
                                <i class=" uil-user-circle"></i>
                                <span> Users </span>
                            </a>

                            <a data-bs-toggle="" href="<?php echo base_url('admin/services')?>" class="side-nav-link">
                                <i class="uil-ambulance"></i>
                                <span> Services </span>
                            </a>

                            <a data-bs-toggle="" href="<?php echo base_url('admin/calendar')?>"  class="side-nav-link">
                                <i class=" uil-calendar-alt"></i>
                                <span> Calendar </span>
                            </a>

                            <a data-bs-toggle="" href="<?php echo base_url('admin/dentists')?>" class="side-nav-link">
                                <i class="uil-syringe"></i>
                                <span> Dentists </span>
                            </a>

                            <a data-bs-toggle="" href="<?php echo base_url('admin/branches')?>" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Branches </span>
                            </a>

                            <a data-bs-toggle="" href="<?php echo base_url('admin/invoices')?>" class="side-nav-link">
                                <i class="uil-bill"></i>
                                <span> Invoices </span>
                            </a>
                            
                        </li> 

                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

        </div>
        <!-- END wrapper -->
        
    </body>
</html>
