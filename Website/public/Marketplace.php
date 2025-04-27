<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Item</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image" href="/../images/favicon.ico">
    <link rel='stylesheet' type='text/css' media='screen' href='css/marketplace.css'>
    <script src='../private/functions.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<>

    <header>
        <?php require __DIR__ . '/../public/templates/navbar.php'; ?>
        <?php require __DIR__ . '/../private/functions.php'; ?>
    </header>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2> Plants </h2>
    <div class="image-container">
        <?php getItems("Plant") ?>
    </div>

    <div class="view-more-button">
        <button onclick="redirect('productpages/Plants.php')">
            View More
        </button>
    </div>

    <br>
    <hr>
    <br>
    

    <h2> Toys </h2>
    <div class="image-container">
        <?php getItems("Toys") ?>
    </div>

    <div class="view-more-button">
        <button onclick="redirect('productpages/Toys.php')">
            View More
        </button>
    </div>

    <br>
    <hr>
    <br>

    <h2> Books </h2>
    <div class="image-container">
    <?php getItems("Book") ?>
    </div>

    <div class="view-more-button">
        <button onclick="redirect('productpages/Books.php')">
            View More
        </button>
    </div>

    <br>
    <hr>
    <br>

    <h2> Indoor Furniture </h2>
    <div class="image-container">
    <?php getItems("Indoor_Furniture") ?>
    </div>

    <div class="view-more-button">
        <button onclick="redirect('productpages/Indoor_Furniture.php')">
            View More
        </button>
    </div>

    <br>
    <hr>
    <br>

    <h2> Outdoor Furniture </h2>
    <div class="image-container">
    <?php getItems("Outdoor_Furniture") ?>
    </div>

    <div class="view-more-button">
        <button onclick="redirect('productpages/Outdoor_Furniture.php')">
            View More
        </button>
    </div>

    <?php require __DIR__ . '/../public/templates/footer.php'; ?>


    </body>

</html>