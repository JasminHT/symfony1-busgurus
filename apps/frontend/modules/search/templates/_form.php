<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>
<ul>
    <li class="search"><strong><?php echo __("Advanced Search") ?></strong>
        <form action="<?php echo url_for('@searchQuery?sf_culture='.$sf_request->getParameter('sf_culture')) ?>">
            <table><?php echo $form ?></table>
            <input type="submit" value="<?php echo __("Search") ?>" />
        </form>
    </li>
</ul>