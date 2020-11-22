<?php
    

    // print_r($biodata);
    if ($biodata['fotodosen'] == null ) {
        $fotodosen = ROOT_URL."/assets/images/user.jpg";
    }
    else {
        $fotodosen = "https://manajemen.lp3i.ac.id/AdminPendidikan/timthumb.php?src=".$biodata['fotodosen']."&w=218&h=235&zc=1";
        if (!getimagesize($fotodosen)) {
          $fotodosen = ROOT_URL."/assets/".$biodata['fotodosen'];
        }
    }
?>
<div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PROFILE SIDEBAR -->
                                    <div class="profile-sidebar">
                                        <!-- PORTLET MAIN -->
                                        <div class="portlet light profile-sidebar-portlet ">
                                            <!-- SIDEBAR USERPIC -->
                                            <div class="profile-userpic" align="center">
                                                <img src="<?php echo $fotodosen ?>" class="img-responsive" alt=""> </div>
                                                
                                            <!-- END SIDEBAR USERPIC -->
                                            <!-- SIDEBAR USER TITLE -->
                                            <div class="profile-usertitle">
                                                <div class="profile-usertitle-name"><?php echo $biodata['namadosen'] ?> </div>
                                               <!--  <div class="profile-usertitle-job"> 
                                                    
                                                </div> -->
                                            </div>
                                            <!-- END SIDEBAR USER TITLE -->
                                            <!-- SIDEBAR BUTTONS -->
                                            <div class="profile-userbuttons">
                                               <!--  <button type="button" class="btn btn-circle green btn-sm"></button>
                                                <button type="button" class="btn btn-circle red btn-sm"></button> -->
                                            </div>
                                            <!-- END SIDEBAR BUTTONS -->
                                            <!-- SIDEBAR MENU -->
                                            <div class="profile-usermenu">
                                               <!--  <ul class="nav">
                                                    <li>
                                                        <a href="">
                                                            <i class="icon-home"></i>  </a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="">
                                                            <i class="icon-settings"></i>  </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <i class="icon-info"></i>  </a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                            <!-- END MENU -->
                                        </div>
                                        <!-- END PORTLET MAIN -->
                                        <!-- PORTLET MAIN -->
                                        <div class="portlet light ">
                                            <!-- STAT -->
                                            <div class="row list-separated profile-stat">
                                                
                                                <div class="col-md-12 col-sm-12 col-xs-6">
                                                    <div class="uppercase profile-stat-title"> <?php echo $log_statistik['loginx'] ?> </div>
                                                    <div class="uppercase profile-stat-text"> Statistics of Login Count </div>
                                                </div>
                                                
                                            </div>
                                            <!-- END STAT -->
                                            <div>
                                               <!--  <h4 class="profile-desc-title"></h4>
                                                <span class="profile-desc-text"></span> -->
                                                <!-- <div class="margin-top-20 profile-desc-link">
                                                    <i class="fa fa-instagram"></i>
                                                    <a href=""></a>
                                                </div>
                                                <div class="margin-top-20 profile-desc-link">
                                                    <i class="fa fa-twitter"></i>
                                                    <a href=""></a>
                                                </div>
                                                <div class="margin-top-20 profile-desc-link">
                                                    <i class="fa fa-facebook"></i>
                                                    <a href=""></a>
                                                </div> -->
                                            </div>
                                        </div>
                                        <!-- END PORTLET MAIN -->
                                    </div>
                                    <!-- END BEGIN PROFILE SIDEBAR -->
                                    <!-- BEGIN PROFILE CONTENT -->
                                    <div class="kt-portlet kt-portlet--height-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="kt-portlet__head">
                                                    <div class="kt-portlet__head-label">
                                                        <h3 class="kt-portlet__head-title">
                                                        </h3>
                                                    </div>
                                                    <div class="kt-portlet__head-toolbar">
                                                        <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab1_content" role="tab">
                                                                    Change Password
                                                                </a>
                                                            </li>   
                                                        </ul>
                                                    </div>
                                                </div>
                                                    <div class="kt-portlet__body">
                                                        <div class="tab-content">
                                                        <!-- CHANGE PASSWORD TAB -->
                                                            <div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
                                                            <div class="kt-widget5">
                                                                <form action="<?php echo site_url('user/change_password') ?>" id="form-change-pw" method="post">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Current Password</label>
                                                                        <input type="password" name="password[current_pass]" class="form-control" /> </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">New Password</label>
                                                                        <input type="password" name="password[password]" id="pw1" class="form-control" /> </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">Re-type Password</label>
                                                                        <input type="password" id="pw2" class="form-control" /> </div>
                                                                    <div class="margin-top-10">
                                                                        <button type="button" id="btn-pw-save" class="btn green"> Save </button>
                                                                        <button type="reset" class="btn default"> Reset </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- END CHANGE PASSWORD TAB -->
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END PROFILE CONTENT -->
                                </div>
                            </div>
                        </div>