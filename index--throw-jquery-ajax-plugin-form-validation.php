<!--Ref.Url:-https://webdesign.tutsplus.com/easy-form-validation-with-jquery--cms-33096t -->
<html>
<head>
 <title>Jquery Validation Form</title>
</head>
<body>
<form id="form" method="post" action="">
  <p>
    <label for="name">Name<span>(required, at least 3 characters)</span></label>
	<input id="name" name="name" minlength="3" type="text" required />
  </p>
  <p>
   <label for="age">Your Age<span>(minimum 18)</span></label>
   <input id="age" name="age" />
  </p>
  <p>
    <label for="email">E-Mail<span>(required)</span></label>
    <input id="email" name="email" />
  </p>
  <p>
   <label for="phone">Phone<span>(required)</span></label>
   <input id="phone" name="phone"/>
  </p>
  <p>
   <input class="submit" type="submit" value="SUBMIT" />
  </p>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</body>
</html>
<script>
$(document).ready(function(){
 $("#form").validate({
	 rules : {
		 name : {
			 required:true,
			 minlength:3
		 },
		 age : {
		  required : true,
		  number : true,
          min : 18,
          max : 90		  
		 },
		 email : {
		  required : true,
		  email : true
		 },
		 phone : {
		  required : true,
		  phone : true,
		
		 }
   },
	 messages : {
		name : {
		  minlength: "Name should be at least 3 characters",
		  required : "Please enter your name"
		},
		age : {
			required : "Please Enter Your Age",
			number : "Please Enter your Age as a numirical value",
			min : "You must be at least 18 years old"
		},
		email:{
		  required : "Please Enter Email Address",
		  email: "The email should be in the formate: abc@domain.tld"
		},
		phone:{
		 required : "Please Enter  phone number",
		 phone : "The phone should be in the formate: +91-9999999990"
		}
	 }
 });
});
</script>