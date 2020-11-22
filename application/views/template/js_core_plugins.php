
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/jquery-idleTimeout/dist/js/jquery-idleTimeout-plus.js" type="text/javascript"/></script>
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/moment/min/moment.min.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/sticky-js/dist/sticky.min.js" type="text/javascript"></script>

       <?php
        if ($this->session->flashdata('message') != ''):
        ?>
        <script type="text/javascript">
        jQuery(document).ready(function() {       
           toastr.info('<?php echo $this->session->flashdata('message') ?>', 'Notification', 
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
