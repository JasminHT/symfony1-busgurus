<?php
/**
* Add sfSimpleCMS defaul routing rules
*/
class sfSimpleCMSRouting {
  static public function listenToRoutingLoadConfigurationEvent(sfEvent $event) {
    $routing = $event->getSubject(); // add plug-in routing rules on top of the existing ones
    
    $routing->prependRoute('sf_cms_delete', new sfRoute('/cms_delete/:sf_culture/:slug', array('module' => 'sfSimpleCMS', 'action' => 'delete'), array('slug' => '.*')));
    $routing->prependRoute('sf_cms_toggle_publish', new sfRoute('/cms_publish/:slug', array('module' => 'sfSimpleCMS', 'action' => 'togglePublish'), array('slug' => '.*')));
    if(sfConfig::get('app_sfSimpleCMS_use_l10n', false))
    {
      $routing->prependRoute('sf_cms_show', new sfRoute('/cms/:sf_culture/:slug', array('module' => 'sfSimpleCMS', 'action' => 'show'), array('slug' => '.*')));
    }
    else
    {
      $routing->prependRoute('sf_cms_show', new sfRoute('/cms/:slug', array('module' => 'sfSimpleCMS', 'action' => 'show'), array('slug' => '.*')));
    }
  }
}