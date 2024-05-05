<?php use_helper('I18N') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <meta charset="utf-8" name="viewport" content= "width=device-width, initial-scale=1.0">
        <?php include_title() ?>
        <?php include_stylesheets() ?>
        <?php include_partial('global/feed') ?>
        <?php $is_frontpage = ($_SERVER['REQUEST_URI'] == '/busgurus/'); ?>
        <link rel="shortcut icon" href="/busgurus/favicon.ico" />

        <!--[if lt IE 7]>
                <script type="text/javascript" src="/busgurus/js/unitpngfix.js"></script>
        <![endif]-->
    </head>
    <body class="<?php echo $sf_user->getCulture()?>">
        <?php  include($_SERVER['DOCUMENT_ROOT']."/metasite/metaheader.php"); ?>
        <div id="container" <?php if ($is_frontpage) echo "class='homepage'";  ?> >
            
            <!--
            <?php if ($is_frontpage)  { ?>
                <div id="banner">
                    <?php include_partial('global/banner', array('culture' => "en")) ?>
                </div>
            <?php } ?>
            -->
            <!--
            <div id="header" <?php if ($is_frontpage)  {?> style="border-radius:0;" <?php } ?> >
                <?php include_partial('global/header', array('culture' => "en")) ?>
                <?php if ($is_frontpage)  { ?>
                    <div id='introduction'>
                        Introduction
                    </div>
                <?php } ?>
            </div>
            -->
            <div id="content" class='clearfix'>
                <?php echo $sf_content ?>
            </div>
        
            <div id="footer">
                <?php include_partial('global/footer', array('culture' => "en")) ?>
            </div>
        </div>
        <?php  include($_SERVER['DOCUMENT_ROOT']."/metasite/metafooter.php"); ?>
    </body>
</html>
