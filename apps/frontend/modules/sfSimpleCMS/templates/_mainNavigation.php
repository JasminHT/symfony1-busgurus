<ul class="site_navigation">
<?php foreach ($level1_nodes as $node): ?>
  <li <?php if ($node->getSlug() == $page->getSlug()): ?>class="current"<?php endif; ?>>
    <?php echo link_to(
      $node->__invoke($culture), 
      sfSimpleCMSTools::urlForPage($node->getSlug()),
      array('class' => 'cms_page_navigation')
    ) ?>
  </li>
<?php endforeach; ?>
</ul>