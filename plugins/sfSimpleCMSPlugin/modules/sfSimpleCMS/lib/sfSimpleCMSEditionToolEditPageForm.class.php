<?php

/**
 * sfSimpleCMSPage edit form used on EditionTool.
 *
 * @package    sfSimpleCMSPlugin
 * @subpackage form
 * @author     cinxgler <AT> gmail.com
 */
class sfSimpleCMSEditionToolEditPageForm extends sfForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'page_id'           => new sfWidgetFormInputHidden(),
      'title'             => new sfWidgetFormInput(),
      'slug'              => new sfWidgetFormInput(),
      'position'          => new sfWidgetFormChoice(array('choices' => sfSimpleCMSPagePeer::getAllPagesWithLevel())),
      'position_type'     => new sfWidgetFormChoice(array('choices' => array('under', 'after'),'expanded'=>true)),
      'template'          => new sfWidgetFormChoice(array('choices' => sfConfig::get('app_sfSimpleCMS_templates', array('simplePage' => 'Simple Page','home'=> 'Home'))))
    ));

    $this->setValidators(array(
      'page_id'       => new sfValidatorPropelChoice(array('model' => 'sfSimpleCMSPage', 'column' => 'id', 'required' => true)),
      'title'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'slug'          => new sfValidatorRegex(array('pattern'=>'#^[a-zA-Z0-9-_/]*$#')),
      'position'      => new sfValidatorPropelChoice(array('model' => 'sfSimpleCMSPage', 'column' => 'slug', 'required' => false)),
      'position_type' => new sfValidatorChoice(array('choices' => array('under', 'after'), 'required' => false)),
      'template'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $postvalidator = new sfValidatorAnd(
      array(
        new sfSimpleCMSPageTreePositionValidator(array('position_fieldname'=>'position','position_type_fieldname'=>'position_type')),
        new sfValidatorCallback(array('callback' => array($this, 'checkPosition'))),
      )
    );
    $this->validatorSchema->setPostValidator($postvalidator);
    $this->widgetSchema->setNameFormat('sf_simple_cms_edit_page[%s]');
    
  }
  
  public function checkPosition($validator, $values)
  {
    if (!empty($values['position']) && empty($values['position_type']))
    {
      $error = new sfValidatorError($validator, 'You must choose a position');   
      throw new sfValidatorErrorSchema($validator, array('position_type' => $error));
    }
    return $values;
  }
}
