<?php
class PluginSpecList{
  private $settings = null;
  function __construct() {
    wfPlugin::includeonce('wf/yml');
    wfGlobals::setSys('layout_path', '/plugin/spec/list/layout');
    $this->settings = new PluginWfArray(wfArray::get($GLOBALS, 'sys/settings/plugin_modules/'.wfArray::get($GLOBALS, 'sys/class').'/settings'));
    $this->settings->set('item_org', $this->settings->get('item') );
    if(wfFilesystem::fileExist(wfGlobals::getAppDir().$this->settings->get('item'))){
      $temp = new PluginWfArray(wfSettings::getSettingsFromYmlString('yml:'.$this->settings->get('item')));
      $this->settings->set('item', $temp->get('item') );
      $this->settings->set('exist', true);
    }else{
      $this->settings->set('item', array() );
      $this->settings->set('exist', false);
    }
  }
  public function page_start(){
    $page = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    $page = wfDocument::insertAdminLayout($this->settings, 1, $page);
    wfDocument::mergeLayout($page->get());
  }
  public function page_item(){
    wfPlugin::enable('wf/table');
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    $element->setByTag($this->settings->get(), 'settings');
    wfDocument::renderElement($element);
  }
  public function page_item_data(){
    wfPlugin::includeonce('datatable/datatable_1_10_18');
    $datatable = new PluginDatatableDatatable_1_10_18();
    exit($datatable->set_table_data($this->settings->get('item')));
  }
  public function page_spec(){
    $key = wfRequest::get('key');
    $page = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    $page = wfDocument::insertAdminLayout($this->settings, 1, $page);
    $page->setByTag($this->settings->get("item/$key"));
    wfDocument::mergeLayout($page->get());
  }
}