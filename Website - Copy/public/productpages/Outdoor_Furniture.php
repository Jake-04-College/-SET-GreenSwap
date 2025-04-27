<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Outdoor Furniture Listings - Greenswap</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/marketplace.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/navbar.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/footer.css'>
    <script src='../main.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image" href="../images/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <?php require '../templates/navbarforProducts.php'; ?>
        <?php require '../../private/functions.php'; ?>
    </header>

    <br><br><br><br><br><br>

    <h2>Outdoor Furniture</h2>
    <div class="image-container">
        <?php getAllItems("Plant"); ?>
    </div>

    <br><br>

    <?php require '../templates/footerforProducts.php'; ?>

</body>

</html>
