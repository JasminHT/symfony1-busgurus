<?php echo use_helper('sfSimpleCMS') ?>

<div id="cms" class="nos">
  <div id='page-header'>
      <img src="/busgurus/images/tools-trans-nos.png">
      <?php if ($sf_user->getCulture() == 'en') { ?>
      <h1><strong>National</strong> Occupational Standards</h1>
      <?php } else { ?>
      <h1>Normes Professionelles <strong>Nationales</strong></h1>
      <?php } ?>
  </div>

  <?php if ($sf_user->getCulture() == 'en') { ?>

  <iframe width='751' height='422' src='https://www.youtube.com/embed/59tgJv97--4?rel=0&autoplay=1&showinfo=0' allow='autoplay; encrypted-media' frameborder='0'></iframe>
  <?php } else { ?>
  <iframe width='751' height='422' src='https://www.youtube.com/embed/pT2jL0eKz0o?rel=0&autoplay=1&showinfo=0' allow='autoplay; encrypted-media' frameborder='0'></iframe>
  <?php } ?>


    <div id="subnav">
            <?php echo link_to(image_tag($sf_user->getCulture().'/tools.png', "class='toolsTitle'   alt=". __('HR Tools')),"@tools?sf_culture=".$sf_user->getCulture());?>
          <?php if(!include_slot('sfSimpleCMS_breadcrumb')): ?>
          <?php include_component('sfSimpleCMS', 'breadcrumb', array('page' => $page, 'culture' => $culture)) ?>
        <?php endif; ?>
    </div>
  <div id="icon">
  	<img src="/busgurus/images/tools-icon-nos.jpg" width="181" height="136" alt="Workforce" />
    <?php include_partial('global/nosMenu', array('slug' => $page->getSlug(),'culture' => $culture)) ?>
    
    </div>
    <div id="mainText">
        <div id="textBg" class='rounded'>
            <br />
            <?php if (sf_simple_cms_has_slot($page, 'slot1')):
                sf_simple_cms_slot($page, 'slot1', '[insert overview here]');
            endif;  ?>
            <?php include_editor_tools($page,$edit_form,$create_form) ?>
        </div>
    </div>
</div>