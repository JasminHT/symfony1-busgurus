<?php

class HrCategoriesPeer extends BaseHrCategoriesPeer
{

    public static function retrieveBySlug($slug, $culture = null, $con = null)
    {
        $c = new Criteria();
        $c->add(self::SLUG, $slug);
        $cat = self::doSelectOne($c, $con);
        return  $cat;
    }



    public static function getAllOrderByTree($con = null)
    {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::TREE_LEFT);
        return self::doSelect($c, $con);
    }


    public static function getAllCategoriesWithIdLevel($indent_string = ' - ')
    {
        $cats = self::getAllOrderByTree();
        $cat_names = array();
        $level = 0;
        $previous = null;
        foreach ($cats as $cat)
        {
            if($previous)
            {
                if($cat->getParentIdValue() == $previous->getId())
                {
                    $level++;
                }
                elseif($previous->getRightValue() != $cat->getLeftValue() + 1)
                {
                    $level = $level - $cat->getLeftValue() + $previous->getRightValue() + 1;
                }
            }
            $previous = $cat;
            $cat_names[$cat->getId()] = str_repeat($indent_string, $level).$cat->getSlug();
        }
        return $cat_names;
    }



}
