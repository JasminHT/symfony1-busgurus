<?php

/**
 * tools actions.
 *
 * @package    bus-hr
 * @subpackage tools
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class toolsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
        $response = $this->getResponse();
        $response->setTitle($this->getContext()->getI18N()->__("HR Tools"));
  }
}
