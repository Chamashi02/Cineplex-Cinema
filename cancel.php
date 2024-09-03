<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Cancelled</title>

</head>
<body>
    <?php
    session_start();
    include('config.php');
    mysqli_query($con, "delete from tbl_bookings where book_id='" . $_GET['id'] . "'");
    $_SESSION['success'] = "Booking Cancelled Successfully";
    header('location:profile.php');
    ?>
    <div class="cancel-container">
        <h1>Booking Cancelled</h1>
        <p>Your booking has been cancelled successfully.</p>
    </div>
</body>
</html>
