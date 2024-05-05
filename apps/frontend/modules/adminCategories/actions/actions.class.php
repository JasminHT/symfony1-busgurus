<?php

/**
 * adminCategories actions.
 *
 * @package    bus-hr
 * @subpackage adminCategories
 * @author     Gavin Ogston
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class adminCategoriesActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $this->hr_categories_list = HrCategoriesPeer::getAllOrderByTree();
        $this->hr_categories_list_levels = HrCategoriesPeer::getAllCategoriesWithIdLevel();
    }

    public function executeShow(sfWebRequest $request)
    {
        $this->hr_categories = HrCategoriesPeer::retrieveByPk($request->getParameter('id'));
        $this->forward404Unless($this->hr_categories);
    }

    public function executeNew(sfWebRequest $request)
    {
        $this->form = new HrCategoriesForm();
    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod('post'));

        $hrCategories = $request->getParameter('hr_categories');

        if(!$hrCategories['slug'])
        {
            throw new Exception('Attempting to create a cat with no slug. Please make sure you enter a slug in the form before submitting it.');
        }

        // check to se if this sulg is in use nested set does not like duplicates causes errors
        $slugCheckSlug = HrCategoriesPeer::retrieveBySlug($hrCategories['slug']);
        if($slugCheckSlug)
        {
             throw new Exception('This slug is already in use please choose another slug');
        }

        $category = new HrCategories();
        $relative_cat = HrCategoriesPeer::retrieveByPk($hrCategories['position']);
        $positionType = $hrCategories['position_type'];

        if($relative_cat && $relative_cat->isRoot() && $positionType == 'after')
        {
            throw new Exception('Attempting to create a cat at the same level as the home cat. Please make sure select a position under the root node.');
        }

        if($positionType == '')
        {
            throw new Exception('You must designate a position type');
        }


        if($positionType == 'under')
        {
            $category->insertAsFirstChildOf($relative_cat);
        }
        else if($positionType == 'after')
        {
            $category->insertAsNextSiblingOf($relative_cat);
        }

        $category->setSlug($hrCategories['slug']);
        $category->setTitleEn($hrCategories['title_en']);
        $category->setTitleFr($hrCategories['title_fr']);
        $category->setDescriptionEn($hrCategories['description_en']);
        $category->setDescriptionFr($hrCategories['description_fr']);
        $category->setIsPublished("1");
        $category->save();

        $this->redirect('adminCategories/index');

    }


    public function executeCreateOrg(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod('post'));

        $this->form = new HrCategoriesForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($hr_categories = HrCategoriesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object hr_categories does not exist (%s).', $request->getParameter('id')));
        $this->form = new HrCategoriesForm($hr_categories);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
        $hrCategories = $request->getParameter('hr_categories');

        if(!$hrCategories['slug']){
            throw new Exception('Attempting to edit/create a cat with no slug. Please make sure you enter a slug in the form before submitting it.');
        }


        // check to se if this slug is in use nested set does not like duplicates causes errors
        $slugCheckSlug = HrCategoriesPeer::retrieveBySlug($hrCategories['slug']);
        if($slugCheckSlug && $slugCheckSlug->getId() != $hrCategories['id'])
        {
             throw new Exception('This slug is already in use by another record please choose another slug');
        }


        $cat_id = $hrCategories['id'];
        $relative_cat = HrCategoriesPeer::retrieveByPk($hrCategories['position']);

        $positionType = $hrCategories['position_type'];

        if($relative_cat && $relative_cat->isRoot() && $positionType == 'after')
        {
            throw new Exception('Attempting to create a cat at the same level as the home cat. Please make sure select a position under the root node.');
        }

        if($cat_id){
            // update
            $cat = HrCategoriesPeer::retrieveByPk($hrCategories['id']);
            $this->forward404Unless($cat);
            if($relative_cat && $relative_cat->getId() != $hrCategories['id'] ){
                if($positionType == 'under')
                {
                    $cat->moveToFirstChildOf($relative_cat);
                }
                else if($positionType == 'after')
                {
                    $cat->moveToNextSiblingOf($relative_cat);
                }
            }
        }

        $cat->setSlug($hrCategories['slug']);
        $cat->setTitleEn($hrCategories['title_en']);
        $cat->setTitleFr($hrCategories['title_fr']);
        $cat->setDescriptionEn($hrCategories['description_en']);
        $cat->setDescriptionFr($hrCategories['description_fr']);
        $cat->save();
        $this->redirect('adminCategories/index');
    }


    public function executeUpdateOrg(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
        $this->forward404Unless($hr_categories = HrCategoriesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object hr_categories does not exist (%s).', $request->getParameter('id')));
        $this->form = new HrCategoriesForm($hr_categories);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $this->forward404Unless($hr_categories = HrCategoriesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object hr_categories does not exist (%s).', $request->getParameter('id')));
        $hr_categories->delete();

        $this->redirect('adminCategories/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid())
        {
            $hr_categories = $form->save();

            $this->redirect('adminCategories/edit?id='.$hr_categories->getId());
        }
    }


    public function executeNewRoot(sfWebRequest $request)
    {
        $category = new HrCategories();
        $category->makeRoot();
        $category->setSlug('categories_root');
        $category->save();

        $this->redirect('adminCategories/index');
    }

    public function executeNewCat(sfWebRequest $request)
    {
        $this->form = new HrCategoriesForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('newCat');
    }


    public function executeUpdateCat(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
        $this->forward404Unless($hr_categories = HrCategoriesPeer::retrieveByPk($request->getParameter('id')), sprintf('Object hr_categories does not exist (%s).', $request->getParameter('id')));
        $this->form = new HrCategoriesForm($hr_categories);
        //$this->processForm($request, $this->form);


        $relative_page =  HrCategoriesPeer::retrieveBySlug($this->getRequestParameter('position'));
        $positionType = $this->getRequestParameter('category_hierarchy');
        if($relative_page && $relative_page->isRoot() && $positionType != 'under')
        {
            throw new Exception('Attempting to create a page at the same level as the home page. Please make sure select a position under the root node.');
        }

        $page = new sfSimpleCMSPage();
        if($positionType == 'under')
        {
            $page->insertAsFirstChildOf($relative_page);
        }
        else
        {
            $page->insertAsNextSiblingOf($relative_page);
        }
        $page->setSlug($this->getRequestParameter('slug'));
        $page->setTemplate($this->getRequestParameter('template'));
        $page->save();

        $this->redirect('sfSimpleCMSAdmin/list?page='.$this->getRequestParameter('page', 1));





        $this->setTemplate('edit');
    }

    public function executeCreateCat(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod('post'));

        $hrCategories = $request->getParameter('hr_categories');

        $relative_cat = HrCategoriesPeer::retrieveBySlug($hrCategories['position']);

        print_r($relative_cat->getId());

        if(!$hrCategories['slug'])
        {
            throw new Exception('Attempting to create a page with no slug. Please make sure you enter a slug in the form before submitting it.');
        }
        $category = new HrCategories();
        $relative_cat = HrCategoriesPeer::retrieveBySlug($hrCategories['position']);

        print_r($relative_cat->getSlug());

        $positionType = $hrCategories['position_type'];
        if($relative_cat && $relative_cat->isRoot() && $positionType == 'afterr')
        {
            throw new Exception('Attempting to create a page at the same level as the home page. Please make sure select a position under the root node.');
        }

        //$cat = new HrCategories();

        if($positionType == 'under')
        {
            $category->insertAsFirstChildOf($relative_cat);
        }
        else
        {
            $category->insertAsNextSiblingOf($relative_cat);
        }
        $category->setSlug($hrCategories['slug']);
        $category->save();

        $this->redirect('adminCategories/newCat');
    }

    public function executeCreatePage()
    {
        if(!$this->getRequestParameter('slug'))
        {
            throw new Exception('Attempting to create a page with no slug. Please make sure you enter a slug in the form before submitting it.');
        }
        $relative_page = sfSimpleCMSPagePeer::retrieveBySlug($this->getRequestParameter('position'));
        $positionType = $this->getRequestParameter('position_type');
        if($relative_page && $relative_page->isRoot() && $positionType != 'under')
        {
            throw new Exception('Attempting to create a page at the same level as the home page. Please make sure select a position under the root node.');
        }

        $page = new sfSimpleCMSPage();
        if($positionType == 'under')
        {
            $page->insertAsFirstChildOf($relative_page);
        }
        else
        {
            $page->insertAsNextSiblingOf($relative_page);
        }
        $page->setSlug($this->getRequestParameter('slug'));
        $page->setTemplate($this->getRequestParameter('template'));
        $page->save();

        $this->redirect('sfSimpleCMSAdmin/list?page='.$this->getRequestParameter('page', 1));
    }






}
