<?php

/**
 * resources actions.
 *
 * @package    bus-hr
 * @subpackage resources
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class resourcesActions extends sfActions {

  public function preExecute()
  {
        $response = $this->getResponse();
        $response->setTitle($this->getContext()->getI18N()->__("HR Library"));
  }

    public function executeIndex(sfWebRequest $request) {
        $this->redirect('@resources');
    }

    public function executeShow(sfWebRequest $request) {
    // get record
        $c = new Criteria();
        $c->add(HrResourcesPeer::APPROVED,1);
        $c->add(HrResourcesPeer::ID,$this->getRequestParameter('id'));
        $this->hrResource = HrResourcesPeer::doSelectOne($c);
        $this->culture = $request->getParameter('sf_culture');

        $keywordIdArray = array();
        foreach ($this->hrResource->getHrResourceKeywordsRelationss() as $keyword):
            $keywordIdArray[] = $keyword->getHrKeywordsId();
        endforeach;
        
        $c = new Criteria();
        $c->add(HrKeywordsPeer::ID, $keywordIdArray, Criteria::IN);
        $this->keywords = HrKeywordsPeer::doSelect($c);
        

        // get categories list
        $this->hr_category = HrCategoriesPeer::retrieveByPk(1);
        $this->currentBaseCategoryId = 1;
		

        $pageTitle = ($this->culture == "en") ? $this->hrResource->getTitleEn() :  $this->hrResource->getTitleFr();
		
        $response = $this->getResponse();
        $response->setTitle($this->getContext()->getI18N()->__("HR Library")." :: ".$pageTitle);		

    }


    public function executeList(sfWebRequest $request) {
        $this->cat = $request->getParameter('cat');
        $this->culture = $request->getParameter('sf_culture');
        $this->displayOrder = $request->getParameter('displayOrder');

        // get the record of the category we are in
        $this->hr_category = HrCategoriesPeer::retrieveByPk($request->getParameter('cat'));

        //=============================================
        // Get Initial Nested set information
        // for the current choosen Category
        //=============================================
        // get Breadcrumb Path
        $this->breadcrumbArray = $this->hr_category->getPath();
        // Check to see if this category has subcategories (children)
        $this->hasSubCategories = $this->hr_category->hasChildren();
        // get Chidren (subcategories of current category)
        $this->subCategories = $this->hr_category->getChildren();
        // get all sub categories used to find subtotals for current sub categories
        $this->decendantCats = $this->hr_category->getDescendants();


        //=============================================
        //Get the current base category to use in left menu
        // if we are at a base category just use the
        // current cat id otherwise use breadcrumb
        //=============================================
        if(count($this->breadcrumbArray)== 1) {
            $this->currentBaseCategoryId = $this->hr_category->getId();
        }else {
            $this->currentBaseCategoryId = $this->breadcrumbArray[1]->getId();
        }

        //=============================================
        // get all sub categories this will be used to
        // choose all records to display and to calculate Records include this level and all sub levels
        //=============================================
        //Note: get decendents of all sub categories
        $allSubCatsArray = array();
        foreach ($this->decendantCats as $subCat):
            array_push($allSubCatsArray,$subCat->getId());
        endforeach;



        // Count all records under a given subcategory
        $this->SubCatCountArray = array();
        foreach ($this->subCategories as $subCat):
            $c = new Criteria();
            //$c->add(HrCategoriesPeer::TREE_LEFT, $subCat->getTreeLeft(),Criteria::GREATER_THAN);
            //$c->add(HrCategoriesPeer::TREE_RIGHT, $subCat->getTreeRight(),Criteria::LESS_THAN);
            $c->add(HrCategoriesPeer::TREE_LEFT, $subCat->getTreeLeft(),Criteria::GREATER_EQUAL);
            $c->add(HrCategoriesPeer::TREE_RIGHT, $subCat->getTreeRight(),Criteria::LESS_EQUAL);
            $c->addJoin(HrCategoriesPeer::ID, HrResourceCategoriesRelationsPeer::HR_CATEGORIES_ID);
            $c->addGroupByColumn(HrResourceCategoriesRelationsPeer::HR_RESOURCES_ID);
            $results = HrCategoriesPeer::doSelect($c);
            $this->SubCatCountArray[$subCat->getId()] = count($results);
        endforeach;


        //=============================================
        // Choose records to display at this level
        // Records include this level and all sub levels
        //=============================================
        //Note: get decendents of all sub categories
        $allSubCatsArray = array($this->cat);
        foreach ($this->decendantCats as $subCat):
            array_push($allSubCatsArray,$subCat->getId());
        endforeach;

        // now for pager
        $c = new Criteria();
        $c->add(HrResourcesPeer::APPROVED,1);
        $c->addJoin(HrResourcesPeer::ID, HrResourceCategoriesRelationsPeer::HR_RESOURCES_ID);
        $c->add(HrResourceCategoriesRelationsPeer::HR_CATEGORIES_ID, $allSubCatsArray, Criteria::IN);
        $c->addGroupByColumn(HrResourceCategoriesRelationsPeer::HR_RESOURCES_ID);
        if($this->culture == "fr") {
            $c->addDescendingOrderByColumn(HrResourcesPeer::FR);
        }
        if($request->getParameter('displayOrder') == "popular") {
            $c->addAscendingOrderByColumn(HrResourcesPeer::CLICKS);
            $c->addDescendingOrderByColumn(HrResourcesPeer::CREATED_AT);
        }else {
            $c->addDescendingOrderByColumn(HrResourcesPeer::CREATED_AT);
        }

        $pager = new sfPropelPager('HrResources', 10);
        $pager->setCriteria($c);
        $pager->setPage($this->getRequestParameter('page', 1));
        $pager->setPeerCountMethod('getSpecialCount');
        $pager->init();
        $this->pager = $pager;





        //=============================================
        // Find total records for each sub category
        // Records include this level and all sub levels
        //=============================================
        $c = new Criteria();
        $c->add(HrResourceCategoriesRelationsPeer::HR_CATEGORIES_ID, $allSubCatsArray, Criteria::IN);
        $this->cat_resources_count = HrResourceCategoriesRelationsPeer::doSelect($c);
        // to compensate for the weekness of the orm here i'll build an array and work with it
        $subCatRecordCountArray = array();
        foreach ($this->cat_resources_count as $record):
            array_push($subCatRecordCountArray,$record->getHrCategoriesId());
        endforeach;
        $this->subCatRecordCountArray = array_count_values($subCatRecordCountArray);



        // Drop the first Breadcrumb item as it is the root and not used
        unset($this->breadcrumbArray[0]);
		
        $pageCatTitle = ($this->culture == "en") ? $this->hr_category->getTitleEn() : $this->hr_category->getTitleFr();
		
        $response = $this->getResponse();
        $response->setTitle($this->getContext()->getI18N()->__("HR Library")." :: ".$pageCatTitle." : ".$this->getContext()->getI18N()->__("Page")." ".$this->getRequestParameter('page') );

    }


    public function executeRead(sfWebRequest $request) {

        $this->culture = $request->getParameter('sf_culture');
        $this->hr_category = HrCategoriesPeer::retrieveByPk($request->getParameter('cat'));
        $this->decendantCats = $this->hr_category->getDescendants();
        $this->breadcrumbArray = $this->hr_category->getPath();

        if(count($this->breadcrumbArray)== 1) {
            $this->currentBaseCategoryId = $this->hr_category->getId();
        }else {
            $this->currentBaseCategoryId = $this->breadcrumbArray[1]->getId();
        }

        $allSubCatsArray = array();
        foreach ($this->decendantCats as $subCat):
            array_push($allSubCatsArray,$subCat->getId());
        endforeach;


        //        // Get Request results ()
        //        $c = new Criteria();
        //        $c->add(HrResourcesPeer::APPROVED,1);
        //        $c->addJoin(HrResourcesPeer::ID, HrResourceCategoriesRelationsPeer::HR_RESOURCES_ID);
        //        $c->add(HrResourceCategoriesRelationsPeer::HR_CATEGORIES_ID, $allSubCatsArray, Criteria::IN);
        //        $c->addGroupByColumn(HrResourceCategoriesRelationsPeer::HR_RESOURCES_ID);
        //        if($request->getParameter('displayOrder') == "popular") {
        //            $c->addAscendingOrderByColumn(HrResourcesPeer::CLICKS);
        //        }else {
        //            $c->addDescendingOrderByColumn(HrResourcesPeer::CREATED_AT);
        //        }
        //
        //
        //
        //        // Put Results into page
        //        $pager = new sfPropelPager('HrResources', 1);
        //        $pager->setCriteria($c);
        //        $pager->setPage($this->getRequestParameter('page', 1));
        //        $pager->setPeerCountMethod('getSpecialCount');
        //        $pager->init();
        //        $this->pager = $pager;
        //
        //
        //        if ($this->getRequestParameter('cursor')) {
        //            $this->hrResource = $pager->getObjectByCursor($this->getRequestParameter('cursor'));
        //            $pager->setCursor($this->getRequestParameter('cursor'));
        //            $this->previous_article = $pager->getPrevious();
        //            $this->hrResource = $pager->getCurrent();
        //            $this->next_article = $pager->getNext();
        //        }


        // get record
        $c = new Criteria();
        $c->add(HrResourcesPeer::APPROVED,1);
        $c->add(HrResourcesPeer::ID,$this->getRequestParameter('id'));
        $c->addJoin(HrResourcesPeer::ID, HrResourceCategoriesRelationsPeer::HR_RESOURCES_ID);
        $c->addJoin(HrResourceCategoriesRelationsPeer::HR_CATEGORIES_ID, HrCategoriesPeer::ID);
        $this->hrResource = HrResourcesPeer::doSelectOne($c);


        $keywordIdArray = array();
        foreach ($this->hrResource->getHrResourceKeywordsRelationss() as $keyword):
            $keywordIdArray[] = $keyword->getHrKeywordsId();
        endforeach;

        $c = new Criteria();
        $c->add(HrKeywordsPeer::ID, $keywordIdArray, Criteria::IN);
        $this->keywords = HrKeywordsPeer::doSelect($c);


        // Error
        $this->forward404Unless($this->hrResource);
        // Drop the first Breadcrumb item as it is the root and not used
        unset($this->breadcrumbArray[0]);
		
		$resourceTitle = ($this->culture == "en") ?  $this->hrResource->getTitleEn() : $this->hrResource->getTitleFr();		
		
        $response = $this->getResponse();
        $response->setTitle($this->getContext()->getI18N()->__("HR Library")." :: ".$this->getContext()->getI18N()->__("Resource")." : ".$resourceTitle );
		
    }


    public function executeClick(sfWebRequest $request) {
        $culture = $request->getParameter('sf_culture');

        
        $c = new Criteria();
        $c->add(HrResourcesPeer::APPROVED,1);
        $c->add(HrResourcesPeer::ID,$this->getRequestParameter('id'));
        $hrResources =  HrResourcesPeer::doSelectOne($c);

        $this->forward404Unless($hrResources);

        $newClickTotal = $hrResources->getClicks()+1;

        //echo($newClickTotal);

        // increase Click count by 1
        
        $hrResources->setClicks($newClickTotal);
        $hrResources->saveClick();
        

        // Display the resource for the culture we are showing.
        $url = $hrResources->getUrlEn();
        if($culture == "fr"){
            $url = $hrResources->getUrlFr();
        }

        $url = trim($url);

        $this->forward404Unless($url);
        $this->redirect($url);
    }
	

    public function executeSubmit(sfWebRequest $request) {
	
        $this->form = new HrResourcesPublicForm();
	  	$this->formHasErrors = false;		
		
		if ($request->isMethod('post')){

                    $this->form->bind(array_merge($request->getParameter('resource'), array('captcha' => $request->getParameter('captcha'))));

                    //$this->form->bind($request->getParameter('resource'));
		  if ($this->form->isValid()){
		    $resource = $this->form->save();
			//$resource->setFields($this->form->getValues());
			

        // mail me

			// class initialization
			$mail = new sfMail();
			$mail->initialize();
			$mail->setMailer('sendmail');
			$mail->setCharset('utf-8');
	
			// definition of the required parameters
			$mail->setSender('webmaster@buscouncil.ca', 'BusGurus Webmaster');
			$mail->setFrom('webmaster@buscouncil.ca', 'BusGurus');
			$mail->addReplyTo('webmaster@buscouncil.ca');
	
			$mail->addAddress('gavin.ogston@gmail.com');
	
			$mail->setSubject('BusGurus - A resources has been submitted for review');
			$mail->setBody('Login to review : http://www.thriftshare.com/busgurus/admin');
	
			// send the email
			$mail->send();
			
			$this->redirect('resources/submitThankyou');
		  } else{
		  	$this->formHasErrors = true;
		  }
		  
		}
	 
    }

    public function executeSubmitThankyou(sfWebRequest $request) {
    }

	
}
