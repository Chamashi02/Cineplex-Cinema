<?php
include('config.php');
session_start();
date_default_timezone_set('Asia/Colombo');
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Cineplex - header</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!--<link rel="stylesheet" href="css/header.css">-->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Oswald:500');
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

body {
    margin: 0;
    padding: 0;
    height: 100vh;
    overflow: auto;
}

.back {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 75px;
    background: url(images/Back.jpg) no-repeat top center #c1c1de;
    background-size: cover;
    z-index: -1;
}

.navbar {
    width: 100%;
    position: fixed;
    height: 75px;
    top: 0;
    background: rgba(53, 47, 68, 0.8);
    z-index: 1;
}

.navbar a {
    font-family: 'Oswald', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    text-decoration: none;
    color: #ffffff;
    margin: 0 15px;
    font-size: 16px;
    letter-spacing: 1px;
    top: 14px;
    position: relative;
    display: inline-block;
    transition: color 0.2s ease;
}

.navbar a:hover {
    color: #e91e63;
}

.main {
    position: relative;
    text-align: center;
    left: -6pc;
    margin-top: 8px;
}

.prof {
    margin-left: auto;
    text-align: end;
    margin-top: -23px;
    margin-right: 100px;
}

.logo {
    float: left;
    margin-top: -30px;
}

.logo img {
    width: 180px;
    height: auto;
}

.profile-icon {
    float: right;
    margin-top: -32px;
    margin-right: 50px;
    display: flex;
    align-items: center;
    margin-left: auto;
}

.profile-icon a {
    font-size: 1.7rem;
    color: #ffffff;
    text-decoration: none;
}

.profile-icon a:hover {
    transform: scale(1.05);
}

@keyframes in {
    0% {
        width: 0;
        left: 0;
        right: auto;
    }
    100% {
        left: 0;
        right: auto;
        width: 100%;
    }
}

@keyframes out {
    0% {
        width: 100%;
        left: auto;
        right: 0;
    }
    100% {
        width: 0;
        left: auto;
        right: 0;
    }
}

@keyframes show {
    0% {
        opacity: 0;
        transform: translateY(-10px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.logo a:nth-child(1) {
    animation: show 0.1s 0.5s ease 1 both;
}

.navbar a:nth-child(1) {
    animation: show 0.2s 0.5s ease 1 both;
}

.navbar a:nth-child(2) {
    animation: show 0.2s 0.6s ease 1 both;
}

.navbar a:nth-child(3) {
    animation: show 0.2s 0.7s ease 1 both;
}

.navbar a:nth-child(4) {
    animation: show 0.2s 0.8s ease 1 both;
}

.navbar a:nth-child(5) {
    animation: show 0.2s 0.9s ease 1 both;
}

.prof a:nth-child(1) {
    animation: show 0.2s 1.0s ease 1 both;
}

.prof a:nth-child(2) {
    animation: show 0.2s 1.1s ease 1 both;
}
    </style>
</head>
<body>
    <div class="back"></div>
    <nav class="navbar">
    <a class="logo" href="index.php">
    <img src="images/CINEPLEX LOGO (2).png" alt="CinePlex Logo">
</a>
        <div class="main">
        <a href="index.php">Home</a>
        <a href="movies_events.php">Movies</a>
        <a href="about_us.php">About</a>
        <a href="contactus.php">Contact</a>
        </div>
        <?php if(isset($_SESSION['user'])){
            $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
            $user=mysqli_fetch_array($us); ?>
            <div class="prof">
            <a href="profile.php"><?php echo $user['name'];?></a>
            <a href="logout.php">Logout</a>
            </div>
        <?php } else { ?>
            <div class="profile-icon">
                <a href="login.php"><i class='bx bx-user-circle'></i></a>
            </div>
        <?php } ?>
    </nav>
</body>
</html>
