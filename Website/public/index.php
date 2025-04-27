<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>GreenSwap</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image" href="./images/favicon.ico">
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php require __DIR__ . '/../public/templates/navbar.php'; ?>
        <?php require __DIR__ . '/../private/functions.php'; ?>
    </header>

    <br>
    <br>
    <br>
    <br>

    <div class="image-container-header">
        <img src="images\Home_Image.jpg">
        <div class="Front_page_info">
            <h1>GreenSwap</h1>

            <h2> Swap, Save, Sustain, Together</h2>

            <p> Join the marketplace that turns pre-loved goods into new opportunities with reducing waste.</p>

            <div id="get-started-button">
                <button id="get-started-button"><a href="signup.html" id="get-started-button"> Get Started!
                    </a></button>
            </div>

            <div id="browse-listings-button">
                <button id="browse-listings-button"><a href="#" id="browse-listings-button"> Browse Listings
                    </a></button>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h1>How It Works</h1>
    <div class="how-it-works">
        <?php getHowitWorks() ?>
    </div>
    <br>
    <br>

    <h1><strong>Featured Listings</strong></h1>

    <div class="image-container">
        <?php getFeaturedItems() ?>
    </div>

    <br>
    <br>


    <?php require __DIR__ . '/../public/templates/footer.php'; ?>


</body>

</html>