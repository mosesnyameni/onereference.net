function checkusername(){
	var u = _("email").value;
	if(u != ""){
		_("unamestatus").innerHTML = 'animatedgifs/apple.gif';
		var ajax = ajaxObj("POST", "business_registration.php");
		ajax.onreadystatechange = function(){
			if(ajaxReturn(ajax)==true){
				_("unamestatus").innerHTML = ajax.responseText;
				//alert( ajax.responseText);
			}
		}
		ajax.send("bus_emailcheck=" + u);
	}
}



