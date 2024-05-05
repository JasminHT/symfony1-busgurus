<?php

class linksActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  		$resource = $this->getRequestParameter('resource');
  		$culture = $request->getParameter('sf_culture');
		$resourceLink = "";		
		switch ($resource) {
			case "roi-forecasting":
				$resourceLink = ($culture == "en") ?  "http://buscouncil.jasminht.com/busgurus/tools/node/add/roi" : "http://buscouncil.jasminht.com/busgurus/tools/fr/node/add/roi";
				break;
			case "recruitment-calc":
				$resourceLink = ($culture == "en") ?  "http://buscouncil.jasminht.com/busgurus/tools/node/add/recruitment" : "http://buscouncil.jasminht.com/busgurus/tools/fr/node/add/recruitment";
				break;
			case "training-calc":
				$resourceLink = ($culture == "en") ?  "http://buscouncil.jasminht.com/busgurus/tools/node/add/training" : "http://buscouncil.jasminht.com/busgurus/tools/fr/node/add/training";
				break;				
		}	
    $this->forward404Unless($resourceLink);		
    $this->redirect($resourceLink);		
  }
}
