<?php use_helper('I18N') ?>
<ul>
    <li class="search"><strong><?php echo __("Advanced Search") ?></strong>
        <form action="<?php echo url_for('@searchQuery') ?>">
            <input type="text" name="query" value="<?php echo $sf_request->getParameter('query'); ?>" id="search_keywords" />
            <input type="submit" value="<?php echo __("Search") ?>" />
            <div class="help"><?php echo __("Enter keywords such as: recruitment, training, learning"); ?></div>
        </form>
    </li>
</ul>