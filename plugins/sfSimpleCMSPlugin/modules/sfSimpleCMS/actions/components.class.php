<?php

// autoloading for plugin lib actions is broken as at symfony-1.0.2
require_once(sfConfig::get('sf_plugins_dir'). '/sfSimpleCMSPlugin/modules/sfSimpleCMS/lib/BasesfSimpleCMSComponents.class.php');
require_once(sfConfig::get('sf_plugins_dir'). '/sfSimpleCMSPlugin/modules/sfSimpleCMS/lib/sfSimpleCMSEditionToolEditPageForm.class.php');
class sfSimpleCMSComponents extends BasesfSimpleCMSComponents
{
}
