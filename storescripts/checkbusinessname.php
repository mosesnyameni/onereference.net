function checkusername(){
	var u = _("businessname").value;
	if(u != ""){
		_("unamestatus").innerHTML = 'checking ...';
		var ajax = ajaxObj("POST", "business_registration.php");
		ajax.onreadystatechange = function(){
			if(ajaxReturn(ajax)==true){
				_("unamestatus").innerHTML = ajax.responseText;
				//alert( ajax.responseText);
			}
		}
		ajax.send("businessnamecheck=" + u);
	}
}