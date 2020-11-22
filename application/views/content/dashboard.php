<?php
    // print_r($biodata);
    // if ($biodata['fotodosen'] == null ) {
        $fotodosen = ROOT_URL."/assets/images/user.jpg";
    // }
    // else {
    //      $fotodosen = "https://manajemen.lp3i.ac.id/AdminPendidikan/timthumb.php?src=".$biodata['fotodosen']."&w=218&h=235&zc=1";
    //      if (!getimagesize($fotodosen)) {
    //             $fotodosen = ROOT_URL."/assets/".$biodata['fotodosen'];
    //      }
    // }

        $nama = $biodata['nama_depan'].' '.$biodata['nama_belakang'];
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
                                                <img src="<?php echo $fotodosen ?>" class="img-responsive" alt="" > </div>
                                            
                                            <!-- END SIDEBAR USERPIC -->
                                            <!-- SIDEBAR USER TITLE -->
                                            <div class="profile-usertitle">
                                                <div class="profile-usertitle-name"><?php echo $nama ?> </div>
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
                                                    <div class="uppercase profile-stat-title"> </div>
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
                                    <div class="profile-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet light ">
                                                    <div class="portlet-title tabbable-line">
                                                 <div class="caption caption-md">
                                                            <span class="caption-subject font-blue-madison bold uppercase"><i class="far fa-sticky-note"></i> PERSONAL DATA</span>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="tab-content">
                                                            <!-- PESONAL INFO TAB -->
                                                                
                                                                <div class="form-group">
                                                                    <table class="table">

                                                                        <tr>
                                                                            <td>
                                                                                <label>Office Section</label>
                                                                            </td>
                                                                            <td >
                                                                                <label>Lecturer</label>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td width="400px">
                                                                                <label>Place of birth</label>
                                                                            </td>
                                                                            <td width="395px">
                                                                                <label ><?php echo $biodata['tempat_lahir'];?></label>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td width="400px">
                                                                                <label>Date of birth</label>
                                                                            </td>
                                                                            <td width="395px">
                                                                                <label><?php  echo $biodata['tanggal_lahir']; ?></label>
                                                                            </td>
                                                                        </tr>



                                                                        <tr>
                                                                            <td>
                                                                                <label>Address</label>
                                                                            </td>
                                                                            <td>
                                                                                <label><?php echo $biodata['agama']; ?></label>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>
                                                                                <label>No.Handphone</label>
                                                                            </td>
                                                                            <td>
                                                                                <label><?php echo $biodata['agama']; ?></label>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>
                                                                                <label>Email</label>
                                                                            </td>
                                                                            <td>
                                                                                <label><?php echo $biodata['agama']; ?></label>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>
                                                                                <label>Branch</label>
                                                                            </td>
                                                                            <td>
                                                                                <label><?php echo $biodata['agama']; ?></label>
                                                                            </td>
                                                                        </tr>



                                                                        </table>
                                                                    </div>

                                                                             
                                                            
                                                            <!-- END PERSONAL INFO TAB -->
                                                            

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