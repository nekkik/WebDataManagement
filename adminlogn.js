	function validateForm() {
  var x = document.forms["myForm"]["uname"].value;
  var b = document.forms["myForm"]["password"].value;
  var nameRegex = /^[a-zA-Z\-]+$/;
  if (x == "") {
	alert("First Name must be filled out");
    return false;
  }
     if (b == "") {
    alert("Password can not be empty");
    return false;
  }


}//function