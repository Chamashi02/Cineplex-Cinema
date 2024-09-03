<!DOCTYPE html>
<html>
<head>
    <title>Mega Cinema-Index</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <style>
        /* Add your custom CSS styles here */
        .carousel-container {
            width: 100%;
            overflow: hidden;
            position: relative;
            margin-top: -101px;
        }

        .carousel-slider {
            display: flex;
            transition: transform 0.5s;
        }

        .carousel-slide {
            background-size: cover;
            position: relative;
            min-height: 100vh;
            width: 100%;
            display: flex;
            align-items: flex-end;
            justify-content: flex-start;
            flex-shrink: 0;
        }

        .carousel-slide img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }

        .carousel-info {
			margin-left: 53px;
			margin-bottom: 20px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 10px;
			line-height: 32px;
			border-radius: 7px;
        }

		strong {
			font-size: 24px;
			text-align: left;
			color: #e91e63;
			font-weight: bold;
		}

        .carousel-movie-container {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .carousel-movie {
            max-width: 90%;
            max-height: 90%;
        }

        /* Navigation buttons */
        .carousel-nav {
			height: 78%;
			width: 100%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
            display: flex;
        }

		.carousel-nav button:hover {
			opacity: 0.9;
			transform: scale(1.02);
			transition: 0.2s ease-in-out;
		}

		.carousel-nav button:active {
			transform: scale(0.99);
			transition: 0.2s ease-in-out;
		}

        .carousel-nav button {
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
			opacity: 0.0;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .b-next {
			position: relative;
			margin-left: 88.25rem;
        }
    </style>
</head>
<body>
<?php include('header.php'); ?>

<div class="content">
    <div class="wrap">
        <div class="content-top">
            <div class="listview_1_of_3 images_1_of_3">
                <div class="carousel-container">
                    <div class="carousel-nav">
                        <button id="prev"><i class='bx bx-chevron-left'></i></button>
                        <button class="b-next" id="next"><i class='bx bx-chevron-right'></i></button>
                    </div>
                    <div class="carousel-slider">
                        <?php
                        $qry3 = mysqli_query($con, "SELECT * FROM tbl_news LIMIT 10");
                        while ($n = mysqli_fetch_array($qry3)) {
                        ?>
                            <div class="carousel-slide" style="background-image: url('admin/<?php echo $n['attachment']; ?>');">
                                <div class="carousel-info">
                                    <strong><?php echo $n['name']; ?></strong><br>
                                    Cast: <?php echo $n['cast']; ?><br>
                                    Release Date: <?php echo $n['news_date']; ?><br>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('movie_sidebar.php'); ?>
<?php include('footer.php'); ?>
</div>

<script>
    // JavaScript for the carousel
    const carouselSlider = document.querySelector('.carousel-slider');
    const carouselSlides = document.querySelectorAll('.carousel-slide');
    let slideIndex = 0;

    function showSlides() {
        const slideWidth = carouselSlides[0].offsetWidth;
        const transformValue = `translateX(-${slideIndex * slideWidth}px)`;

        carouselSlider.style.transform = transformValue;
    }

    document.getElementById('prev').addEventListener('click', () => {
        slideIndex = (slideIndex - 1 + carouselSlides.length) % carouselSlides.length;
        showSlides();
    });

    document.getElementById('next').addEventListener('click', () => {
        slideIndex = (slideIndex + 1) % carouselSlides.length;
        showSlides();
    });

    // Initial slide
    showSlides();

    setInterval(() => {
        slideIndex = (slideIndex + 1) % carouselSlides.length;
        showSlides();
    }, 10000); // Change slide every 10 seconds
</script>
</body>
</html>
