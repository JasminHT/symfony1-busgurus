<?php

/**
 * home actions.
 *
 * @package    bus-hr
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class homeActions extends sfActions {
/**
 * Executes index action
 *
 * @param sfRequest $request A request object
 */
    public function executeIndex(sfWebRequest $request) {
		
		// if french url but english side then redirect to french
		if ($_SERVER['SERVER_NAME'] == "www.gourousdelautobus.ca" && $request->getParameter('sf_culture') == "en"){
			header("Location: http://www.gourousdelautobus.ca/fr");
		}
		
        $response = $this->getResponse();
        //$response->setTitle($this->getContext()->getI18N()->__("BusGurus :: HR Knowledge Centre : Where the best minds in the industry gather"));
    }

    public function executeLibrary(sfWebRequest $request) {
        $response = $this->getResponse();
        //$response->setTitle($this->getContext()->getI18N()->__("HR Library"));

    }

}
