<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Booking</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,800">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://unpkg.com/scrollreveal@4.0.8/dist/scrollreveal.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<style>
		body {
			font-family: 'Montserrat', sans-serif;
			background-color: #121212;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 20px;
		}

		.header {
			background-color: #333;
			color: #fff;
			text-align: center;
			padding: 10px;
		}

		.content {
			background-color: #fff;
			padding: 20px;
			margin: 77px 200px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		h2 {
			font-weight: lighter;
			text-transform: uppercase;
		}

		.about-top {
			display: flex;
		}

		.movie-title {
			font-size: 24px;
			margin-top: 10px;
			margin-bottom: 10px;
			text-align: center;
			padding: 10px;
			color: #e91e63;
			font-weight: bold;
		}

		.movie-description {
			padding: 20px;
		}

		.movie-image {
			display: block;
			margin: 0 auto;
			max-width: 100%;
		}

		.images_3_of_2 img {
			border: #121212 0px solid;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			margin: 22px;
		}

		.span_3_of_2 {
			line-height: 40px;
			position: relative;
			margin-top: 0px;
			width: 45%;
			flex-basis: calc(50% - 20px);
			margin-bottom: 5px;
			margin-left: 40px;
		}

		.span_3_of_2 i {
			color: goldenrod;
			padding: 2px;
			font-size: 14px;
		}

		.watch_but {
			display: inline-block;
			padding: 3px 20px;
			background-color: #fff;
			color: #e91e63;
			text-decoration: none;
			border: #e91e63 1px solid;
			border-radius: 5px;
			margin-top: 10px;
			transition: 0.1s ease-in-out;
		}

		.watch_but:hover {
			transform: scale(1.02);
			background-color: #e91e63;
			color: #fff;
		}

		.show-table {
			width: 100%;
			margin-top: 20px;
		}

		.show-table th {
			background-color: #333;
			color: #fff;
			padding: 10px;
		}

		.show-table td {
			padding: 10px;
			text-align: center;
		}

		.show-table button {
			background-color: #5bc0de;
			color: #fff;
			border: none;
			padding: 10px 20px;
			cursor: pointer;
		}

		.sidebar {
			background-color: #f0f0f0;
			padding: 20px;
		}
	</style>
</head>
<body>
	<?php include('header.php');
	if(!isset($_SESSION['user']))
	{
		header('location:login.php');
	}
		$qry2=mysqli_query($con,"select * from tbl_movie where movie_id='".$_SESSION['movie']."'");
		$movie=mysqli_fetch_array($qry2);
	?>
	<div class="content">
		<div class="wrap">
			<div class="content-top">
					<div class="section group">
						<div class="about span_1_of_2" data-sr>
	
								<div class="about-top">	
									<div class="grid images_3_of_2">
										<img src="<?php echo $movie['image']; ?>" alt="" width='350' height='500' " alt=""/>
									</div>
	
									<div class="desc span_3_of_2" data-sr>
									<h2 class="text-center movie-title"><?php echo $movie['movie_name']; ?></h2>	
									<p class="p-link"><b>IMDB Rating : </b> 4.5 <i class='bx bxs-star' ></i></p>
										<p class="p-link"><b>Cast : </b><?php echo $movie['cast']; ?></p>
										<p class="p-link"><b>Release Date : </b><?php echo date('d-M-Y',strtotime($movie['release_date'])); ?></p>
										<p><b>Description : </b><?php echo $movie['desc']; ?></p>
										<a href="<?php echo $movie['video_url']; ?>" target="_blank" class="watch_but">Watch Trailer</a>
									</div>
								</div>
						<table class="table table-hover table-bordered text-center show-table" data-sr>
						<?php
							$s=mysqli_query($con,"select * from tbl_shows where s_id='".$_SESSION['show']."'");
							$shw=mysqli_fetch_array($s);
							$t=mysqli_query($con,"select * from tbl_theatre where id='".$shw['theatre_id']."'");
							$theatre=mysqli_fetch_array($t);
						?>
						<td>
							Screen
						</td>
						<td>
							<?php 
								$ttm=mysqli_query($con,"select  * from tbl_show_time where st_id='".$shw['st_id']."'");
								$ttme=mysqli_fetch_array($ttm);
								$sn=mysqli_query($con,"select  * from tbl_screens where screen_id='".$ttme['screen_id']."'");
								$screen=mysqli_fetch_array($sn);
								echo $screen['screen_name'];
							?>
						</td>
					</tr>
					<tr>
						<td>
							Date
						</td>
						<td>
							<?php 
							if(isset($_GET['date']))
							{
								$date=$_GET['date'];
							}
							else
							{
								if($shw['start_date']>date('Y-m-d'))
								{
									$date=date('Y-m-d',strtotime($shw['start_date'] . "-1 days"));
								}
								else
								{
									$date=date('Y-m-d');
								}
								$_SESSION['dd']=$date;
							}
							?>
							<div class="col-md-12 text-center" style="padding-bottom:20px">
								<?php if($date>$_SESSION['dd']){?>
									<a href="booking.php?date=<?php echo date('Y-m-d',strtotime($date . "-1 days"));?>">
										<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i></button>
									</a>
								<?php } ?>
								<span style="cursor:default" class="btn btn-default"><?php echo date('d-M-Y',strtotime($date));?></span>
								<?php if($date!=date('Y-m-d',strtotime($_SESSION['dd'] . "+4 days"))){?>
									<a href="booking.php?date=<?php echo date('Y-m-d',strtotime($date . "+1 days"));?>">
										<button class="btn btn-default"><i class="glyphicon glyphicon-chevron-right"></i></button>
									<?php }
									$av=mysqli_query($con,"select sum(no_seats) from tbl_bookings where show_id='".$_SESSION['show']."' and ticket_date='$date'");
									$avl=mysqli_fetch_array($av);
									?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							Show Time
						</td>
						<td>
							<?php echo date('h:i A',strtotime($ttme['start_time']))." ".$ttme['name'];?> Show
						</td>
					</tr>
					<tr>
						<td>
							Number of Seats
						</td>
						<td>
							<form  action="booking.php" method="post">
								<input type="hidden" name="screen" value="<?php echo $screen['screen_id'];?>"/>
								<input type="number" required tile="Number of Seats" max="<?php echo $screen['seats']-$avl[0];?>" min="0" name="seats" class="form-control" value="1" style="text-align:center" id="seats"/>
								<input type="hidden" name="amount" id="hm" value="<?php echo $screen['charge'];?>"/>
								<input type="hidden" name="date" value="<?php echo $date;?>"/>
						</td>
					</tr>
					<tr>
						<td>
							Amount
						</td>
						<td id="amount" style="font-weight:bold;font-size:18px">
							LKR <?php echo $screen['charge'];?>
						</td>
					</tr>
					<?php
					$errors = array(); // Create an array to store errors.

					if (isset($_POST['reservation'])) {
						include("config.php");
						$_SESSION['screen'] = $screen['screen_id'];
						$_SESSION['seats'] = $_POST['seats']; // Assuming seats come from a form
						$_SESSION['amount'] = $_POST['amount']; // Assuming amount comes from a form
						$_SESSION['date'] = $_POST['date'];
						// Proceed with the database insertion if there are no errors.
						$bookid="BKID".rand(1000000,9999999);
						mysqli_query($con,"INSERT into tbl_bookings values(NULL,'$bookid','".$_SESSION['theatre']."','".$_SESSION['user']."','".$_SESSION['show']."','".$_SESSION['screen']."','".$_SESSION['seats']."','".$_SESSION['amount']."','".$_SESSION['date']."',CURDATE(),'1')");

						echo "<script>
						Swal.fire({
							title: 'Booking Confirmed!',
							text: 'Your Booking ID is: $bookid',
							icon: 'success',
							confirmButtonText: 'OK'
						}).then((result) => {
							if (result.isConfirmed) {
								window.location.href = 'booking.php'; // Redirect to confirmation page if OK is clicked
							}
						});
					  </script>";

					}
					?>
					<tr>
						<td colspan="2">
							<?php if($avl[0]==$screen['seats']){?>
								<button type="button" class="btn btn-danger" style="width:100%">House Full</button>
							<?php } else { ?>
								<button class="btn btn-info" name="reservation" style="width:100%">Book Now</button>
							<?php } ?>
						</form></td>
					</tr>
					</table>
				</div>			
		</div>
		<div class="clear"></div>		
	</div>
	</div>
	</div>
	<?php include('footer.php');?>
<script type="text/javascript">
	$('#seats').change(function(){
		var charge=<?php echo $screen['charge'];?>;
		amount=charge*$(this).val();
		$('#amount').html("LKR "+amount);
		$('#hm').val(amount);
	});
</script>
	
	<script src="https://unpkg.com/scrollreveal@4.0.8/dist/scrollreveal.min.js"></script>
	<script>
		// Initialize ScrollReveal
		const sr = ScrollReveal();

		// Configure the animations
		sr.reveal('.about-top', {
			origin: 'left',
			distance: '50px',
			duration: 1000,
		});

		sr.reveal('.desc', {
			origin: 'right',
			distance: '50px',
			duration: 1000,
		});

		sr.reveal('.show-table', {
			origin: 'bottom',
			distance: '50px',
			duration: 1000,
		});
	</script>
	
</body>
</html>
