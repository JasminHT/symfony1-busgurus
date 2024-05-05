<?php echo use_helper('sfSimpleCMS') ?>
<div id="cms" class="simplePage whitLinks">
    <div id="mainText" class='rounded'>
        <div id="textBg" class='rounded'>
            <?php if (sf_simple_cms_has_slot($page, 'slot1')): ?>
                <?php sf_simple_cms_slot($page, 'slot1', '[insert overview here]') ?>
            <?php endif; ?>
            <?php include_editor_tools($page,$edit_form,$create_form) ?>
        </div>
    </div>
</div>