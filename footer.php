
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cineplex - Footer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

.f-container{
	max-width: 1170px;
	margin:auto;
}
.f-row{
	display: flex;
	flex-wrap: wrap;
}
.f-link{
	text-align: left;
	list-style: none;
	padding-left: 0px;
}
.footer{
	background-color: #24262b;
    padding: 70px 0;
    line-height: 1.5;
	font-family: "Open Sans", sans-serif;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}

/*.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}*/

.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

    </style>
</head>
<body>

  <footer class="footer">
  	 <div class="f-container">
  	 	<div class="f-row">
  	 		<div class="footer-col">
  	 			<h4>Cineplex cinemas</h4>
  	 			<ul class="f-link">
  	 				<li><a href="index.php">Home</a></li>
  	 				<li><a href="movies_events.php">Movies</a></li>
  	 				<li><a href="about_us.php">About</a></li>
  	 				<li><a href="contactus.php">Contact</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Legal</h4>
  	 			<ul class="f-link">
  	 				<li><a href="privacypolicy.html">Privacy Policy</a></li>
  	 				<li><a href="termsandcon.html">Terms & Conditions</a></li>
  	 			</ul>
  	 		</div>

  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
	   <p style="color: #fff; text-align:center; margin-top: 40px; margin-bottom: -30px;">&copy; 2024 Cineplex Cinemas by Chamashi Nethsarani. All rights reserved.</p>
  </footer>

</body>
</html>
