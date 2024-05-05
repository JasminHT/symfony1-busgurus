<?php use_helper('Date','Text','I18N') ?>
<div id="leftContentContainer" class='search'>
<?php include_component('search', 'form') ?>
<?php include_component('resources', 'leftMenuCategories', array('currentBaseCategoryId' => "")) ?>
</div>
<div id="mainResultsContainer" class="rounded">
    <div id="resultsPadding">
        <div id="mainResultsSearchContainer" class="rounded">
            <ul  id="breadcrumb">
                <li><?php echo link_to(__('Home'),'@homepage?sf_culture='.$sf_request->getParameter('sf_culture')); ?></li>
                <li>&nbsp;&raquo; <?php echo __('Search'); ?></li>
                <li>&nbsp;&raquo; <?php echo $sf_request->getParameter('query'); ?></li>
            </ul><br class="clearFloat" />&nbsp;
            <br />&nbsp;<br />&nbsp;
        </div>
        <div class="recordNav rounded " >
            <div class="resultCount">
        <?php if(count($pager->getResults()) < 1){
            echo "".__('There are currently no results for your search.')."";
        } else { ?>
        <?php echo __('Results %1% - %2% of %3%', array('%1%' => $pager->getFirstIndice(), '%2%' => $pager->getLastIndice(), '%3%' => $pager->getNbResults())); ?>
        <?php } ?></div>&nbsp;
        <?php if ($pager->haveToPaginate()): ?>
            <?php echo link_to('&laquo;', '@searchResults?sf_culture='.$sf_request->getParameter('sf_culture').'&page='.$pager->getFirstPage().'&query='.$query) ?>
            <?php echo link_to(__('Previous'), '@searchResults?sf_culture='.$sf_request->getParameter('sf_culture').'&page='.$pager->getPreviousPage().'&query='.$query) ?>
            | <?php $links = $pager->getLinks(); foreach ($links as $page): ?>
            <?php echo ($page == $pager->getPage()) ? "<span class='recordNavCurrent'>".$page."</span>" : link_to($page, '@searchResults?sf_culture='.$sf_request->getParameter('sf_culture').'&page='.$page.'&query='.$query) ?>
            <?php if ($page != $pager->getCurrentMaxLink()): ?> | <?php endif ?>
            <?php endforeach ?>&nbsp;
            | <?php echo link_to(__('Next'), '@searchResults?sf_culture='.$sf_request->getParameter('sf_culture').'&page='.$pager->getNextPage().'&query='.$query) ?>
            <?php echo link_to('&raquo;', '@searchResults?sf_culture='.$sf_request->getParameter('sf_culture').'&page='.$pager->getLastPage().'&query='.$query) ?>
        <?php endif ?>
        </div>
    <?php
    $cursor = $pager->getFirstIndice();
    foreach ($pager->getResults() as $result):?>
        <div class="recordItem rounded">
            <?php echo link_to(" ",'@searchRecord?sf_culture='.$sf_request->getParameter('sf_culture').'&page='.$pager->getPage().'&id='.$result->getId().'&query='.$query, "class='resourceBtn rounded' title='".__('View Resource')."'"); ?>
            <div class="resourceItemDetails">
                <a href="<?php echo url_for('@searchRecord?sf_culture='.$sf_request->getParameter('sf_culture').'&page='.$pager->getPage().'&id='.$result->getId().'&query='.$query) ?>">
                <?php echo (($sf_request->getParameter('sf_culture') == "en") ? $result->getTitleEn() : $result->getTitleFr()); ?>
                </a>
                <span class="subDetails">
                    <?php if($sf_request->getParameter('sf_culture') == "en"){ ?>
                        <?php if($result->getEn() == 1  && $result->getUrlEn()) { echo __('(en)') ;} ?>
                        <?php if($result->getFr() == 1  && $result->getUrlFr()) { echo __('(fr)') ;} ?>
                    <?php }else{ ?>
                        <?php if($result->getFr() == 1  && $result->getUrlFr()) { echo __('(fr)') ;} ?>
                        <?php if($result->getEn() == 1 && $result->getUrlEn()) { echo __('(en)') ;} ?>
                      <?php } ?>
                    (<?php echo  __($result->getPubFormat()); ?>) - <?php echo format_date($result->getUpdatedAt()); ?></span>
                <?php echo truncate_text((($sf_request->getParameter('sf_culture') == "en") ? $result->getDescriptionEn() : $result->getDescriptionFr()) ,190,'...'); ?>
            </div>
        </div>
        <?php ++$cursor; endforeach; ?>
        <?php if ($pager->haveToPaginate()): ?>
        <div class="recordNav rounded" >
            <?php echo link_to('&laquo;', '@searchResults?sf_culture='.$sf_request->getParameter('sf_culture').'&page='.$pager->getFirstPage().'&query='.$query) ?>
            <?php echo link_to(__('Previous'), '@searchResults?sf_culture='.$sf_request->getParameter('sf_culture').'&page='.$pager->getPreviousPage().'&query='.$query) ?>
            | <?php $links = $pager->getLinks(); foreach ($links as $page): ?>
            <?php echo ($page == $pager->getPage()) ? "<span class='recordNavCurrent'>".$page."</span>" : link_to($page, '@searchResults?sf_culture='.$sf_request->getParameter('sf_culture').'&page='.$page.'&query='.$query) ?>
            <?php if ($page != $pager->getCurrentMaxLink()): ?> | <?php endif ?>
            <?php endforeach ?>
            | <?php echo link_to(__('Next'), '@searchResults?sf_culture='.$sf_request->getParameter('sf_culture').'&page='.$pager->getNextPage().'&query='.$query) ?>
            <?php echo link_to('&raquo;', '@searchResults?sf_culture='.$sf_request->getParameter('sf_culture').'&page='.$pager->getLastPage().'&query='.$query) ?>
        </div>
        <?php endif ?>
    </div>
</div>