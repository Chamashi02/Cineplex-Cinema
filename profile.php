<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cineplex - Booking History</title>
    <style>
        /* Keep only necessary styles */
        .profile-content {
            font-family: 'Montserrat', sans-serif;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tbody tr {
            background-color: #ffffff;
        }
        td a {
            color: red;
            text-decoration: none;
        }
        td a:hover {
            text-decoration: underline;
        }
        .glyphicon-ok {
            color: green;
            font-size: 20px;
        }
        th, td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .table-wrapper {
            overflow-x: auto;
        }
		.profile-msg {
			align-items: center;
			text-align: center;
		}
		h3 {
			color:#c2185b;
			text-align: center;
			
		}
		.alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
			padding: 15px;
			margin-bottom: 15px;
			border-radius: 15px;
        }
    </style>
</head>
<body>
<?php
include('header.php');
if(!isset($_SESSION['user'])) {
    header('location:login.php');
}
?>
<div class="profile-content">
    <div class="wrap">

            <div class="about">   
				<?php include('msgbox.php');?>
                <h3>BOOKING HISTORY</h3>

                <?php
                $bk=mysqli_query($con,"select * from tbl_bookings where user_id='".$_SESSION['user']."'");
                if(mysqli_num_rows($bk))
                {
                    ?>
                    <table>
                        <thead>
                            <th>Booking Id</th>
                            <th>Movie</th>
                            <th>Screen</th>
                            <th>Show</th>
                            <th>Seats</th>
                            <th>Amount</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                            while($bkg=mysqli_fetch_array($bk))
                            {
                                $m=mysqli_query($con,"select * from tbl_movie where movie_id=(select movie_id from tbl_shows where s_id='".$bkg['show_id']."')");
                                $mov=mysqli_fetch_array($m);
                                $s=mysqli_query($con,"select * from tbl_screens where screen_id='".$bkg['screen_id']."'");
                                $srn=mysqli_fetch_array($s);
                                $st=mysqli_query($con,"select * from tbl_show_time where st_id=(select st_id from tbl_shows where s_id='".$bkg['show_id']."')");
                                $stm=mysqli_fetch_array($st);
                                ?>
                                <tr>
                                    <td><?php echo $bkg['ticket_id'];?></td>
                                    <td><?php echo $mov['movie_name'];?></td>
                                    <td><?php echo $srn['screen_name'];?></td>
                                    <td><?php echo $stm['name'];?></td>
                                    <td><?php echo $bkg['no_seats'];?></td>
                                    <td>Rs. <?php echo $bkg['amount'];?></td>
                                    <td>
                                        <?php if($bkg['ticket_date']<date('Y-m-d'))
                                        {
                                            echo '<i class="glyphicon glyphicon-ok"></i>';
                                        }
                                        else
                                        {?>
                                            <a href="cancel.php?id=<?php echo $bkg['book_id'];?>">Cancel</a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                }
                else
                {
                    ?>
					<div class="profile-msg">
					<h3 style="color:#fff;">No Previous Bookings Found!</h3>
                    <p>Once you start booking movie tickets with this account, you'll be able to see all the booking history.</p>
					</div>
                    <?php
                }
                ?>
            </div>          
            <?php include('movie_sidebar.php');?>
        </div>
</div>
<?php include('footer.php');?>
</body>
</html>
