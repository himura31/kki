        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">

            </div>
            <div class="kt-header-mobile__toolbar">
                <button class="kt-header-mobile__toolbar-toggler" id="kt_aside_mobile_toggler"><span></span></button>
                <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="fas fa-user-alt"></i></button>
            </div>
        </div>

             <!-- end:: Header Mobile -->

                <!-- begin:: Aside -->
            <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
            <div class="kt-aside  kt-aside--fixed kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

                    <!-- begin:: Aside -->
                <div class="kt-aside__brand" id="kt_aside_brand">
                        <div class="kt-aside__brand-logo">
                        <h3 style="color : white;"><font><b><i>Monitoring Karyawan</i></b></font></h3>
<!--                             <a href="">
                            <img src="<?php echo ROOT_URL ?>/assets/assets/pages/img/login/logosmall.png" alt="logo" class="logo-default"  style="margin-top: 5px; height: 50px; width: 190px;"> -->
                        </a>
                        </div>
                        <div class="kt-aside__brand-tools">
                            <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler"><span></span></button>
                        </div>
                </div>

                    <!-- end:: Aside -->

                    <!-- begin:: Aside Menu -->
                     <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                        <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1">
                            <ul class="kt-menu__nav ">
                                <?php
                                
                                    if ($this->session->userdata('id_akses') == 2 || $this->session->userdata('id_akses') == 3) {                               
                                        $menu = array(
                                                    'dashboard' => array(
                                                        'title' => 'Dashboard',
                                                        'link' => site_url('dashboard'),
                                                        'icon' => 'kt-menu__link-icon fa fa-home',
                                                        'icon2' => '',
                                                        'submenu' => '',
                                                        ),
                                                    'form' => array(
                                                        'title' => 'Form Penilaian',
                                                        'link' => site_url('FormController'),
                                                        'icon' => 'kt-menu__link-icon fa fa-edit',
                                                        'icon2' => 'kt-menu__ver-arrow la la-angle-right',
                                                        'submenu' => '',
                                                        ),                                     
                                                    );

                                        }else if($this->session->userdata('id_akses') == 4 || $this->session->userdata('id_akses') == 5){
                                             $menu = array(
                                                    'dashboard' => array(
                                                        'title' => 'Dashboard',
                                                        'link' => site_url('dashboard'),
                                                        'icon' => 'kt-menu__link-icon fa fa-home',
                                                        'icon2' => '',
                                                        'submenu' => '',
                                                        ),
                                                    'report' => array(
                                                        'title' => 'Report',
                                                        'link' => '#',
                                                        'icon' => 'kt-menu__link-icon fa fa-edit',
                                                        'icon2' => 'kt-menu__ver-arrow la la-angle-right',
                                                        'submenu' => array(
                                                                    'report_staff' => array(
                                                                            'title_sub' => 'Report Staff',
                                                                            'link' => site_url('ReportController/Staff'),
                                                                        ),
                                                                    'report_middle' => array(
                                                                            'title_sub' => 'Report Middle',
                                                                            'link' => site_url('ReportController/Middle'),
                                                                        ),
                                                                    )             
                                                        ),                                          
                                                    );
                                        }
                                        

                        foreach ($menu as $key => $value) :
                            $active = ($content_title == $value['title']) ? 'kt-menu__item--active' : '' ;
                            $submenu = $value['submenu'];
                        ?>
                         <li class="kt-menu__item  kt-menu__item--submenu <?php echo $active ?>" aria-haspopup="true">
                             <a href="<?php echo $value['link'] ?>" class="kt-menu__link kt-menu__toggle">
                             <i class="<?php echo $value['icon'] ?>"></i>
                             <span class="kt-menu__link-text" style="font-size: 13px;"><?php echo $value['title'] ?></span></i> <i class="<?php echo $value['icon2'] ?>"></i></a>
                                <?php if($submenu == TRUE){ 
                                        foreach ($submenu as $key => $sub_menu) { 
                                            $active2 = ($content_title == $sub_menu['title_sub']) ? 'kt-menu__item--active' : '' ;?>

                                             
                                            <div class="kt-menu__submenu ">
                                                 <ul class="kt-menu__subnav" >
                                                    <li class="kt-menu__item <?php echo $active2 ?>" aria-haspopup="true">
                                                     <a href="<?php echo $sub_menu['link'] ?>" class="kt-menu__link">
                                                     <span class="kt-menu__link-text" style="font-size: 13px;"><i class="fa fa-angle-double-right mr-2" size="5px"></i><?php echo  $sub_menu['title_sub'] ?></span></i></a>      
                                                    </li>  
                                                </ul>
                                            </div>
  
                                        <?php 
                                        }  

                                    }
                                ?>  
                            </li>
                                <?php    
                                    endforeach;
                                ?>
                            </ul>

                        </div>
                    </div>

                    <!-- end:: Aside Menu -->
            
            </div>

                <!-- end:: Aside --
                   