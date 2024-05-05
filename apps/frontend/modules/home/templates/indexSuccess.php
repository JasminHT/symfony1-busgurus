 <!-- <?php use_helper('I18N') ?>
<div id="homeScreen"  class="rounded">
   <div id="flash">
        <script language="javascript" type="text/javascript">
            if (AC_FL_RunContent == 0) {
                alert("This page requires AC_RunActiveContent.js.");
            } else {
                AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0','name','site-intro','width','500','height','280','align','middle','id','site-intro','src','/busgurus/flash/<?php echo $sf_user->getCulture() ?>/site-intro','quality','high','bgcolor','#000000','allowscriptaccess','sameDomain','allowfullscreen','false','pluginspage','http://www.macromedia.com/go/getflashplayer','wmode','transparent','movie','/busgurus/flash/<?php echo $sf_user->getCulture() ?>/site-intro' ); //end AC code
            }
        </script>
        <noscript>
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" name="site-intro" width="500" height="280" align="middle" id="site-intro">
                <param name="allowScriptAccess" value="sameDomain" />
                <param name="allowFullScreen" value="false" />
                <param name="movie" value="/busgurus/flash/<?php echo $sf_user->getCulture() ?>/site-intro.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#000000" />
                <param name="wmode" value="transparent" />
                <embed src="/busgurus/flash/<?php echo $sf_user->getCulture() ?>/site-intro.swf" width="500" height="280" align="middle" quality="high" bgcolor="#000000" name="site-intro" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="transparent" />
            </object>
        </noscript>
    </div>
    <div id="message">
        <?php if($sf_user->getCulture() == "en") { ?>
        <p><em><?php echo image_tag($sf_user->getCulture()."/welcome.png","alt=".__('Welcome to BusGurus')." width=213 height=76" ); ?>
                <br /> This web-based HR knowledge centre has been designed to help professionals in Canada’s bus industry find Labour Market Information (LMI), resources, better practices, and linkages that will help you make better decisions.</em></p>
            <?php echo link_to(image_tag($sf_user->getCulture()."/continue.png","alt=".__('Continue >>')." width=112 height=27 align=right" ), '@hrLibrary?sf_culture='.$sf_request->getParameter('sf_culture')); ?>
        <?php } else { ?>
       <p><em><?php echo image_tag($sf_user->getCulture()."/welcome.png","alt=".__('Welcome to BusGurus')." width=213 height=76" ); ?>
                <br /> Ce centre de connaissances en ligne aide les professionnels de l’industrie de l’autobus du Canada à trouver de l’information sur le marché du travail (IMT), des ressources, de meilleures pratiques et des hyperliens, et à prendre de meilleures décisions.</em></p>
            <?php echo link_to(image_tag($sf_user->getCulture()."/continue.png","alt=".__('Continue >>')." width=112 height=27 align=right" ), '@hrLibrary?sf_culture='.$sf_request->getParameter('sf_culture')); ?>
        <?php } ?>
    </div>

</div>
    <div style="text-align:center; padding:10px">
       <?php echo link_to(__("(Continue to Library)"), '@sf_cms_show?slug=flash-intros&sf_culture='.$sf_request->getParameter('sf_culture').'&cat='.$sf_request->getParameter('cat')); ?>
    </div>-->


    <?php //use_helper('I18N') ?>
  <div id='page-header'>
      <img src="/busgurus/images//ICON_Library.png">
      <?php if ($sf_user->getCulture() == 'en') { ?>
      <h1><strong>HR </strong>Library</h1>
      <?php } else { ?>
      <h1>Biblioth&egrave;que des <strong>RH</strong></h1>
      <?php } ?>
  </div>

