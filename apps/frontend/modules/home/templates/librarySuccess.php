<?php //use_helper('I18N') ?>
  <!--<div id='page-header'>
      <img src="/busgurus/images//ICON_Library.png">
      <?php if ($sf_user->getCulture() == 'en') { ?>
      <h1><strong>HR </strong>Library</h1>
      <?php } else { ?>
      <h1>Biblioth&egrave;que des <strong>RH</strong></h1>
      <?php } ?>
  </div>
<ul id="homeCatBtnsContainer" class="image-overlay">
	<li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-wm.png","alt=".__('Workforce Management')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=2', "class='main'"); ?></li>
	<li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-recruit.png","alt=".__('Recruitment')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=3', "class='main'"); ?></li>
	<li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-life.png","alt=".__('Lifelong learning')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=4', "class='main'"); ?></li>
	<li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-working.png","alt=".__('Working Conditions')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=5', "class='main'"); ?></li>
	<li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-gov.png","alt=".__('Government and Regulatory')." width=310 height=47" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=7', "class='main'"); ?></li>
	<li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-general.png","alt=".__('General Links')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=6', "class='main'"); ?></li>
</ul>-->

<div style='text-align: center' class="content">


  <?php if ($GLOBALS['metalang'] =='en') { ?>
    <h1>Page under construction</h1>
    <h2>Content coming soon </h2>
  
 <?php } else { ?>
    <h1>Page en construction</h1>
    <h2>Cette page sera bient&ocirc;t construite </h2>

  <?php } ?>
  
  <div class='clearfix'></div>
</div>
