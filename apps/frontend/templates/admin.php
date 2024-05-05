<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/busgurus/favicon.ico" />
        <link rel="stylesheet" type="text/css" media="screen" href="/busgurus/css/main.css">
        <link rel="stylesheet" type="text/css" media="screen" href="/busgurus/css/admin.css">
    </head>
    <body class="en">
        <div id="headerBg"></div>
        <div id="container">
            <div id="header">
                <?php include_partial('global/header', array('culture' => "en")) ?>
            </div>
            <div id="content">
                <div id="adminMenu">
                    <ul>
                        <li>
                            <?php echo link_to('Main', 'admin/index') ?>
                        </li>
                        <li>
                            <?php echo link_to('Resources', '@hr_resources') ?>
                        </li>
                        <li>
                            <?php echo link_to('Categories', 'adminCategories/index') ?>
                        </li>
                        <li>
                            <?php echo link_to('Keywords', 'adminKeywords/index') ?>
                        </li>
                        <li>
                            <?php echo link_to('Pages', ' sfSimpleCMSAdmin/index') ?>
                        </li>
                        <li>
                            <?php echo link_to('Media', ' sfAsset/index') ?>
                        </li>
                        <li class="lastItem">
                            <?php echo link_to('Admin', ' sfGuardUser/index') ?>
                        </li>
                    </ul>
                    <div id="logoutBtn"><?php echo link_to('logout', '@sf_guard_signout') ?></div>
                </div>
                <?php echo $sf_content ?>
            </div>
            <br class="clearFloat" clear="all"/>&nbsp;
        </div>               <br class="clearFloat" clear="all"/>&nbsp;
        <div id="footer">
            <?php //include_partial('global/footer', array('culture' => "en")) ?>
        </div>
    </body>
</html>