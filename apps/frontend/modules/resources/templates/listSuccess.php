<?php use_helper('Date','Text','I18N') ?>
  <div id='page-header'>
      <img src="/busgurus/images/ICON_Library.png">
      <?php if ($sf_user->getCulture() == 'en') { ?>
      <h1><strong>HR </strong>Library</h1>
      <?php } else { ?>
      <h1>Biblioth&egrave;que des <strong>RH</strong></h1>
      <?php } ?>
  </div>
<div id="leftContentContainer">
    <?php include_component('resources', 'leftMenuCategories', array('currentBaseCategoryId' => $currentBaseCategoryId)) ?>
    <?php //include_component('search', 'form') ?>
</div>
<div id="mainResultsContainer" class="rounded">
    <h1>
        <?php if ($sf_user->getCulture() == "en") { echo 'Resource';} else { echo 'Ressource'; } ?><?php if(count($pager->getResults()) == 1) { echo 's'; } ?>
    </h1>

    <div id="resultsPadding">
        <div id="mainResultsSearchContainer" class="rounded">
            <?php
            // if we are in a subcategory show back btn
            $backCat = end($breadcrumbArray);
            if (count($breadcrumbArray) != 0) {
                //echo link_to(image_tag($sf_user->getCulture()."/cat-back-btn.jpg","width=56 height=19 alt=".__('Back').""), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$backCat->getId(), "id=backBtn");
            }
            ?>
            <ul id="breadcrumb">
                <li><?php echo link_to(__('HR Library'),'@resources?sf_culture='.$sf_user->getCulture()); ?></li>
                <?php
                // Drop the first Breadcrumb item
                // Get the breadcrumb of where we are
                foreach ($breadcrumbArray as $breadcrumbItem):
                    echo "<li>&nbsp;&raquo; ".link_to((($sf_user->getCulture() == "en") ? $breadcrumbItem->getTitleEn() : $breadcrumbItem->getTitleFr()) , '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$breadcrumbItem->getId())."</li>";
                endforeach; ?>
                <?php
                // Get the current Category
                echo "<li>&nbsp;&raquo; ".(($sf_user->getCulture() == "en") ? $hr_category->getTitleEn() : $hr_category->getTitleFr())."</li>";
                ?>
            </ul>
            <?php if($hasSubCategories) { ?>
            <br />
            <h4><?php if ($sf_user->getCulture() == "en") { echo 'Choose a subcategory to refine your search';} else { echo 'Choisir une sous-cat&eacute;gorie pour pr&eacute;ciser votre recherche'; } ?></h4>
            <ul id="subCategories">
                    <?php
                    // List Subcategories with record count
                    foreach ($subCategories as $subCategory):
                        echo "<li>".link_to((($sf_user->getCulture() == "en") ? $subCategory->getTitleEn() : $subCategory->getTitleFr()), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$subCategory->getId())./*"&nbsp;(".$SubCatCountArray[$subCategory->getId()].")*/"</li>";
                    endforeach;
                    ?>
            </ul>
            <div id="orderBy" class="<?php echo $sf_request->getParameter('displayOrder'); ?>">
                    <?php echo __('Order by:'); ?>
                    <?php echo link_to(__('Latest'), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder=latest&cat='.$sf_request->getParameter('cat').'&page='.$sf_request->getParameter('page'), "class='latest'") ?> |
                    <?php echo link_to(__('Popular'), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder=popular&cat='.$sf_request->getParameter('cat').'&page='.$sf_request->getParameter('page'), "class='popular'") ?>
            </div>
                <?php } ?>
            <br class="clearFloat" />
            &nbsp; </div><div class='recordNav rounded' >
            <div class="resultCount">
                <?php if(count($pager->getResults()) < 1) {
                    echo "".__('There are currently no results for this subcategory.')."";
                } else { ?>
                    <?php echo __('Results %1% - %2% of %3%', array('%1%' => $pager->getFirstIndice(), '%2%' => $pager->getLastIndice(), '%3%' => $pager->getNbResults())); ?>
                    <?php } ?></div>&nbsp;
            <?php if ($pager->haveToPaginate()): ?>
                    <?php echo link_to('&laquo;', '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$sf_request->getParameter('cat').'&page='.$pager->getFirstPage()) ?> <?php echo link_to(__('Previous'), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$sf_request->getParameter('cat').'&page='.$pager->getPreviousPage()) ?> |
                    <?php $links = $pager->getLinks();
                    foreach ($links as $page): ?>
                        <?php echo ($page == $pager->getPage()) ? "<span class='recordNavCurrent'>".$page."</span>" : link_to($page, '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$sf_request->getParameter('cat').'&page='.$page) ?>
                        <?php if ($page != $pager->getCurrentMaxLink()): ?>
            |
                    <?php endif ?>
                <?php endforeach ?>
            | <?php echo link_to(__('Next'), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$sf_request->getParameter('cat').'&page='.$pager->getNextPage()) ?> <?php echo link_to('&raquo;', '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$sf_request->getParameter('cat').'&page='.$pager->getLastPage()) ?>
            <?php endif ?>

        </div>

        <h2 class='h1'>
            <?php if ($sf_user->getCulture() == "en") { echo 'Result';} else { echo 'Resultat'; } ?><?php if(count($pager->getResults()) == 1) { echo 's'; } ?>
        </h2>
        

        <?php
        $cursor = $pager->getFirstIndice();
        foreach ($pager->getResults() as $hr_resources): ?>
            <?php  //print_r($hr_resources->getHrCategories()->getTreeLeft()) ?>
        <div class="recordItem rounded"> <?php echo link_to(" ",'@resourceRead?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$sf_request->getParameter('cat').'&id='.$hr_resources->getId().'&cursor='.$cursor.'&page='.$pager->getPage(), "class='resourceBtn rounded' title='".__('View Resource')."'"); ?>
            <div class="resourceItemDetails"> 
                <a href="<?php echo url_for('@resourceRead?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$sf_request->getParameter('cat').'&page='.$pager->getPage().'&id='.$hr_resources->getId()) ?>">
                    <?php echo (($sf_user->getCulture() == "en") ? $hr_resources->getTitleEn() : $hr_resources->getTitleFr()); ?>
                </a>
                <h2><?php echo (($sf_user->getCulture() == "en") ? $hr_resources->getTitleEn() : $hr_resources->getTitleFr()); ?></h2>
                <span class="subDetails">
                    <?php if($sf_request->getParameter('sf_culture') == "en"){ ?>
                        <?php if($hr_resources->getEn() && $hr_resources->getUrlEn()) { echo __('(en)') ;} ?>
                        <?php if($hr_resources->getFr() && $hr_resources->getUrlFr()) { echo __('(fr)') ;} ?>
                    <?php }else{ ?>
                        <?php if($hr_resources->getFr() && $hr_resources->getUrlFr()) { echo __('(fr)') ;} ?>
                        <?php if($hr_resources->getEn() && $hr_resources->getUrlEn()) { echo __('(en)') ;} ?>
                    <?php } ?>
                    (<?php echo __($hr_resources->getPubFormat()); ?>) - <?php echo format_date($hr_resources->getUpdatedAt()); ?></span>
                    <?php echo truncate_text((($sf_user->getCulture() == "en") ? $hr_resources->getDescriptionEn() : $hr_resources->getDescriptionFr()) ,190,'...'); ?>
            </div>
        </div>
            <?php ++$cursor;
        endforeach; ?>
        <?php if ($pager->haveToPaginate()): ?>
        <div class="recordNav rounded" > <?php echo link_to('&laquo;', '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$sf_request->getParameter('cat').'&page='.$pager->getFirstPage()) ?> <?php echo link_to(__('Previous'), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$sf_request->getParameter('cat').'&page='.$pager->getPreviousPage()) ?> |
                <?php $links = $pager->getLinks();
                foreach ($links as $page): ?>
                    <?php echo ($page == $pager->getPage()) ? "<span class='recordNavCurrent'>".$page."</span>" : link_to($page, '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$sf_request->getParameter('cat').'&page='.$page) ?>
                    <?php if ($page != $pager->getCurrentMaxLink()): ?>
            |
                    <?php endif ?>
                <?php endforeach ?>
            | <?php echo link_to(__('Next'), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$sf_request->getParameter('cat').'&page='.$pager->getNextPage()) ?> <?php echo link_to('&raquo;', '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$sf_request->getParameter('cat').'&page='.$pager->getLastPage()) ?> </div>
        <?php endif ?>
    </div>
</div>
