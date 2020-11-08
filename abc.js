	function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  var y = document.forms["myForm"]["lastname"].value;
  var z = document.forms["myForm"]["user1"].value;
  var a = document.forms["myForm"]["emailaddress"].value;
  var b = document.forms["myForm"]["password"].value;
  var c = document.forms["myForm"]["confirmpassword"].value;
  var nameRegex = /^[a-zA-Z\-]+$/;
  if (x == "") {
	alert("First Name must be filled out");
    return false;
  }
  if(nameRegex.test(x) == false){
   alert("First NAME must be in alphabets only");
   return false;
    }
   if (y == "") {
    alert("Last Name can not be empty");
    return false;
  }
   if(nameRegex.test(y) == false){
   alert("Last name must be in alphabets only");
   return false;
    }
   if (z == "") {
    alert("Username can not be empty");
    return false;
  }
     if (a == "") {
    alert("Email can not be empty");
    return false;
  }
     if (b == "") {
    alert("Password can not be empty");
    return false;
  }
     if (c == "") {
    alert("Confirm Password can not be empty");
    return false;
  }
  if(b!=c){
  	alert("Password does not match");
  	return false;
  }


}//function