<!--
<ul id="homeCatBtnsContainer" class="image-overlay">
    <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-wm.png","alt=".__('Workforce Management')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=2', "class='main'"); ?></li>
    <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-recruit.png","alt=".__('Recruitment')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=3', "class='main'"); ?></li>
    <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-life.png","alt=".__('Lifelong learning')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=4', "class='main'"); ?></li>
    <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-working.png","alt=".__('Working Conditions')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=5', "class='main'"); ?></li>
    <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-gov.png","alt=".__('Government and Regulatory')." width=310 height=47" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=7', "class='main'"); ?></li>
    <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-general.png","alt=".__('General Links')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=6', "class='main'"); ?></li>
</ul>
-->

<ul id="homeCatBtnsContainer" class="image-overlay">
  <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-wm.png","alt=".__('Workforce Management')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=2', "class='main'"); ?><span class="mask"><?php echo link_to(image_tag($sf_user->getCulture()."/watch-intro-btn.jpg","alt=".__('Watch Workforce Management Introduction')." width=133  height=28 class=introBtn" ), '@resourcesIntro?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=2'); ?> <?php echo link_to(image_tag($sf_user->getCulture()."/skip-intro-btn.jpg","alt=".__('Go to Workforce Management Resources')." width=133  height=28 class=introBtn" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=2'); ?></span></li>
  <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-recruit.png","alt=".__('Recruitment')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=3', "class='main'"); ?><span class="mask"><?php echo link_to(image_tag($sf_user->getCulture()."/watch-intro-btn.jpg","alt=".__('Watch Recruitment Introduction')." width=133  height=28 class=introBtn" ), '@resourcesIntro?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=3'); ?> <?php echo link_to(image_tag($sf_user->getCulture()."/skip-intro-btn.jpg","alt=".__('Go to Recruitment Resources')." width=133  height=28 class=introBtn" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=3'); ?></span></li>
  <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-life.png","alt=".__('Lifelong learning')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=4', "class='main'"); ?><span class="mask"><?php echo link_to(image_tag($sf_user->getCulture()."/watch-intro-btn.jpg","alt=".__('Watch Lifelong learning Introduction')." width=133  height=28 class=introBtn" ), '@resourcesIntro?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=4'); ?> <?php echo link_to(image_tag($sf_user->getCulture()."/skip-intro-btn.jpg","alt=".__('Go To Lifelong learning Resources')." width=133  height=28 class=introBtn" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=4'); ?></span></li>
  <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-working.png","alt=".__('Working Conditions')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=5', "class='main'"); ?><span class="mask"><?php echo link_to(image_tag($sf_user->getCulture()."/watch-intro-btn.jpg","alt=".__('Watch Working Conditions Introduction')." width=133  height=28 class=introBtn" ), '@resourcesIntro?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=5'); ?> <?php echo link_to(image_tag($sf_user->getCulture()."/skip-intro-btn.jpg","alt=".__('Go to Working Conditions Resources')." width=133  height=28 class=introBtn" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=5'); ?></span></li>
  <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-gov.png","alt=".__('Government and Regulatory')." width=310 height=47" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=7', "class='main'"); ?><span class="mask"><?php echo link_to(image_tag($sf_user->getCulture()."/watch-intro-btn.jpg","alt=".__('Watch Government & Regulatory Introduction')." width=133 height=28 class=introBtn" ), '@resourcesIntro?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=7'); ?> <?php echo link_to(image_tag($sf_user->getCulture()."/skip-intro-btn.jpg","alt=".__('Go to Government & Regulatory Resources')." width=133 height=28 class=introBtn" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=7'); ?></span></li>
  <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-general.png","alt=".__('General Links')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=6', "class='main'"); ?><span class="mask"><?php echo link_to(image_tag($sf_user->getCulture()."/watch-intro-btn.jpg","alt=".__('Watch General Links Introduction')." width=133  height=28 class=introBtn"  ), '@resourcesIntro?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=6'); ?> <?php echo link_to(image_tag($sf_user->getCulture()."/skip-intro-btn.jpg","alt=".__('Go to General Links Resources')." width=133  height=28 class=introBtn"  ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=6'); ?></span></li>
</ul>