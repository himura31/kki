<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php echo APP_NAME ?> | <?php echo $content_title ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Sistem Informasi Akademik, Smart Student" name="description"/>
        <meta content="LP3I" name="author"/>
        <meta content="LP3I, Cepat Kerja, Khaerul Istafa, , khaerulistafa@gmail.com" name="keywords"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <?php $this->load->view('template/css_global_mandatory.php'); ?>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <?php $this->load->view($content_css); ?>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <?php $this->load->view('template/css_global_theme.php'); ?>
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <?php $this->load->view('template/css_layout_theme.php'); ?>
        <!-- END THEME LAYOUT STYLES -->
        <!-- <link rel="shortcut icon" href="favicon.ico" /> -->
        <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL ?>/assets/assets/global/plugins/bootstrap-toastr/toastr.min.css"/>
        </head>
    <!-- END HEAD -->
