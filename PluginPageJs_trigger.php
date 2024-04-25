<?php
class PluginPageJs_trigger{
  public function widget_include(){
    wfPlugin::enable('wf/embed');
    $element = array();
    $element[] = wfDocument::createWidget('wf/embed', 'embed', array('type' => 'script', 'file' => '/plugin/page/js_trigger/js/PluginPageJs_trigger.js'));
    wfDocument::renderElement($element);
  }
}