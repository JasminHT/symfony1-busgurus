<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/busgurus/favicon.ico" />
        <?php use_stylesheet('/busgurus/css/main.css') ?>
        <?php use_stylesheet('/busgurus/css/admin.css') ?>
        <?php use_stylesheet('admin.css') ?>
    </head>
    <body>
   <?php include_partial('sfAdminDash/header') ?>
            <?php echo $sf_content ?>
<?php include_partial('sfAdminDash/footer') ?>
    </body>
</html>