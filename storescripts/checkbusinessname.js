function checkbusinessname(){
	var u = _("businessname").value;
	if(u != ""){
		_("unamestatus").innerHTML = 'checking ...';
		var ajax = ajaxObj("POST", "business_registration.php");
		ajax.onreadystatechange = function(){
			if(ajaxReturn(ajax)==true){
				_("bus_reg_link").innerHTML = ajax.responseText;
				//alert( ajax.responseText);
			}
		}
		ajax.send("businessnamecheck=" + u);
	}
}