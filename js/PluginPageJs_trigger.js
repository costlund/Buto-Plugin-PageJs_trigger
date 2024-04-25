function PluginPageJs_trigger(){
  this.trigger = function(tag){
    $.get("/"+PluginThemeInclude.data.class+"/page_trigger/tag/"+tag, function(data, status){
    });
  }
}
var PluginPageJs_trigger = new PluginPageJs_trigger();