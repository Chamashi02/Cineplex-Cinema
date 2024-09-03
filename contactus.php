<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/about.css">
    <style>
        .content {
            align-items: center;
            justify-content: center;
        }

        .form-container {
            max-width: 100%; 
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }


        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }


        input[type="text"],
        input[type="email"],
        textarea {
            height: 10%;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }


        button[type="submit"] {
            background-color: #e91e63;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }


        button[type="submit"]:hover {
            background-color: #ff3366;
        }


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

        .span {
            color: #e91e63;
        }

    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div class="content">
        <div class="wrap">
            <div class="content-top">
                <div class="section group">
                    <div class="about span_1_of_2">
                        <div class="about-top">
                            <div class="desc span_3_of_2" data-sr>
                                <h2 class="text-center movie-title">Contact Us</h2>
                                <div class="form-container">
                                    <form action="process_contact.php" method="post">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile">Mobile</label>
                                            <input type="text" id="mobile" name="mobile" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <textarea id="subject" name="subject" required></textarea>
                                        </div>

                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="desc span_3_of_2" style="text-align: center; margin-top: 15%" data-sr>
								<p class="p-link" style="font-size: large;"><span class="span">If you have any questions or inquiries, <br> please don't hesitate to contact us.</span> <br> <br>
                                <strong>Email:</strong> <a href="mailto:megacinema@gmail.com">cineplex@gmail.com</a> <br>
                                <strong>Telephone:</strong> +94 71-500-5236 <br>
                                <strong>Address:</strong> 123 Main St, Colombo, Sri Lanka</p>
							</div>
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
