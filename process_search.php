<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Oswald:500');
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
            padding: 0px;
        }

        body {
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #121212;
        }

        .content-top {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 0 auto;
            max-width: 1200px;
            padding: 20px;
        }

        h2 {
            font-family: 'Oswald', sans-serif;
            letter-spacing: 3px;
            text-align: center;
            color: #e91e63;
            margin-top: -49px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        h4 {
            line-height: 30px;
            font-weight: lighter;
        }

        /* Define styles for the movie content */
        .movie-content {
            width: 100%;
            text-align: left;
            margin: auto;
        }

        .movie-wrap {
            margin-top: 100px;
        }

        .movie-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 0 auto;
            max-width: 1200px; /* Adjust this value based on your layout */
            padding: 20px;
        }

        .col_1_of_4 {
            display: flex;
            align-items: center;
            margin-top: 50px;
            width: 23%;
            flex-basis: calc(25% - 20px); /* 25% minus margin space */
            padding: 10px;
            margin-bottom: 5px;
        }

        .image-box {
            position: relative;
            width: 258px;
            height: 382px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .image {
            background-size: cover;
            background-position: center;
            position: relative;
            width: 100%;
            height: 100%;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .image-box:hover .overlay {
            opacity: 1;
        }

        .buy-tickets {
            background-color: #e91e63;
            color: #fff;
            text-align: center;
            padding: 8px 12px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .buy-tickets:hover {
            background-color: #c2185b;
        }

        .movie-text {
            text-align: center;
            margin-top: 10px;
            color: rgb(0, 0, 0);
        }

        .h-text a {
            font-size: 20px;
            text-decoration: none;
            color: #fff;
            text-transform: uppercase;
        }

        p {
            color: #fff;
        }

        .color2 {
            text-decoration: none;
            color: #888;
        }
    </style>
</head>
<body>
<?php include('header.php');
extract($_POST);
?>
</div>
<div class="content">
    <div class="wrap">
        <div class="content-top">
            <?php
            $today = date("Y-m-d");
            $qry2 = mysqli_query($con, "select DISTINCT movie_name, movie_id, image, cast from tbl_movie where movie_name = '" . $search . "'");
            
            // Check if any movies were found
            if (mysqli_num_rows($qry2) == 0) {
                echo '<p>Movie not found</p>';
            } else {
                while ($m = mysqli_fetch_array($qry2)) {
                    ?>
                    <div class="col_1_of_4 sr sr-bottom">
                    <div class="imageRow">
                    <div class="image-box sr sr-bottom">
                                    <a href="about.php?id=<?php echo $m['movie_id']; ?>">
                                        <div class="image sr sr-bottom" style="background-image: url('<?php echo $m['image']; ?>');">
                                            <div class="overlay sr sr-bottom">
                                                <div class="buy-tickets sr sr-bottom">Buy Tickets</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <div class="movie-text">
                                <h4 class="h-text sr sr-bottom"><a href="about.php?id=<?php echo $m['movie_id'];?>" style="text-decoration:none;"><?php echo $m['movie_name'];?></a></h4>
                                <p>Cast: <Span class="color2 sr sr-bottom" style="text-decoration:none;"><?php echo $m['cast'];?></span><br></p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <?php include('movie_sidebar.php');?>
    <?php include('footer.php');?>
</div>
</body>
</html>
