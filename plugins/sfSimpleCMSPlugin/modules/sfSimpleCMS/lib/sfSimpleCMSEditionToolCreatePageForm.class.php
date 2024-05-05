<?php

/**
 * sfSimpleCMSPage edit form used on EditionTool.
 *
 * @package    sfSimpleCMSPlugin
 * @subpackage form
 * @author     cinxgler <AT> gmail.com
 */
class sfSimpleCMSEditionToolCreatePageForm extends sfSimpleCMSEditionToolEditPageForm
{
  public function configure()
  {
    parent::configure();
    unset($this['page_id'],$this['title']);
    $this->widgetSchema->setNameFormat('sf_simple_cms_create_page[%s]');
    $postvalidator = new sfValidatorAnd(
      array(
        new sfValidatorPropelUnique(array('model' => 'sfSimpleCMSPage', 'column' => array('slug'))),
        new sfSimpleCMSPageTreePositionValidator(array('position_fieldname'=>'position','position_type_fieldname'=>'position_type')),
        new sfValidatorCallback(array('callback' => array($this, 'checkPosition'))),
      )
    );
    $this->validatorSchema->setPostValidator($postvalidator);
  }
}
