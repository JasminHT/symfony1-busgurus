<?php

class HrResourcesPeer extends BaseHrResourcesPeer
{

    // This is a work around for pagination
    // criteria that include a groupby statement
    // http://forum.symfony-project.org/index.php/m/47120/#msg_47120
    public static function getSpecialCount($c)
    {
        $copy = clone $c;
        $copy->addGroupByColumn(self::ID);
        $copy->clearSelectColumns()->clearOrderByColumns();
        $copy->addSelectColumn(self::ID);

        $stmt = self::doSelectStmt($copy);
        $res = $stmt->fetchAll();

        return count($res);
    }


    // ===========================
    // Zend Lucene Search methods
    // ===========================
    static public function getLuceneIndex()
    {
        ProjectConfiguration::registerZend();
        $index = self::getLuceneIndexFile();
        if(is_dir($index)){
            return Zend_Search_Lucene::open($index);
        }else{
            return Zend_Search_Lucene::create($index);
        }
    }

    static public function getLuceneIndexFile(){
        return sfConfig::get('sf_data_dir').'/lucene.resources.index';
    }


    // if for some reason we delete all the records we should delete all of the index
    public static function doDeleteAll($con = null)
    {
        $index = self::getLuceneIndexFile();
        if (is_dir($index)){
            sfToolkit::clearDirectory($index);
            rmdir($index);
        }
        return parent::doDeleteAll($con);
    }

}