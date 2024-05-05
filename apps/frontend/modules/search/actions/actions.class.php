<?php

/**
 * search actions.
 *
 * @package    bus-hr
 * @subpackage search
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class searchActions extends sfActions {

    public function preExecute() {
        $response = $this->getResponse();
        $response->setTitle($this->getContext()->getI18N()->__("Advanced Search"));
    }


    public function executeIndex(sfWebRequest $request) {
    }


    public function executeSite(sfWebRequest $request) {

    }

    public function executeQuery(sfWebRequest $request) {
        $query = " ";
        if($request->getParameter('autocomplete_query') != "") {
            $query = $request->getParameter('autocomplete_query');
        }
        $this->redirect('@searchResults?query='.$query.'&sf_culture='.$request->getParameter('sf_culture'));
    }


    public function executeResults(sfWebRequest $request) {
        $response = $this->getResponse();
        $response->setTitle($this->getContext()->getI18N()->__("Advanced Search"));


        $this->query = $request->getParameter('query');
        if (!$this->query) {
            return $this->forward('search', 'index');
        }

        $hits = HrResourcesPeer::getLuceneIndex()->find($this->query);

        $pks = array();
        foreach ($hits as $hit) {
            $pks[] = $hit->pk;
        }

        // pull out duplicate ids - retains order
        $pks = array_unique($pks);

        $c = new Criteria();
        $c->add(HrResourcesPeer::ID, $pks, Criteria::IN);
        $c->add(HrResourcesPeer::APPROVED,1);

        // create a case statement that retains the order of the search index
        if (count($pks) > 0) {

            $order_by = ' case ('.HrResourcesPeer::ID.')';
            $count = 1;
            foreach ($pks AS $id) {
                $order_by .= ' when '.$id.' then '.$count.' ';
                $count++;
            }
            $order_by .= ' end ';

            $c->addAscendingOrderByColumn( $order_by , Criteria::CUSTOM);
        }

        // Add results to pager
        $pager = new sfPropelPager('HrResources', 10);
        $pager->setCriteria($c);
        $pager->setPage($this->getRequestParameter('page', 1));
        // default pager count is wrong so had
        // to create a new count in the model HrResourcesPeer
        $pager->setPeerCountMethod('getSpecialCount');
        $pager->init();
        $this->pager = $pager;
    }

    public function executeRecord(sfWebRequest $request) {
        $this->query = $request->getParameter('autocomplete_query');
        $this->hrResource = HrResourcesPeer::retrieveByPk($request->getParameter('id'));

        $keywordIdArray = array();
        foreach ($this->hrResource->getHrResourceKeywordsRelationss() as $keyword):
            $keywordIdArray[] = $keyword->getHrKeywordsId();
        endforeach;

        $c = new Criteria();
        $c->add(HrKeywordsPeer::ID, $keywordIdArray, Criteria::IN);
        $this->keywords = HrKeywordsPeer::doSelect($c);

    }

    public function executeReindex(sfWebRequest $request) {


        // use a key to prevent people from reindexing script
        if($request->getParameter('p') != "f8a3Uphe") {
            $this->forward404();
        }

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

        $mail->setSubject('BusGurus Reindex 1');
        $mail->setBody('BusGurus Reindex');

        // send the email
        $mail->send();

        // First lets take a look and see if any keywords where updated today
        $c = new Criteria();
        $c->add(HrKeywordsPeer::UPDATED_AT, date(strtotime('yesterday')) , Criteria::GREATER_EQUAL);
        $newkeywords = HrKeywordsPeer::doSelect($c);

        // if no records have been updated then end the session by sending to 404
        $this->forward404Unless($newkeywords);


        $index = HrResourcesPeer::getLuceneIndex();
        $resources = HrResourcesPeer::doSelect(new Criteria());

        foreach ($resources as $resource) {

            $keywordIdArray = array();
            foreach ($resource->getHrResourceKeywordsRelationss() as $keyword) {
                $keywordIdArray[] = $keyword->getHrKeywordsId();
            }

            // get list of keywords from database
            $keywords = HrResources::getKeywordsForSearchIndex($keywordIdArray);


            $doc = new Zend_Search_Lucene_Document();

            // store resource primary key to identify it in the search results
            $doc->addField(Zend_Search_Lucene_Field::Keyword('pk',$resource->getId()));

            // index job fields
            $doc->addField(Zend_Search_Lucene_Field::UnStored('keywords',  $keywords, 'utf-8'));
            $doc->addField(Zend_Search_Lucene_Field::UnStored('titleEn', $resource->getTitleEn(), 'utf-8'));
            $doc->addField(Zend_Search_Lucene_Field::UnStored('titleFr', $resource->getTitleFr(), 'utf-8'));
            $doc->addField(Zend_Search_Lucene_Field::UnStored('descriptionEn', $resource->getDescriptionEn(), 'utf-8'));
            $doc->addField(Zend_Search_Lucene_Field::UnStored('descriptionFr', $resource->getDescriptionFr(), 'utf-8'));
            $doc->addField(Zend_Search_Lucene_Field::UnStored('organizationEn', $resource->getOrganizationEn(), 'utf-8'));
            $doc->addField(Zend_Search_Lucene_Field::UnStored('organizationFr', $resource->getOrganizationFr(), 'utf-8'));

            // add job to the index
            $index->addDocument($doc);
        }
        $index->commit();
        
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

        $mail->setSubject('BusGurus Reindex');
        $mail->setBody('BusGurus Reindex');

        // send the email
        $mail->send();
    }

    public function executeKeywords(sfWebRequest $request) {
        $this->getResponse()->setContentType('application/json');

        $c = new Criteria();
        if($request->getParameter('sf_culture') == "en") {
            $c->add(HrKeywordsPeer::KEYWORD_EN, $request->getParameter('q').'%', Criteria::LIKE);
            $c->addAscendingOrderByColumn(HrKeywordsPeer::KEYWORD_EN);
        }else {
            $c->add(HrKeywordsPeer::KEYWORD_FR, $request->getParameter('q').'%', Criteria::LIKE);
            $c->addAscendingOrderByColumn(HrKeywordsPeer::KEYWORD_FR);
        }
        $c->setLimit($request->getParameter('limit'));
        $this->keywords = HrKeywordsPeer::doSelect($c);

        $jsonKeywords = array();
        foreach ($this->keywords as $keyword) {
            if($this->getUser()->getCulture() == "en") {
                $jsonKeywords[$keyword->getKeywordEn()] = $keyword->getKeywordEn();
            }else {
                $jsonKeywords[$keyword->getKeywordFr()] = $keyword->getKeywordFr();
            }
        }

        return $this->renderText(json_encode($jsonKeywords));
    }


}
