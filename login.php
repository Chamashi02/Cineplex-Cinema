<?php include('header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mega Cinema | Login</title>
  <link rel="stylesheet" href="css/log-reg.css">
</head>
<body>
</div>
	<div class="wrap">
		<div class="content-top" style="min-height:300px;">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				  <div class="panel-heading">Login</div>
				  <div class="panel-body">
				  	<?php include('msgbox.php');?>
				<p class="login-box-msg"><span>Welcome Back !</span> <br>To stay connected with us, please sign in with your login details</p>
				<form action="process_login.php" method="post" onsubmit="return validateForm()">
      <div class="form-group has-feedback">
        <input name="Email" type="text" size="25" placeholder="Email" class="form-control" placeholder="Email" id="emailField"/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="Password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" id="passwordField"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary">Login</button>
 
          <p class="login-box-msg" style="padding-top:20px">New Here? <a href="registration.php">Register</a></p>
          <p class="login-box-msg" style="padding-top:20px"><a href="theatre/">Admin/Staff</a></p>
      </div>
      </div>
</div>
    </form>
			</div>
		</div>
		<div class="clear"></div>	
		
	</div>

<script>
function validateForm() {
  var email = document.getElementById("emailField").value;
  var password = document.getElementById("passwordField").value;

  if (email.trim() === "" || password.trim() === "") {
    alert("Email and password cannot be empty");
    return false;
  }
  return true;
}
</script>

</body>
</html>
