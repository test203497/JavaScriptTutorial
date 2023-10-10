<!--REF.URL: https://www.tutorialrepublic.com/codelab.php?topic=javascript&file=form-validation  -->
<style>
.error{color:#f50909;}
 p{margin:5px 0;}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Portal System</title>
</head>
<body>
<form action="" name="frm" method="post" id="frm" onsubmit="event.preventDefault(); return validateForm()">
 <span>Name</span>
 <p><input type="text" name="name" placeholder="Enter the name" id="name-txt" autocomplete="off"></p>
 <div class="error" id="nameErr"></div>
 <span>Address</span>
 <p><input type="text" name="address" placeholder="Enter the Address" id="address-txt" autocomplete="off"></p>
  <div class="error" id="addreErr"></div>
  <span>Telephone</span>
 <p><input type="text" name="telephone" placeholder="Enter the telephone number" id="tele-txt" autocomplete="off"></p>
 <div class="error" id="mobileErr"></div>
 <span>City</span>
 <p><input type="text" name="city" placeholder="Enter the city" id="city-txt" autocomplete="off"></p>
  <div class="error" id="cityErr"></div>
 <span>State</span>
 <p><input type="text" name="state" placeholder="Enter the state" id="state-txt" autocomplete="off"></p>
 <div class="error" id="stateErr"></div>
 <span>Email</span>
 <p><input type="email" name="email" placeholder="Enter the email-id" id="email-txt" autocomplete="off"></p>
 <div class="error" id="emailErr"></div>
 <span>Password</span>
 <p><input type="password" name="password" placeholder="Enter the password" id="pass-txt" autocomplete="off"></p>
  <div class="error" id="passwordErr"></div>
 <!--<span>Confirm Password</span>
 <p><input type="password" name="cpassword" placeholder="Enter the confirm password" id="cpass-txt" autocomplete="off"></p>
  <div class="error" id="cpasswordErr"></div>-->
 <input type="submit" name="submit" id="submit-frm" />
</form>
</body>
</html>
<script>
 function printError(elemId, hintMsg){
	document.getElementById(elemId).innerHTML = hintMsg;
  }
 function validateForm()
 {
   var name = document.frm.name.value;
   var address = document.frm.address.value;
   var telephone = document.frm.telephone.value;
   var city = document.frm.city.value;
   var state = document.frm.state.value;
   var email = document.frm.email.value;
   var password = document.frm.password.value;
   var nameErr = addreErr = mobileErr = cityErr = stateErr = emailErr = passwordErr = true;
   if(name == '')
   {
     printError("nameErr", "Please enter your name"); 
   }else{
	 var regex = /^[a-zA-Z\s]+$/;
	 if(regex.test(name)== false){
	  printError("nameErr", "Please Enter Valid name");
	 }else{
		printError("nameErr", "");
		nameErr = flase;
	 }
   }
   if(address == '')
   {
	printError("addreErr", "Please enter your address");   
   }else{
	  var regex = /^[a-zA-Z\s]+$/; 
	  if(regex.test(address)== false){
		printError("addreErr", "Please Enter Valid Address");  
	  }else{
		printError("addreErr", ""); 
		addreErr = false;
	  }
   }
  if(telephone == ''){
   printError("mobileErr", "Please Enter Valid Telephone number");  
  }else{
	var regex = /^[1-9]\d{9}$/;
    if(regex.test(telephone)== false){
	  printError("mobileErr", "Please enter a valid 10 digit mobile number");
	}else{
	 printError("mobileErr", "");
	 mobileErr = false;
	}	
  }
  if(city == ''){
	printError("cityErr", "Please Enter Your City"); 
  }else{
   var regex = /^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]*$/;
   if(regex.test(city) == false){
	 printError("cityErr", "Please Enter Valid city");   
   }else{
	 printError("cityErr","");
     cityErr = false;	 
   }
  }
  if(state == ''){
	printError("stateErr", "Please Enter Your State"); 
  }else{
   var regex = /^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]*$/;
   if(regex.test(state) == false){
	 printError("stateErr", "Please Enter Valid State");   
   }else{
	 printError("stateErr", "");
     stateErr = false;	 
   }
  }
  if(email == ''){
	printError("emailErr", "Please Enter Your Email"); 
  }else{
   var regex = /^\S+@\S+\.\S+$/;
   if(regex.test(email) == false){
	 printError("emailErr", "Please Enter Valid Email");   
   }else{
	 printError("emailErr", "");
     emailErr = false;	 
   }
  }
  if(password == ''){
	printError("passwordErr", "Please Enter Your Password"); 
  }else{
   var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/;
   if(regex.test(password) == false){
	 printError("passwordErr", "Please Enter Valid Password");   
   }else{
	 printError("passwordErr", "");
     passwordErr = false;	 
   }
  }
}
</script>