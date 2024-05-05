<?php

class HrCategories extends BaseHrCategories
{
  public function __toString()
  {
    return $this->getSlug();
  }

  public function getSlugWithLevel()
  {
    //return str_repeat(' - ', $this->getLevel()).$this->getSlug();
    //return str_repeat(' - ', $this->getLevel() ).$this->getSlug();
     return $this->getSlug();
  }


}


$columns_map = array('left'   => HrCategoriesPeer::TREE_LEFT,
                       'right'  => HrCategoriesPeer::TREE_RIGHT,
                       'parent' => HrCategoriesPeer::TREE_PARENT,
                       'scope'  => HrCategoriesPeer::TOPIC_ID);

sfPropelBehavior::add('HrCategories', array('actasnestedset' => array('columns' => $columns_map)));