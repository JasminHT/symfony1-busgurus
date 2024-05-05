<?php use_helper('I18N') ?>

<div id="cms" class="toolsBase"> <?php echo image_tag($sf_user->getCulture().'/hr-tools.png', "alt=".__('HR Tools')."") ?>
  <div id="toolsBaseMenu">
    <div class="toolsMenuItem"> <?php echo link_to(image_tag('tools-icon-workforce.jpg', "width=181 height=136 alt=".__('Workforce and Succession Planning')),"@sf_cms_show?slug=workforce&sf_culture=".$sf_user->getCulture());?>
      <p><?php echo image_tag($sf_user->getCulture().'/tools-workforce-title.jpg', "width=161 height=78 alt=".__('Workforce and Succession Planning')) ?></p>
      <p><?php echo link_to(image_tag($sf_user->getCulture().'/open-black-btn.jpg', "width=133 height=28 alt=".__('Open')),"@sf_cms_show?slug=workforce&sf_culture=".$sf_user->getCulture());?></p>
      <?php if($sf_user->getCulture() == "en") { ?>
      <p> This sub-site features a full toolkit of techniques, working calculators, and good solid advice on workforce planning and succession – two “hot topics” in the bus industry in Canada today.</p>
      <?php }else{ ?>
      <p>Ce site-secondaire comporte une trousse complète d’outils et de techniques, des calculatrices en ligne, de bons conseils sur la planification de main-d’oeuvre et de la succession – qui sont aujourd’hui deux « thèmes d’actualité » courantes dans l’industrie de l’autobus au Canada.</p>
      <?php } ?>
    </div>
    <div class="toolsMenuItem"> <?php echo link_to(image_tag('tools-icon-roi.jpg', "width=181 height=136 alt=".__('ROI Forecasting')),"@sf_cms_show?slug=roi&sf_culture=".$sf_user->getCulture());?>
      <p><?php echo image_tag($sf_user->getCulture().'/tools-roi-title.jpg', "width=161 height=78 alt=".__('ROI Forecasting')) ?></p>
      <p><?php echo link_to(image_tag($sf_user->getCulture().'/open-black-btn.jpg', "width=133 height=28 alt=".__('Open')),"@sf_cms_show?slug=roi&sf_culture=".$sf_user->getCulture());?></p>
      <?php if($sf_user->getCulture() == "en") { ?>
      <p> More and more common as a management and planning tool, ROI forecasting for human resources does not need to be unnecessarily complex. This sub-site features a “turn key” ROI model for the Canadian bus industry.</p>
      <?php }else{ ?>
      <p>De plus en plus le Rendement sur capital Investi sert comme outil de gestion et de planification, les outils de prévisions pour les ressources humaines n'ont pas besoin d'être inutilement complexe. Ce site secondaire comporte un modèle qui est prêt a utiliser pour l'industrie canadienne d'autobus.</p>
      <?php } ?>
    </div>
    <div class="toolsMenuItem"> <?php echo link_to(image_tag('tools-icon-wheel.jpg', "width=181 height=136 alt=".__('Behind the Wheel')),"@sf_cms_show?slug=wheel&sf_culture=".$sf_user->getCulture());?>
      <p><?php echo image_tag($sf_user->getCulture().'/tools-wheel-title.jpg', "width=161 height=78 alt=".__('Behind the Wheel')) ?></p>
      <p><?php echo link_to(image_tag($sf_user->getCulture().'/open-black-btn.jpg', "width=133 height=28 alt=".__('Open')),"@sf_cms_show?slug=wheel&sf_culture=".$sf_user->getCulture());?></p>
      <?php if($sf_user->getCulture() == "en") { ?>
      <p>Very important for companies examining new and/or better practices for recruiting, training, and retaining  employees, this critically-acclaimed guide carefully tracks the processes and the rationale for investing in people.</p>
      <?php }else{ ?>
      <p>Très important pour les entreprises examinant de nouvelles et/ou meilleures pratiques pour le recrutement, la formation et la rétention des employés, ce guide critique et acclamé dépiste soigneusement les procédés et la rationalisation d’investir dans le capital humain.</p>
      <?php } ?>
    </div>
    <div class="toolsMenuItem"> <?php echo link_to(image_tag('tools-icon-nos.jpg', "width=181 height=136 alt=".__('NOS')),"@sf_cms_show?slug=nos&sf_culture=".$sf_user->getCulture());?>
      <p><?php echo image_tag($sf_user->getCulture().'/tools-nos-title.jpg', "width=161 height=78 alt=".__('NOS')) ?></p>
      <p><?php echo link_to(image_tag($sf_user->getCulture().'/open-black-btn.jpg', "width=133 height=28 alt=".__('Open')),"@sf_cms_show?slug=nos&sf_culture=".$sf_user->getCulture());?></p>
      <?php if($sf_user->getCulture() == "en") { ?>
      <p>National Occupational Standards are the critical foundation stones for careers in the bus industry. MCPCC’s thorough, rigorous industry-developed Standards are being implemented nationwide in all sectors of the industry.</p>
      <?php }else{ ?>
      <p>Les Normes professionnelles nationales forment la base critique des carrières dans l'industrie de l'autobus.  Les normes  du CCTP ont été développées par l’industrie, sont complètes et rigoureuses et sont mises en application dans tout le pays et dans tous les secteurs de l'industrie.</p>
      <?php } ?>
    </div>
    <br clear="all" class="clearFloat" />
    &nbsp; </div>
</div>
