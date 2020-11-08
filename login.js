	function validateForm() {
  var x = document.forms["myForm"]["username"].value;
  
  var b = document.forms["myForm"]["password"].value;
  var nameRegex = /^[a-zA-Z\-]+$/;
  if(nameRegex.test(x) == false){
   alert("USERNAME must be in alphabets only");
   return false;
    }

}//function