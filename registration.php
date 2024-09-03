<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/log-reg.css">
  <style>
    .wrap {
      margin-top: 75px;
    }
  </style>
</head>
<body>
<?php
include('header.php');
?>
<div class="content">
    <div class="wrap">
        <div class="content-top" style="min-height:300px;">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <?php include('msgbox.php');?>
                        <p class="login-box-msg">Register to get started</p>
                        <form action="process_registration.php" method="post" id="form1" onsubmit="return validateForm()">
                            <div class="form-group has-feedback">
                                <input name="name" id="name" type="text" size="25" placeholder="Name" class="form-control"/>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="age" id="age" type="text" size="25" placeholder="Age" class="form-control"/>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <select name="gender" id="gender" class="form-control">
                                    <option class="opt">Male</option>
                                    <option class="opt">Female</option>
                                </select>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="phone" id="phone" type="text" size="25" placeholder="Mobile Number" class="form-control"/>
                                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="email" id="email" type="text" size="25" placeholder="Email" class="form-control"/>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="password" id="password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="cpassword" id="cpassword" type="password" size="25" placeholder="Confirm Password" class="form-control" placeholder="Password" />
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<script>
function validateForm() {
    var name = document.getElementById("name").value;
    var age = document.getElementById("age").value;
    var gender = document.getElementById("gender").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;

    // Check if any field is empty
    if (name == "" || age == "" || gender == "" || phone == "" || email == "" || password == "" || cpassword == "") {
        alert("All fields are required");
        return false;
    }

    // Check if password and confirm password match
    if (password != cpassword) {
        alert("Password and confirm password does not match");
        return false;
    }

    // Validate email format
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Invalid email format");
        return false;
    }

    // Validate age and phone number are numeric
    if (isNaN(age) || isNaN(phone)) {
        alert("Age and phone number must be numeric");
        return false;
    }

    // Validate password length
    if (password.length < 7) {
        alert("Password must be at least 7 characters long");
        return false;
    }

    // Validate mobile number length
    if (phone.length !== 10) {
        alert("Mobile number must be 10 characters long");
        return false;
    }

    // Add additional validation rules as needed
    
    return true;
}
</script>


</body>
</html>
