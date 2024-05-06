
<?php use_helper('I18N') ?>
<div id="homeScreen"  class="rounded">

  <div id='page-header'>
      <img src="/busgurus/images//ICON_Library.png">
      <?php if ($sf_user->getCulture() == 'en') { ?>
      <h1><strong>HR </strong>Library</h1>
      <?php } else { ?>
      <h1>Biblioth&egrave;que des <strong>RH</strong></h1>
      <?php } ?>
  </div>

  <div id="flash" style="display: flex">
    <p>flash was here</p>
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

<div style="clear:Both; height: 460px;">
  <ul id="homeCatBtnsContainer" class="image-overlay">

    <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-wm.png","alt=".__('Workforce Management')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=2', "class='main'"); ?></li>

    <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-recruit.png","alt=".__('Recruitment')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=3', "class='main'"); ?></li>

    <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-life.png","alt=".__('Lifelong learning')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=4', "class='main'"); ?></li>

    <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-working.png","alt=".__('Working Conditions')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=5', "class='main'"); ?></li>

    <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-gov.png","alt=".__('Government and Regulatory')." width=310 height=47" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=7', "class='main'"); ?></li>

    <li class="homeCatBtns"><?php echo link_to(image_tag($sf_user->getCulture()."/hm-btn-general.png","alt=".__('General Links')." width=310 height=28" ), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&cat=6', "class='main'"); ?></li>

  </ul>
</div>


<br>

  <div style="text-align:center; padding:10px; clear:Both">
     <?php echo link_to(__("(Continue to Library)"), '@sf_cms_show?slug=flash-intros&sf_culture='.$sf_request->getParameter('sf_culture')); ?>
  </div>