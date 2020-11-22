<?php
    $fotodashboard = ROOT_URL."/assets/images/user.jpg";
    $nama = $biodata['nama_depan'].' '.$biodata['nama_belakang'];


?>


<!-- <div class="page-header">    -->
<div id="kt_header" class="kt-header kt-grid__item">

                        <!-- begin: Header Menu -->
                        <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                            <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
<!--                                 <ul class="kt-menu__nav ">
                                    <li class="kt-menu__item  kt-menu__item-active " aria-haspopup="true"><a href="demo12/index.html" class="kt-menu__link "><span class="kt-menu__link-text">Application</span></a></li>
                                </ul> -->
                            </div>
                        </div>

                            <div class="kt-header__topbar">
                                <div class="kt-header__topbar-item kt-header__topbar-item--user">
                                    <div class="kt-header__topbar-wrapper">
                                        <div class="kt-header__topbar-user">
                                            <ul class="nav">
                                                <li class="dropdown dropdown-user dropdown-white">
                                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <img alt="" class="kt-radius-100" style="margin-right: 3px; " src="<?php echo $fotodashboard ?>">
                                                        <span class="username username-hide-mobile" id="usermhs" style="color:white;"><?php echo  $nama ?> <i class="fa fa-user"></i> </span>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-default">
                                                        <li>
                                                            <a href="<?php echo site_url('user/profile'); ?>">
                                                                <i class="fas fa-user"></i> Profile Settings </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo site_url('auth/logout'); ?> ">
                                                                <i class="fas fa-key"></i> Log Out </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                             </div>
                             
                
</div>


         
          