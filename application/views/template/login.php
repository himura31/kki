<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title><?php echo APP_NAME ?> | <?php echo $content_title ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo ROOT_URL ?>/assets/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo ROOT_URL ?>/assets/assets/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo ROOT_URL ?>/assets/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL ?>/assets/assets/global/plugins/bootstrap-toastr/toastr.min.css"/>
        <!-- END PAGE LEVEL STYLES -->

        <link rel="shortcut icon" href="favicon.ico" /> 

    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL ?>/assets/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL ?>/assets/assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL ?>/assets/assets/login/css/main.css">
    
        <style type="text/css">

        #mybutton {
            position: relative;
            z-index: 1;
            left: 93%;
            top: -30px;
            cursor: pointer;
         }

        .myinput {
            width: 100%;
            padding: 5px;
         }



        </style>


        </head>
    <!-- END HEAD -->


    <body class="login">

        <!-- BEGIN : LOGIN PAGE 5-1 -->

        <div class="limiter">
        <div class="container-login100" style="background-color: #364150;">
            <div class="wrap-login100 p-l-70 p-r-70 p-t-40 p-b-33">
                <form action="<?php echo site_url('auth/doAuth') ?>" class="login100-form validate-form flex-sb flex-w " method="post">
                    <span class="login100-form-title p-b-20">
                        <!-- <img src="<?php echo ROOT_URL ?>/assets/assets/pages/img/login/logosmall.png" alt="logo" class="logo-default"  style="margin-top: 5px; height: 75px; width: 250px;"> -->
                          
                        <a href="">
                            <img src="<?php echo ROOT_URL ?>/assets/images/lp3i-logo.png" alt="logo" class="logo-default" >
                        </a>
                        <hr>
                        <h3 style="color : black;"><font><b><i>Login</i></b></font></h3>
                        
                    </span>
                    <!-- Login Facebook -->
                    <!-- <a href="#facebook" data-toggle="modal" class="facebook btn btn-face m-b-20">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        Facebook
                    </a> -->
                    <!-- end facebook -->

                    <!-- login google -->
                   <!--  <a  href="#google" data-toggle="modal" class="googleplus btn btn-google m-b-20">
                        <img src="<?php echo ROOT_URL ?>/assets/images/icon-google.png" alt="GOOGLE">
                        Google
                    </a> -->
                    <!-- end google -->
                    
                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            <b>Username</b>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input form-group" data-validate = "Username is required">
                        <input class="form-control form-control-solid placeholder-no-fix form-control" type="text" autocomplete="off" placeholder="Username" name="credentials[user]" value="<?php echo $this->session->flashdata('input') ?>" required/>             
                    </div>
                    
                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            <b>Password</b>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input form-group" data-validate = "Password is required">
                        <input class="form-control form-control-solid placeholder-no-fix" type="password" id='pass' autocomplete="off" placeholder="Password" name="credentials[pwd]" required/>
                        <span id="mybutton" onclick="change()"><i class="fa fa-eye" aria-hidden="true"></i></span>
                    </div>

              
                        <button class="btn btn-primary mt-1 btn-block" type="submit">
                            Sign In
                        </button>

                        <div class="row mt-4">
<!--                            <div class="col-sm-12">
                                        <a href="#forget-password" data-toggle="modal" ><b>Forgot Password?</b></a>
                                </div> -->
         <!--                   <div class="col-sm-6">
                                        <a href="#singup" data-toggle="modal" class=" pull-right">Daftar</a>
                                </div>
                                 -->
                                 
                        </div>
                        <div class="w-full text-center p-t-55">
                            <span class="txt2" style="color: black;">
                                2020 © KKI MI
                            </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

  <!--   END LOGIN FORM  -->

                             <!-- BEGIN FORGOT PASSWORD FORM -->

                             <div class="modal fade bs-modal-sm" id="forget-password" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header bg-blue">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title"><b>Forget Password</b></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-layer">
                                                    <form action="<?php echo site_url('auth/forget')?>" method="post">
