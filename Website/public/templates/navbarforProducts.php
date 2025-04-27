<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="css\navbar.css">
    <script src='../private/functions.js'></script>
    <script src="https://kit.fontawesome.com/85df64fd4d.js" crossorigin="anonymous"></script>
</head>
fas fa-store
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="../images/logo_whitebackground.png" alt="GreenSwap Logo">
        </div>
        <ul class="nav-links">
            <li><a href="../index.php" class="active"><i class="fas fa-home"></i> Home</a></li>
            <li class="dropdown">
                <a href="#"><i class="fas fa-list"></i> Market <i class="fa-solid fa-caret-down"></i></a>
                <div class="Listings-Dropdown">
                    <a href="../Marketplace.php">All Listings</a>
                    <a href="Plants.php">Plants</a>
                    <a href="Toys.php">Toys</a>
                    <a href="Indoor_Furniture.php">Indoor Furniture </a>
                    <a href="Outdoor_Furniture.php">Outdoor Furniture</a>
                    <a href="Clothing.php">Clothing</a>
                    <a href="Books.php">Books</a>
                    <A href="Cars.php">Cars</A>
                </div>
            <li><a href="../sustainability.php"><i class="fas fa-recycle"></i> Sustainability</a></li>
            <li class="dropdown">
                <a href="#"><i class="fas fa-list"></i> Listing <i class="fa-solid fa-caret-down"></i></a>
                <div class="Listings-Dropdown">
                    <a href="#">List New Product</a>
                    <a href="#">Edit Existing Product</a>
                    <a href="#">Delete Existing Product</a>
                </div>
            </li>
        </ul>


        <!-- Searchbar - Take all product names and allow the user to search -->
        <div class="search-bar">
            <input type="text" placeholder="Search items or categories">
            <button><i class="fas fa-search"></i></button>
        </div>

        
        <?php if (isset($_SESSION['Active']) && $_SESSION['Active'] === false) {
            echo '<div class="nav-buttons">';
            echo '<button class="join"><a href="signup.html">Get Started</a></button>';
            echo '<button class="login"><a href="login.html">Login</a></button>';
            echo '</div>';
        } elseif (isset($_SESSION['Active']) && $_SESSION['Active'] === true) {
            echo '<h2>Welcome, ' . htmlspecialchars($_SESSION['username']) . '!</h2>';
        } else {
            echo '<div class="nav-buttons">';
            echo '<button class="join"><a href="signup.html">Get Started</a></button>';
            echo '<button class="login"><a href="login.html">Login</a></button>';
            echo '</div>';
        }
        ?>
    </nav>
</body>

</html>