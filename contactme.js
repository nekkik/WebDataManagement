	function validateForm() {
  var x = document.forms["myForm"]["name"].value;
   var y = document.forms["myForm"]["phone"].value;
  var nameRegex = /^[a-zA-Z\-]+$/;
  if(nameRegex.test(x) == false){
   alert("NAME must be in alphabets only");
   return false;
    }
 var phonenumber=/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/
  
   if(phonenumber.test(y) == false){
   alert("phonenumber must be in numbers only");
   return false;
    }

}//function