	function validateForm() {
  var x = document.forms["myForm"]["name"].value;
 
  var nameRegex = /^[a-zA-Z\-]+$/;
 
  if(nameRegex.test(x) == false){
   alert("NAME must be in alphabets only");
   return false;
    }


}//function