<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class searchComponents extends sfComponents {
    public function executeForm() {
//        $this->form = new SearchForm($this->getRoute()->getObject());
        $this->form = new SearchForm();
    }
}