<ul id="leftCatMenu" >
    <?php
    // Put current base category at the top
    foreach ($baseCategories as $baseCategory):
        if($baseCategory->getId() == $currentBaseCategoryId) {
            echo "<li class='featured'>".link_to((($sf_request->getParameter('sf_culture') == "en") ? $baseCategory->getTitleEn() : $baseCategory->getTitleFr()), '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$baseCategory->getId())."</li>";
        }
    endforeach;
	
    // List all other categories
    foreach ($baseCategories as $baseCategory):
        if($baseCategory->getId() != $currentBaseCategoryId) {
            echo "<li>".link_to((($sf_request->getParameter('sf_culture') == "en") ? $baseCategory->getTitleEn() : $baseCategory->getTitleFr()) , '@resources?sf_culture='.$sf_request->getParameter('sf_culture').'&displayOrder='.$sf_request->getParameter('displayOrder').'&cat='.$baseCategory->getId())."</li>";
        }
    endforeach;
    ?>
</ul>