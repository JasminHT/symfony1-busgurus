<?php echo use_helper('sfSimpleCMS') ?>
<div id="cms" class="onboard">
    <div id='page-header'>
        <img src="/busgurus/images/ICON_OnBoard.png">
        <?php if ($sf_user->getCulture() == 'en') { ?>
        <h1>HR <strong>Onboard</strong></h1>
        <?php } else { ?>
        <h1><strong>Aborder</strong> les RH</h1>
        <?php } ?>
    </div>
    <div>
    <?php include_partial('global/onBoardHeaderMenu', array('slug' => $page->getSlug(),'culture' => $culture)) ?>
    </div>
    <div id="subnav">
        <?php echo link_to(image_tag($sf_user->getCulture().'/onboard.png', "width=177 height=66  class='toolsTitle'   alt=". __('HR ONBOARD')),"@sf_cms_show?slug=onboard&sf_culture=".$sf_user->getCulture());?>
        <?php if(!include_slot('sfSimpleCMS_breadcrumb')): ?>
            <?php include_component('sfSimpleCMS', 'breadcrumb', array('page' => $page, 'culture' => $culture)) ?>
        <?php endif; ?>
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
    <div id="leftnav">
        <?php include_partial('global/onBoardMenu', array('slug' => $page->getSlug(),'culture' => $culture)) ?>
    </div>
    <br class="clearFloat" clear="all"/>
</div>