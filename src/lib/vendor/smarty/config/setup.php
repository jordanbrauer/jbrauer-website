<?php
// load Smarty library.
require_once '../Smarty.class.php';

class Template extends Smarty {
  public function __construct() {
    // class constructor

    parent::__construct();

    $this->setTemplateDir('../../../../templates/');
    $this->setCompileDir('../../../../cache/smarty/compiled/');
    $this->setConfigDir('/');
    $this->setCacheDir('../../../../cache/smarty/cache/');

    $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
    $this->assign('app_name', 'jBrauer Website');
  }
}
?>
