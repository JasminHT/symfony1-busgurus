<?php use_helper('I18N') ?>
<div id="footerContent">
    <p>
        <?php echo link_to(__('Sitemap'),"@sf_cms_show?slug=sitemap&sf_culture=".$sf_user->getCulture());?> |
        <?php echo link_to(__('Disclaimer'),"@sf_cms_show?slug=disclaimer&sf_culture=".$sf_user->getCulture());?>
    </p>
</div>
<div class="rounded"></div>