<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies_events</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Oswald:500');
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');



        body {
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #121212;
            font-family: 'Montserrat', sans-serif;
        }

        .content-top {
            text-align: left;
        }

        h2 {
            font-family: 'Oswald', sans-serif;
            letter-spacing: 3px;
            text-align: center;
            color: #e91e63;
            margin-top: 5%;
            margin-bottom: 15px;
            font-weight: bold;
        }

        h4 {
            line-height: 30px;
            font-weight: lighter;
        }

        /* Define styles for the movie content */
        .content {
            width: 100%;
            text-align: left;
            margin: auto;
        }

        .wrap {
            margin-top: 100px;
        }

        .m-wrap {
            margin-top: 5px;
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

        .search-block {
margin: 90px 65px 0px 71.2%;
}

.field {
    border: 1px #c2185b solid;
    border-radius: 7px;
}

.search-wrap input[type="text"] {
background-color: transparent;
border: none; /* Remove the border */
width: 300px;
height: 30px;
padding: 3px;
color: #fff;
}
.search-wrap input[type="submit"] {
background-color: #c2185b;
color: #fff;
height: 34px;
width: 60px;
padding-top: 3px;
border: none;
border-radius: 5px;
cursor: pointer;
margin-top: 1px;
}

.search-wrap input[type="submit"]:hover {
    transform: scale(1.05);
    transition: 0.1s ease-in-out;
}

.search-wrap input[type="submit"]:active {
    transform: scale(0.99);
}

    </style>
</head>
<body>
</div>
<div class="search-block">
    <div class="search-wrap">
        <form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">
            <div>
                <div class="field">
                    <input type="text" placeholder="Enter A Movie Name" style="height:30px;width:300px" required id="search111" name="search">
                    <input type="submit" value="Search" style="height:34px;padding-top:3px" id="button111">
                </div>
</div>
        </form>
        <div class="clear"></div>
    </div>
</div>

<script>
function myFunction() {
    if ($('#hero-demo').val() == "") {
        alert("Please enter a movie name...");
        return false;
    } else {
        return true;
    }
}
</script>
<div class="content">
    <div class="m-wrap">
        <div class="content-top">
            <h2 class="sr sr-bottom">NOW SHOWING</h2>

            <div class="movie-container">
                <?php
                $today = date("Y-m-d");
                $qry2 = mysqli_query($con, "select * from  tbl_movie ");

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
                                <h4 class="h-text sr sr-bottom"><a href="about.php?id=<?php echo $m['movie_id']; ?>" style="text-decoration: none;"><?php echo $m['movie_name']; ?></a></h4>
                                <p>Cast: <Span class="color2 sr sr-bottom" style="text-decoration: none;"><?php echo $m['cast']; ?></span><br></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</body>
</html>
