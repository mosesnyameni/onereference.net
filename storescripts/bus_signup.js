function bus_signup(){
	var bus_name = _("businessname").value;
	var bus_email = _("bus_email").value;
	var bus_add = _("bus_address").value;
	var bus_occup = _("bus_occupation").value;
	var pass1 = _("pass1").value;
	var pass2 = _("pass2").value;
	
	if(bus_name== "" || bus_email == "" || pass1 == "" || pass2 == "" || c == ""|| g== ""){
		status.innerHTML = "Fill out all of the form data";
	}else if(p1 != p2){
		status.innerHTML = "Your password fields do not match";
	}else if( _("terms").style.display == "none"){
		status.innerHTML = "Please view the terms of use ";
	}else {
		_("signupbutton").style.display = "none";
		status.innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST","signup.php");
		ajax.onreadystatechange = function() {
			if(ajaxReturn(ajax)==true){
				if(ajax.responseText != "signup_success"){
					status.innerHTML = ajax.responseText;
					_("signupbutton").style.display = "block";
				}else{
					window.scrollTo(0,0);
					_("signupform").innerHTML = "OK "+ u+ ", check your email inbox at <u>" + e + "</u> to complete your signup";
				}
			}
		
		}
	ajax.send("&bus_name="+u+"&bus_email="+e+"&p="+p1+"&c="+c+"&g="+g);
	}
}