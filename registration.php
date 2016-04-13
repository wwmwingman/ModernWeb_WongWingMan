<!DOCTYPE html> 
<html>
<head>

  <title>AIDS Positive</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/themes/wwm.css" />
  <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> 

</head>

<body>
<div data-role="page" id="signup">
<script>
$(document).ready(function() {
$("#register").click(function() {
var name = $("#signup #name").val();
var email = $("#signup #email").val();
var password = $("#signup #password").val();
var cpassword = $("#signup #cpassword").val();
if (name == '' || email == '' || password == '' || cpassword == '') {
alert("Please fill all fields");
} else if ((password.length) < 8) {
alert("Password should at least 8 character in length.");
} else if (!(password).match(cpassword)) {
alert("Your password is not match.");
} else {
$.post("register.php", {
name1: name,
email1: email,
password1: password
}, function(data) {
if (data == 'Signup successfully') {
$("form")[0].reset();
}
alert(data);
});
}
});
});


$(document).ready(function() {
$('#signup #password').keyup(function() {
$('#result').html(checkStrength($('#password').val()))
})
function checkStrength(password) {
var strength = 0
if (password.length < 6) {
$('#result').removeClass()
$('#result').addClass('short')
return 'Too short'
}
if (password.length > 7) strength += 1
// If password contains both lower and uppercase characters, increase strength value.
if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
// If it has numbers and characters, increase strength value.
if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
// If it has one special character, increase strength value.
if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// If it has two special characters, increase strength value.
if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// Calculated strength value, we can return messages
// If value is less than 2
if (strength < 2) {
$('#result').removeClass()
$('#result').addClass('weak')
return 'Weak'
} else if (strength == 2) {
$('#result').removeClass()
$('#result').addClass('good')
return 'Good'
} else {
$('#result').removeClass()
$('#result').addClass('strong')
return 'Strong'
}
}
});
</script>
  <div data-role="header">
  <a href="#home" data-icon="arrow-l" class="ui-btn-left" >Back</a>
    <h1>AIDS Postive</h1>
  </div>

<div class="container">
<div class="main">
<form class="form" method="post" action="#">
<center><h2>Sign Up</h2></center>
<p>
  <label>Name :</label>
  <input type="text" name="dname" id="name" placeholder="Enter your name">
  <label><br>
    Email :</label>
  <input type="text" name="demail" id="email" placeholder="Enter your email address">
  <br>
<label for="password">Password :</label>
<input name="password" id="password" type="password" placeholder="Choose a password"/>&nbsp;&nbsp;
<b><span id="result"></span></b>
<br><br>
    Confirm Password :</label>
  <input type="password" name="cpassword" id="cpassword" placeholder="Re-type your chosen password">
</p>
<p>
  <center><input type="button" name="register" id="register" value="Register" data-inline="true"></center>
</p>
</form>

<?php
include "about.php";
?>

</div>
	<div data-role="footer">
   		<h4>© 2016 by Wong Wing Man</h4>
	</div>
</body>
</html>