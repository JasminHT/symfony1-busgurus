<?php

class HrKeywordsPeer extends BaseHrKeywordsPeer {

    // Method returns list of Keywords in alphabetical
    // order and associated with proper ID
    public static function getAllOrderedByKeywordEn($con = null) {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::KEYWORD_EN);
        $keywords = self::doSelect($c, $con);

        $keywordsArray = array();
        foreach ($keywords as $keyword) {
            $keywordsArray[$keyword->getId()] = $keyword->getKeywordEn();
        }
        return $keywordsArray;
    }

}
