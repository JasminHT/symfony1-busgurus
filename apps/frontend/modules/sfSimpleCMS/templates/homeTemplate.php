<?php echo use_helper('sfSimpleCMS') ?>
<div id="cms">
<?php slot('sfSimpleCMS_breadcrumb') ?>&nbsp;<?php end_slot() ?>
<?php sf_simple_cms_slot($page, 'slot1', '[insert welcome message here]') ?>
<?php include_editor_tools($page,$edit_form,$create_form) ?>
</div>