<!--                                                     <h3 class="uppercase" align="center">Forget Password</h3>
                                                    <hr> -->
                                                        <p> Enter your lecturer's ID below for resetting your password. </p>
                                                        <div class="form-group mt-3">
                                                            <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Lecturer's ID" name="userid" /> </div>
                                                        <div class="form-actions">
                                                            <button type="button" id="back-btn" class="btn grey btn-default back-btn">Back</button>
                                                            <button type="submit" class="btn blue btn-success pull-right">Send</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                                    <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            </div>




                                    <!-- <form class="forget-form" action="<?php echo site_url('auth/forget')?>" method="post">
                                    <h3 class="uppercase" align="center">Forgot Password</h3>
                                    <hr>
                                        <p> Enter your lecturer's ID below for resetting your password. </p>
                                        <div class="form-group">
                                            <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Lecturer's ID" name="userid" /> </div>
                                        <div class="form-actions">
                                            <button type="button" id="back-btn" class="btn grey btn-default back-btn">Back</button>
                                            <button type="submit" class="btn blue btn-success pull-right">Send</button>
                                        </div>
                                    </form>  -->
                                    <!-- END FORGOT PASSWORD FORM -->



                                    <!-- BEGIN SIGN UP FORM -->

                                     <div class="modal fade bs-modal-sm" id="singup" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header bg-blue">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title"><b>Register</b></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="modal-layer">
                                                        <form action="<?php echo site_url('auth/signup')?>" method="post">
                                                            <!-- <h3 class="uppercase" align="center">Register</h3>
                                                            <hr> -->
                                                                <p>Aktifasi Smart Lecturer</p>   
                                                                <div class="form-group input-nim">
                                                                    <label for="signup-nim">Enter your Lecturer's ID and date of your birth</label>
                                                                    <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Lecturer's ID" name="signup[id]" id="signup-id" required/> 
                                                                    <input type="text" id="signup-birth" name="signup[birth]" class="form-control mask_date" placeholder="Date of Birth" required/>
                                                                </div>
                                                                <div class="form-actions">
                                                                    <button type="button" id="back-btn" class="btn grey btn-default back-btn">Back</button>
                                                                    <button type="button" class="btn blue btn-success pull-right" id="verify">Verify</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                            </div>
            </div>
        </div>


        <div class="modal fade bs-modal-lg" id="facebook" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-blue">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title"><b>Login Dengan Facebook</b></h4>
                            </div>
                            <div class="modal-body">
                                <div class="modal-layer">
                                            <p align="center">
                                            <img border="0" src="<?php echo ROOT_URL ?>/assets/images/facebook.png" width="277" height="265"></p>
                                    <div class="row">
                                       <div class="col-md-12">
                                           <p align="center">
                                           <span style="">Untuk login dengan Facebook harap diperhatikan <b>Email</b> anda pada akun <b>Facebook</b> adalah <b>sama</b><br> dengan <b>Email</b> pada <b>E-Lecturer</b></span> <br>
                                            <br><a href="<?php echo $facebook_url ?>"  class="btn btn-primary">Saya mengerti dan Lanjutkan</a>
                                            </p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>
           <div class="modal fade bs-modal-lg" id="google" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-red">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title"><b>Login Dengan Google</b></h4>
                            </div>
                            <div class="modal-body">
                                <div class="modal-layer">
                                            <p align="center">
                                            <img border="0" src="<?php echo ROOT_URL ?>/assets/images/googleplus.png" width="277" height="265"></p>
                                    <div class="row">
                                       <div class="col-md-12">
                                           <p align="center">
                                           <span style="">Untuk login dengan Google harap diperhatikan <b>Email</b> anda pada akun <b>Google</b> adalah <b>sama</b><br> dengan <b>Email</b> pada <b>E-Lecturer</b></span> <br>
                                            <br><a href="<?php echo $google_url ?>"  class="btn btn-danger">Saya mengerti dan Lanjutkan</a>
                                            </p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>
        <!-- END : LOGIN PAGE 5-1 -->
        <!--[if lt IE 9]>
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/respond.min.js"></script>
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
    
    <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/jquery.min.js" type="text/javascript"></script>

    <script src="<?php echo ROOT_URL ?>/assets/assets/bootstrap-4.4.1-dist/js/bootstrap.min.js" type="text/javascript"></script>
