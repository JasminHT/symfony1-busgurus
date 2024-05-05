<?php

class HrResources extends BaseHrResources {

    public function __toString() {
        return $this->getTitleEn();
    }


    // HiJack the save and add the search engine index update (in peer class)
    public function save(PropelPDO $con = null) {
    // tie this field update to the language field
//        if($this->getLanguage() == "en") {
//            $this->setFr(0);
//        }else {
//            $this->setFr(1);
//        }

        if (is_null($con)) {
            $con = Propel::getConnection(HrResourcesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $ret = parent::save($con);
            $this->updateLuceneIndex();
            $con->commit();
            return $ret;
        }
        catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }


        // HiJack the save and add the search engine index update (in peer class)
    public function saveClick(PropelPDO $con = null) {
    // tie this field update to the language field
//        if($this->getLanguage() == "en") {
//            $this->setFr(0);
//        }else {
//            $this->setFr(1);
//        }

        if (is_null($con)) {
            $con = Propel::getConnection(HrResourcesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $ret = parent::save($con);
            $con->commit();
            return $ret;
        }
        catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }



    public function updateLuceneIndex() {
        $index = HrResourcesPeer::getLuceneIndex();

        // remove existing entries
        foreach ($index->find('pk:'.$this->getId()) as $hit) {
            $index->delete($hit->id);
        }


        $keywordIdArray = array();
        // I thought the model would hydrate but no have to go to source
        // foreach ($this->getHrResourceKeywordsRelationss() as $keyword) {
        //     $keywordIdArray[] = $keyword->getHrKeywordsId();
        // }
        

        $keywordIdArray = sfContext::getInstance()->getRequest()->getParameter('hr_resources[hr_resource_keywords_relations_list]');

        // get list of keywords from database
        $keywords = $this->getKeywordsForSearchIndex($keywordIdArray);

        // create new Search Doc
        $doc = new Zend_Search_Lucene_Document();

        // store resource primary key to identify it in the search results
        $doc->addField(Zend_Search_Lucene_Field::Keyword('pk',$this->getId()));

        // index resource fields
        $doc->addField(Zend_Search_Lucene_Field::UnStored('keywords', $keywords, 'utf-8'));
        $doc->addField(Zend_Search_Lucene_Field::UnStored('titleEn', $this->getTitleEn(), 'utf-8'));
        $doc->addField(Zend_Search_Lucene_Field::UnStored('titleFr', $this->getTitleFr(), 'utf-8'));
        $doc->addField(Zend_Search_Lucene_Field::UnStored('descriptionEn', $this->getDescriptionEn(), 'utf-8'));
        $doc->addField(Zend_Search_Lucene_Field::UnStored('descriptionFr', $this->getDescriptionFr(), 'utf-8'));
        $doc->addField(Zend_Search_Lucene_Field::UnStored('organizationEn', $this->getOrganizationEn(), 'utf-8'));
        $doc->addField(Zend_Search_Lucene_Field::UnStored('organizationFr', $this->getOrganizationFr(), 'utf-8'));

        // add resource to the index
        $index->addDocument($doc);
        $index->commit();
    }

    // HiJack the delete to remove item from search engine index update (in peer class)
    public function delete(PropelPDO $con = null) {
        $index = HrResourcesPeer::getLuceneIndex();
        foreach ($index->find('pk:'.$this->getId()) as $hit) {
            $index->delete($hit->id);
        }
        return parent::delete($con);
    }


    static public function getKeywordsForSearchIndex($keywordIdArray) {

        $keywordList = HrKeywordsPeer::retrieveByPks($keywordIdArray);

        $keywords = "";
        foreach ($keywordList as $value) {
            $keywords .=  $value->getKeywordEn().", ".$value->getKeywordFr().", ".$value->getKeywordList().", ".$value->getKeywordListFr()." , ";
        }

        return $keywords;
    }



}
