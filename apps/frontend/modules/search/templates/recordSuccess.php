<?php use_helper('Date','I18N') ?>
<div id="leftContentContainer">
<?php include_component('search', 'form') ?>
<?php include_component('resources', 'leftMenuCategories', array('currentBaseCategoryId' => "")) ?>
</div>
<div id="mainResultsContainer" class="rounded">
    <div id="resultsPadding">
        <div id="recordContainer" class="rounded" >
            <?php echo link_to(image_tag($sf_user->getCulture()."/cat-back-btn.jpg","width=56 height=19 alt=".__('Back').""), '@searchResults?sf_culture='.$sf_request->getParameter('sf_culture').'&page='.$sf_request->getParameter('page').'&query='.$sf_request->getParameter('query'), "id=backBtn"); ?>
            <ul  id="breadcrumb">
                <li><?php echo link_to(__('Home'),'@homepage?sf_culture='.$sf_request->getParameter('sf_culture')); ?></li>
                <li>&nbsp;&raquo; <?php echo link_to(__('Search'),'@searchResults?sf_culture='.$sf_request->getParameter('sf_culture').'&page='.$sf_request->getParameter('page').'&query='.$sf_request->getParameter('query')); ?></li>
            </ul>
        <?php include_partial('resources/recordPanel', array('hrResource' => $hrResource, 'keywords' =>$keywords)) ?></div>
    </div>
</div>