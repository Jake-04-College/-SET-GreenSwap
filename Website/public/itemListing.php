<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Listings</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image" href="./images/favicon.ico">
    <link rel='stylesheet' type='text/css' media='screen' href='css/itemListing.css'>
    <script src="https://kit.fontawesome.com/85df64fd4d.js" crossorigin="anonymous"></script>
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
         <br>
         <?php 
if (isset($_GET['id'])) {
    $productID = $_GET['id'];
    fillInformation($productID);
}
else {
    $productID = 3; // Default to product ID 3
    fillInformation($productID);
}
?>
    

    <br>
         <br>
         <br>
         <br>
         <br>
         <br> 
</body>

<?php require __DIR__ . '/../public/templates/footer.php'; ?>
</html>