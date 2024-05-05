<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class resourcesComponents extends sfComponents
{
  public function executeLeftMenuCategories()
  {
        $this->currentBaseCategory = HrCategoriesPeer::retrieveByPk(1);
        // get Chidren (subcategories of current category)
        $this->baseCategories = $this->currentBaseCategory->getChildren();

  }
}