<!-- BEGIN BODY -->
        <?php 
            $this->load->view("template/head");
        ?>


    <body class="kt-header--fixed kt-header-mobile--fixed kt-aside--fixed kt-page--loading">
        <div class="kt-grid kt-grid--hor kt-grid--root">
                <div class="kt-wrapper" id="kt_wrapper">
                    <!-- TOP MENU -->
                    <?php $this->load->view("template/header")?>
                    <!-- END TOP MENU -->

                    <!-- BEGIN CONTAINER -->
                    <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid">
                        <!-- BEGIN SIDEBAR -->
                        <?php $this->load->view("template/sidebar")?>
                        <!-- END SIDEBAR -->
                        <!-- BEGIN CONTENT -->
                            <!-- BEGIN CONTENT BODY -->
                                  <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                                     <?php $this->load->view('template/page_head.php');  ?>
                                     
                                    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                                        <?php
                                           
                                            $this->load->view($content_file); 
                                        ?>

                                    </div>
                                </div>
                           
                            <!-- END CONTENT BODY -->
                    </div>     
                </div>
            
        </div>
      
            <?php 
                $this->load->view("template/footer");

            ?>


        <!-- BEGIN CORE PLUGINS -->
        <?php $this->load->view('template/js_core_plugins.php'); ?>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <?php $this->load->view($content_js); ?>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN JS GLOBAL SCRIPT -->
        <?php $this->load->view('template/js_global_script.php'); ?>
        <!-- END JS GLOBAL SCRIPT -->

    </body>
</html>
 