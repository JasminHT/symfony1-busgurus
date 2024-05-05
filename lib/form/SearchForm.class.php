<?php
class SearchForm extends sfForm {


    public function configure() {

        $this->setDefaults(array('query' => sfContext::getInstance()->getRequest()->getParameter('query')));



        $this->widgetSchema['query'] = new sfWidgetFormChoice(
            array('choices' => array(),
            'label' => ' '
        ));
        $this->widgetSchema['query']->setOption('renderer_class', 'sfWidgetFormJQueryAutocompleter');
        $this->widgetSchema['query']->setOption('renderer_options', array(
            'url'    => sfContext::getInstance()->getController()->genUrl('@searchKeywords?sf_culture='.sfContext::getInstance()->getRequest()->getParameter('sf_culture')),
            'config' => '{
          max: 10,
          width: 190,
          highlight: false,
          multiple: false,
          multipleSeparator: ", ",
          scroll: true,
          scrollHeight: 300}'
        ));

        //$this->widgetSchema->setHelp('query', __('Enter keywords such as: recruitment, training, learning'));


    }
}