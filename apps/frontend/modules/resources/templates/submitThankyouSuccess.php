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
  <?php  //include_component('resources', 'leftMenuCategories', array('currentBaseCategoryId' => $currentBaseCategoryId)) ?>
  <?php //include_component('search', 'form') ?>
</div>
<div id="mainResultsContainer" class="rounded">
  <div id="resultsPadding">
    <div id="recordContainer" class="rounded" >
      <div id="recordPanel">
      <h1><?php echo __('Thank You') ?></h1>
		<P><?php echo __('Thankyou for helping us make BusGurus the most complete and exhaustive knowledge centre for the Canadian bus industry HR professionals.') ?></P>
      </div>
    </div>
  </div>
</div>
