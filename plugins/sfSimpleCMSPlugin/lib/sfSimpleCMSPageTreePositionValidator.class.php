<?php

class sfSimpleCMSPageTreePositionValidator extends sfValidatorBase
{
  public function doClean($values)
  {
    $position_fn = $this->getOption('position_fieldname');
    $position_type_fn = $this->getOption('position_type_fieldname');
    $relative_page = sfSimpleCMSPagePeer::retrieveBySlug($values[$position_fn]);
    $positionType = $values[$position_type_fn];
    if ($positionType && $relative_page && $relative_page->isRoot() && $positionType != 'under')
    {
      throw new sfValidatorError($this, 'invalid', array());
    }
    return $values;
  }
  
  public function configure($options = array(), $messages = array())
  {
    $this->addRequiredOption('position_fieldname');
    $this->addRequiredOption('position_type_fieldname');
    $this->setMessage('invalid', 'Attempting to move a page at the same level as the home page. Please make sure to select a position under the root node.');
  }

}