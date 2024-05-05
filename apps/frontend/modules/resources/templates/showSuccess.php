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
    <?php  include_component('resources', 'leftMenuCategories', array('currentBaseCategoryId' => $currentBaseCategoryId)) ?>
<?php //include_component('search', 'form') ?>
</div>
<div id="mainResultsContainer" class="rounded">
    <div id="resultsPadding">
        <div id="recordContainer" class="rounded" >
            <?php echo link_to(image_tag($sf_user->getCulture()."/cat-back-btn.jpg","width=56 height=19 alt=".__('Back').""), '@homepage?sf_culture='.$sf_user->getCulture(), "id=backBtn"); ?>
            <ul  id="breadcrumb">
                <li><?php echo link_to(__('HR Library'),'@resources?sf_culture='.$sf_user->getCulture()); ?></li>
             </ul>
            <br />
        <?php include_partial('resources/recordPanel', array('hrResource' => $hrResource, 'keywords' =>$keywords)) ?></div>
    </div>
</div>