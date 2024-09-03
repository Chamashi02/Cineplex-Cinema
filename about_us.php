<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Movies | About</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="css/about.css">
    <style>
        .span_3_of_22 {
            text-align: center;
            line-height: 40px;
			position: relative;
			margin-top: 0px;
			width: 90%;
			flex-basis: calc(50% - 20px);
			margin-bottom: 5px;
			margin-left: 40px;
        }
	</style>
</head>
<body>
	<?php include('header.php');
	?>
	<div class="content">
		<div class="wrap">
			<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">
						<div class="about-top">
							<div class="grid images_3_of_2" data-sr>
								<img src="images/Hall.jpg" alt="Theatre Poster" width='400' height='350' alt="" />
							</div>
							<div class="desc span_3_of_2" data-sr>
								<h2 class="text-center movie-title">About Us</h2>
								<p class="p-link" style="font-size: large;">At Cineplex, we are more than just a movie theater – 
                                    we are a gateway to unforgettable cinematic experiences. Our journey 
                                    began with a simple dream: to create a space where the magic of movies 
                                    comes to life. Over the years, we have evolved into a cinematic haven 
                                    for movie enthusiasts of all ages.</p>
							</div>
						</div>
                        <div class="show-table span_3_of_22" data-sr>
                        <h3 style="color: #444; font-size: 23px; color: #e91e63; margin-top:70px; margin-bottom: 40px" class="text-center" data-sr>Our Vision</h3>
							<p class="p-link" style="font-size: large;text-transform:none" class="text-center" data-sr>We envision a world where stories leap from the pages of scripts onto the 
                                silver screen, captivating hearts and minds. Our commitment is to offer the most immersive and thrilling 
                                cinematic journeys for our audience. We believe that movies have the power to inspire, entertain, and 
                                connect us all. Our vision is to be the go-to destination where families, friends, and individuals come 
                                to celebrate the art of storytelling. At Cineplex, our vision is to provide the ultimate cinematic 
                                experience to our audience. We believe that movies have the power to transport people to new worlds, 
                                evoke deep emotions, and create lasting memories. Our goal is to be a place where people can come 
                                together to enjoy the magic of the big screen.</p>
                        </div>
                        <div class="show-table span_3_of_22" data-sr>
                        <h3 style="color: #444; font-size: 23px; color: #e91e63; margin-top:70px; margin-bottom: 40px" class="text-center" data-sr>Our Mission</h3>
							<p class="p-link" style="font-size: large;text-transform:none" class="text-center" data-sr>Our mission is to 
                            provide the ultimate movie-watching experience. We strive to showcase a diverse range of films, from the latest 
                            Hollywood blockbusters to thought-provoking independent features. Each visit to Cineplex is an opportunity to
                             embark on a new adventure, whether it's a heartwarming family movie night, a thrilling action-packed evening, or 
                             a journey into the realms of fantasy.</p>
                        </div>
                        <div class="show-table location-map" data-sr>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3295.2859146925475!2d79.85193445732529!3d6.904064574118024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk" style="margin-top: 100px;" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>
