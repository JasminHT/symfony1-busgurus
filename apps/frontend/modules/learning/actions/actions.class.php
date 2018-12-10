<?php

/**
 * learning actions.
 *
 * @package    frontend
 * @subpackage learning
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class learningActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

    //$this->forward('default', 'module');
    echo "the page is 'index'";
  }

 /**
  * Executes show action
  *
  * @param sfRequest $request A request object
  */
  public function executeShow()
  {
  	echo "the page is 'show'";
  }
}
