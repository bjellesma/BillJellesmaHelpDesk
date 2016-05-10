function ajaxValidate(method, value, target){
  if(encodeURIComponent){
    var req = new AjaxRequest();
    //encodeURIComponent will strip most special characters
    var params = "method=" + method + "&value=" + encodeURIComponent(value) + "&target=" + target;
    req.setMethod("POST");
    req.loadXMLDoc('form-process.php', params);
  }
}
