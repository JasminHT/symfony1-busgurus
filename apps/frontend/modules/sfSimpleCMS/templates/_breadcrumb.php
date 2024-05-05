<ul id="breadcrumb_trail">
<?php foreach ($pages as $node): ?>
	<?php  if(!$node->isRoot()){?>
  <li>&raquo; <?php echo link_to($node->isRoot() ? __('Home') : $node->__invoke($culture), sfSimpleCMSTools::urlForPage($node->getSlug()), array('class' => 'cms_page_navigation')) ?></li>  
  <?php } ?>
<?php endforeach; ?>
  <li class="last">&raquo; <?php echo $page->__invoke($culture) ?></li>  
</ul>