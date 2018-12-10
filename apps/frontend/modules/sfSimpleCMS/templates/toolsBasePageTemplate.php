<?php echo use_helper('sfSimpleCMS') ?>
<div id="cms" class="toolsBase">
	 <div id='page-header'>
        <img src="/busgurus/images/ICON_tools.png">
        <?php if ($sf_user->getCulture() == 'en') { ?>
        <h1>HR <strong>Tools</strong></h1>
        <?php } else { ?>
        <h1><strong>Outils</strong> des RH</h1>
        <?php } ?>
    </div>
    <img src="/busgurus/images/<?php echo $sf_user->getCulture() ?>/tools.png" width="128" height="66" alt="<?php echo __('HR Tools') ?>" />
	<div id="toolsBaseMenu">
    <?php if (sf_simple_cms_has_slot($page, 'slot1')):
    sf_simple_cms_slot($page, 'slot1', '[insert overview here]');
    endif;  ?>
    <?php include_editor_tools($page,$edit_form,$create_form) ?><br clear="all" class="clearFloat" />
	&nbsp;
  </div>       
</div>