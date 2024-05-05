<?php

require_once dirname(__FILE__).'/../vendor/lexpress/symfony1/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{

  static protected $zendLoaded = false;

  //dont worry this is never called
  static public function registerZend()
  {
      if (self::$zendLoaded)
      {
          return;
      }
      set_include_path(sfConfig::get('sf_lib_dir').'/vendor'.PATH_SEPARATOR.get_include_path());
      require_once sfConfig::get('sf_lib_dir').'/vendor/Zend/Loader/Autoloader.php';
      Zend_Loader_Autoloader::getInstance();
      self::$zendLoaded = true;
  }

  //called once on page load
  public function setup()
  {

    //leads into the public files
  	$this->setWebDir($this->getRootDir().'/../www/buscouncil/busgurus/index.php/');
    $this->enablePlugins('sfPropelORMPlugin');
    $this->enablePlugins('sfGuardPlugin');
    $this->enablePlugins('sfSimpleCMSPlugin');
    $this->enablePlugins('sfPropelActAsNestedSetBehaviorPlugin');
    $this->enablePlugins('sfFormExtraPlugin');

  }
}
