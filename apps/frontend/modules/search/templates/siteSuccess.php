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
      <h1><?php echo __('Search Entire Site')  ?></h1>
      <hr />
      <form action="<?php echo url_for('@searchSite?sf_culture='.$sf_request->getParameter('sf_culture')) ?>" id="cse-search-box">
        <div>
          <input type="hidden" name="cx" value="<?php echo $googleSearchId ?>" />
          <input type="hidden" name="cof" value="FORID:11" />
          <input type="hidden" name="ie" value="UTF-8" />
          <input type="text" name="q" size="31" />
          <input type="submit" name="sa" value="<?php echo __('Search')  ?>" />
        </div>
      </form>
      <script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=<?php echo $sf_request->getParameter('sf_culture') ?>"></script>
      <hr />
      <div id="cse-search-results"></div>
      <script type="text/javascript">
                var googleSearchIframeName = "cse-search-results";
                var googleSearchFormName = "cse-search-box";
                var googleSearchFrameWidth = 640;
                var googleSearchDomain = "www.google.com";
                var googleSearchPath = "/cse";
            </script>
      <script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
    </div>
  </div>
</div>