<!--     <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/animsition/js/animsition.min.js"></script> -->
    <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/popper.js/dist/umd/popper.js"></script>
<!--     <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/select2/js/select2.min.js"></script> -->
    <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/moment/min/moment.min.js"></script>

    <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/countdowntime/countdowntime.js"></script>
    <script src="<?php echo ROOT_URL ?>/assets/assets/login/js/main.js"></script>

    <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL ?>/assets/assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>

    <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
        <?php
        if ($this->session->flashdata('message') != ''):
        ?>
    <script type="text/javascript">
        jQuery(document).ready(function() {       
           toastr.info('<?php echo $this->session->flashdata('message') ?>', 'Notifikasi', 
            {
                timeOut: 40000,
                closeButton: true,
                showMethod: "slideDown",
                hideMethod: "slideUp",
                positionClass: "toast-bottom-left"
            })
        });
    </script>
        <?php 
        endif;
        ?>
        <script type="text/javascript">
        $(".mask_date").inputmask("y-m-d", {
            autoUnmask: false,
            "placeholder": "yyyy-mm-dd"
        });
        jQuery("#verify").click(function() {
            id = jQuery("#signup-id").val();
            birth = jQuery("#signup-birth").val();
            spinner = '<img id="preloader" src="<?php echo ROOT_URL ?>/assets/assets/pages/img/loading-spinner-blue.gif" class="pull-right" style="margin-right:10px;margin-top:5px;">';
            jQuery(".signup-form .form-actions").append(spinner);
            jQuery(".signup-form #verify").attr('disabled', true);
            jQuery.ajax({
                type :"POST",
                data :{id:id,birth:birth},
                url :"<?php echo site_url('auth/verifySignup/') ?>",
                dataType : "json",
                success : function (val){
                    if (val == '0'){
                        var userpwd = '<div class="form-group input-pwd">' +
                                    '<label for="signup-pwd">Masukan Sandi(maksimal 7 karakter)</label>' +
                                    '<input class="form-control placeholder-no-fix form-group" type="password" placeholder="Sandi" name="signup[pwd]" id="signup-pwd" maxlength="7" /> ' +
                                    '</div>'
                        var button = '<button type="submit" class="btn blue btn-success pull-right" id="btn-submit">Submit</button>'
                        jQuery(".signup-form .form-actions #verify").remove();
                        jQuery(".signup-form #signup-birth").remove();
                        jQuery(".signup-form .form-actions #preloader").remove();
                        jQuery(".signup-form .back-btn").hide();

                        jQuery(".signup-form .form-actions").append(userpwd);
                        jQuery(".signup-form .form-actions").append(button);
                    }
                    else if (val == '1'){
                        notification('Akun anda sudah dibuat');
                        jQuery(".signup-form .form-actions #preloader").remove();
                        jQuery(".signup-form #verify").attr('disabled', false);
                    }
                    else {
                        notification('Maaf, kami tidak menemukan anda pada basis data kami, silahkan hubungi bagian akademik.');
                        jQuery(".signup-form .form-actions #preloader").remove();
                        jQuery(".signup-form #verify").attr('disabled', false);
                    }
                    function notification(msg){
                        toastr.info(msg, 'Notifikasi', 
                        {
                            timeOut: 40000,
                            closeButton: true,
                            showMethod: "slideDown",
                            hideMethod: "slideUp",
                            positionClass: "toast-bottom-left"
                        })
                    }
                }
            });
        });
        </script>
        <script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/validate.js" type="text/javascript"></script>

        <script type="text/javascript">
         function change()
         {
            var x = document.getElementById('pass').type;
 
            if (x == 'password')
            {
               document.getElementById('pass').type = 'text';
               document.getElementById('mybutton').innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
            }
            else
            {
               document.getElementById('pass').type = 'password';
               document.getElementById('mybutton').innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
            }
         }
      </script>
</body>

</html>