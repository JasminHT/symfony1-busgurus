<?php echo use_helper('sfSimpleCMS') ?>
<div id="cms" class="wheel">
    <div id='page-header'>
      <img src="/busgurus/images/tools-trans-wheel.png">
      <?php if ($sf_user->getCulture() == 'en') { ?>
      <h1>Behind the <strong>Wheel</strong></h1>
      <?php } else { ?>
      <h1>Au <strong>Volant</strong></h1>
      <?php } ?>
  </div>
    <div id="subnav">
            <?php echo link_to(image_tag($sf_user->getCulture().'/tools.png', "class='toolsTitle'   alt=". __('HR Tools')),"@tools?sf_culture=".$sf_user->getCulture());?>
          <?php if(!include_slot('sfSimpleCMS_breadcrumb')): ?>
          <?php include_component('sfSimpleCMS', 'breadcrumb', array('page' => $page, 'culture' => $culture)) ?>
        <?php endif; ?>
    </div>
  <div id="icon"><img src="/busgurus/images/tools-icon-wheel.jpg" width="181" height="136" alt="Workforce" />
  <?php include_partial('global/wheelMenu', array('slug' => $page->getSlug(),'culture' => $culture)) ?>
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
    &nbsp;<br class="clearFloat" clear="all"/>&nbsp;
</div>