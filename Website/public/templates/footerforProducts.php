<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/footer.css" />
    <script src="https://kit.fontawesome.com/85df64fd4d.js" crossorigin="anonymous"></script>
    <title>Footer</title>
</head>

<body>
    <footer>
        <?php include __DIR__ . '../../../private/database_connection.php'; ?>

        <div class="flex-container">
            <div class="flex1">
                <div class="footer_logo">
                    <img src="../images/greenswapbanner.png" alt="GreenSwap Logo" />
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="flex2">
                <div class="Company_Links">
                    <br>
                    <p class="bold_text">Company</p>
                    <p class="link"><a href="#">About Us</a></p>
                    <p class="link"><a href="#">Contact</a></p>
                    <p class="link"><a href="#">Blog</a></p>
                    <p class="link"><a href="../../public/Listings.php">Listings</a></p>
                </div>
            </div>


            <div class="flex3">
                <div class="Customer_Links">
                    <br>
                    <p class="bold_text">Customer</p>
                    <p class="link"><a href="#">Terms & Conditions</a></p>
                    <p class="link"><a href="#">Privacy Policy</a></p>
                    <p class="link"><a href="#">General FAQs</a></p>
                </div>
            </div>
            <div class="Newsletter">
                <form action="" method="POST">
                    <input type="email" name="email" placeholder="Enter Your Email" required />
                    <br>
                    <button type="submit"><i class="fa-solid fa-envelope"></i> Subscribe to our Mailing List</button>
                </form>
            </div>


        </div>

        <div class="SocialLinks">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-solid fa-x"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a></i>

        </div>

        </div>


        </div>
        <br>
        <hr>
        <br>

        <div class="flex-container2">
            <p>&copy 2025 Copyright Reserved</p>
            <p> Created by Jake, King and Brevin</p>
        </div>
    </footer>
</body>

</html>