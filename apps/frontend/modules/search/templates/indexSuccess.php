<?php echo use_helper('sfSimpleCMS','I18N') ?>

<?php
// Select which goolge search to use
$googleSearchId = "012574505473862074091:zwr-njxil9s";
if($sf_request->getParameter('sf_culture') == "fr"){
	$googleSearchId = "012574505473862074091:5s3eukeiijq";
}
?>

<div id="cms" class="simplePage">
    <div id="mainText" class='rounded'>
        <div id="textBg" class='rounded'>        
            <h1><?php echo image_tag($sf_user->getCulture().'/title-search.png', "alt=". __('Search'));?></h1>
            <div class="searchRight rounded">
                <h2><?php echo __('Search Entire Site')  ?></h2>
                <br />
                <form action="/busgurus/<?php echo $sf_request->getParameter('sf_culture') ?>/search/site/" id="cse-search-box">
                    <div>
                        <input type="hidden" name="cx" value="<?php echo $googleSearchId ?>" />
                        <input type="hidden" name="cof" value="FORID:11" />
                        <input type="hidden" name="ie" value="UTF-8" />
                        <input type="text" name="q" size="31" />
                        <input type="submit" name="sa" value="<?php echo __('Search')  ?>" />
                    </div>
                </form>
                <script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=<?php echo $sf_request->getParameter('sf_culture') ?>"></script>
            </div>
            <div class="searchRight rounded">
                <h2><?php echo __('Search HR Library')  ?></h2>
                <?php include_component('search', 'form') ?>
            </div>
            <br clear="all" class="clearfloat" />&nbsp;
        </div>
    </div>
</div>
