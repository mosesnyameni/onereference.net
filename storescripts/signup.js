function signup(){

	
	var name = _("fname").value;
	var surname = _("lname").value;
	var contact = _("contact").value;
	var email = _("email").value;
	var pass = _("password").value;
	var con_pass = _("confirmpass").value;
	var e = document.getElementById("role");
	var role = e.options[e.selectedIndex].text;
	var status = _("status");
	
	dataString = 'name=' +  name + '&surname=' + surname +  '&contact= ' + contact +
	'&email=' + email + '&pass=' + pass + '&con_pass=' + con_pass + '&role=' + role; 
/*	
	var name = document.signupform.fname;
	var surname = document.signupform.lname;
	var contact = document.signupform.contact;
	var email = document.signupform.email;
	var pass = document.signupform.password;
	var con_pass = document.signupform.confirmpass;
	var role = document.signupform.role; */		
	
	if(name== '' || surname == '' || contact == ''|| email == '' || pass == ""||  con_pass== "" || role =="" ){
		status.innerHTML = "Fill out all of the form data";
		alert("Please Fill All Fields");
	}else if(pass != con_pass){
		status.innerHTML = "Your password fields do not match";
		alert("Please Fill All Fields");
	}else {
			
//AJAX code to submit form.
        $.ajax({
            type: "POST",
            url: "business_registration.php",
            data: dataString,
            cache: false,
            success: function(html) {
                alert(html);
            }
        });
    }
    return false;		
	
}

/* _("submit").style.display = "none";
		status.innerHTML = 'animatedgifs/apple.gif';
		var ajax = ajaxObj("POST","business_registration.php");
		ajax.onreadystatechange = function() {
			if(ajaxReturn(ajax)==true){
				if(ajax.responseText != "signup_success"){
					status.innerHTML = ajax.responseText;
					_("submit").style.display = "block";
				}else{
					window.scrollTo(0,0);
					_("signupform").innerHTML = "OK "+ name+ ", check your email inbox at <u>" + email + "</u> to complete your signup";
				}
			}
		}
		ajax.send('name=' +  name + '&surname=' + surname +  '&contact= ' + contact +
	'&email=' + email + '&pass=' + pass + '&con_pass=' + con_pass + '&role=' + role); 
		*/