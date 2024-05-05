<?php

/**
 * admin actions.
 *
 * @package    bus-hr
 * @subpackage admin
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class adminActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

	//print_r(sfContext::getInstance()->getController())."sdf";
	
  	if( $request->getParameter('sf_culture') == "fr"){
      $this->getUser()->setCulture('en');
      $this->redirect('/busgurus/en/admin');
    }
    //$this->forward('default', 'module');
  }
}