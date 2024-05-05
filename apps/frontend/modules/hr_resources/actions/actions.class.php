<?php

require_once dirname(__FILE__).'/../lib/hr_resourcesGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/hr_resourcesGeneratorHelper.class.php';

/**
 * hr_resources actions.
 *
 * @package    bus-hr
 * @subpackage hr_resources
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class hr_resourcesActions extends autoHr_resourcesActions{

//
  public function preExecuteHr_resources(){
        //ini_set("memory_limit", "128M");
        sfContext::getInstance()->getUser()->setCulture('en');
  }



}
