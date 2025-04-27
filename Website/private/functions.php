<?php

/**
 * Takes an SQL quary and executes in the SQL database searches by Category Name so can be reused for each category of products.
 * This function is used on the Listings page and limits the amount of listings selected to 12 this is hardcoded is for easy changes due to
 * each member of the team using a different sized monitor and can be changed to suit their size monitor.
 * @param mixed $categoryName
 * @return void
 */
function getItems($categoryName)
{
    include __DIR__ . '/../private/database_connection.php';
    include_once 'objects/Listings.php';

    try {
        $conn = new PDO($dsn, $username, $password, $options);
        $sql = "SELECT product_id,product_name, product_desc, price, product_image_link FROM products WHERE product_category = ? LIMIT 12;";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $categoryName, PDO::PARAM_STR);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $Listing = [];

        foreach($rows as $row){
            $Listing[] = new Listing(
                $row['product_id'],
                $row['product_name'],
                $row['product_desc'],
                $row['price'],
                $row['product_image_link']);
        }

        foreach ($Listing as $row) {
            echo ' 
                    <div class="image-box">
                        <img src=" images\productimages' . htmlspecialchars($row->getImagePath()) . '" width="290" height="240" alt="' . htmlspecialchars($row->getListingTitle()) . '">
                        <h3>' . htmlspecialchars($row->getListingTitle()) . '</h3> 
                        <p>' . htmlspecialchars($row->getListingDesc()). '</p>
                        <div class="buy">
                            <div class="price"><h3>€' . number_format($row->getListingPrice(), 2) . '</h3></div>
                            <div class="buy-button"><a href = "itemListing.php?id=' . htmlspecialchars($row->getProductID()) . '"><button><h3>Buy</h3></button></a></div>
                        </div>  
                    </div>';
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}
?>
<?php
/**
 * Searches the DB howitworks table and takes the three rows in that table and displays them to the index page under the How It Works section
 * @return void
 */
function getHowitWorks()
{
    include __DIR__ . '/../private/database_connection.php';
    include 'objects/HowitWorks.php';

    try {
        $conn = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT photo_link, item_name, item_desc FROM howitworks LIMIT 3";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $howItWorks = [];

        foreach($rows as $row){
            $howItWorks[] = new HowitWorks(
                $row['item_name'],
                $row['item_desc'],
                $row['photo_link']
            );
        }


        foreach ($howItWorks as $row) {
            echo '<div class="works">
            <img src="' . htmlspecialchars($row->getItemImagePath()) . '" width="120" height="120" alt="' . htmlspecialchars($row->getItemName()) . '">
            <h4>' . htmlspecialchars($row->getItemName()) . '</h4>
            <p>' . htmlspecialchars($row->getItemDesc()) . '</p>
        </div>';
        }

    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}
?>
<?php
/**
 * SQL quary to get all of the listings where the product category matches the paramater set.
 * Used for indivugal listing pages to list all products for that category. 
 * @param mixed $categoryName
 * @return void
 */
function getAllItems($categoryName)
{
    include __DIR__ . '/../private/database_connection.php';
    include_once 'objects/Listings.php';

    try {
        $conn = new PDO($dsn, $username, $password, $options);
        $sql = "SELECT product_id,product_name, product_desc, price, product_image_link FROM products WHERE product_category = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $categoryName, PDO::PARAM_STR);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $Listing = [];

        foreach($rows as $row){
            $Listing[] = new Listing(
                $row['product_id'],
                $row['product_name'],
                $row['product_desc'],
                $row['price'],
                $row['product_image_link']);
        }

        foreach ($Listing as $row) {
            echo ' 
                    <div class="image-box">
                        <img src=" ..\images\productimages' . htmlspecialchars($row->getImagePath()) . '" width="290" height="240" alt="' . htmlspecialchars($row->getListingTitle()) . '">
                        <h3>' . htmlspecialchars($row->getListingTitle()) . '</h3> 
                        <p>' . htmlspecialchars($row->getListingDesc()). '</p>
                        <div class="buy">
                            <div class="price"><h3>€' . number_format($row->getListingPrice(), 2) . '</h3></div>
                            <div class="buy-button"><a href = "itemListing.php?id=' . htmlspecialchars($row->getProductID()) . '"><button><h3>Buy</h3></button></a></div>
                        </div>  
                    </div>';
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}

/**
 * Takes information from the ProductID tag stored within the URL to find the product and fill the information to the page.
 * Used for the itemListing.php page.
 * @param mixed $productID
 * @return void
 */
function fillInformation($productID)
{
    include __DIR__ . '/../private/database_connection.php';
    include 'objects/Listings.php';

    try {
        $conn = new PDO($dsn, $username, $password, $options);
        $sql = "SELECT product_id, product_name, product_desc, price, product_image_link, product_category, is_swapable, delivery_method, product_condition, product_stock FROM products WHERE product_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $productID, PDO::PARAM_STR);
        $stmt->execute();

        $product = $stmt->fetchAll(PDO::FETCH_ASSOC);

    

        foreach ($product as $row) {
            echo '<div class = "left-content">
            <img id="imagebox" src=" images\productimages' . $row["product_image_link"] . '" width="290" height="240" alt="' . $row["product_name"] . '">
            <br>
            <br>
        </div>


        <div class="right-content"> 
            <div class="text">
                <h2>' . $row["product_name"] . '</h2>

                <p>€' . number_format($row["price"], 2) . '</p>

                <div class="desc">
                    <p> ' . $row["product_desc"] . '</p>
                </div>

                <div class= item-info>        
                    <table>
                        <tr>
                            <td>
                                <i class="fa-solid fa-layer-group"></i>
                            </td>
                            <td> Category </td>
                            <td>' . $row['product_category'] . ' </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-solid fa-location-dot"></i>
                            </td>
                            <td> Location </td> 
                            <td>'; if($row['user_location'] == null){
                                echo 'No Location Provided';
                            } else {
                                echo $row['user_location'];
                            }
                            echo '
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-solid fa-ranking-star"></i>
                            </td>
                            <td> Item Condition </td> 
                            <td>'; if($row['product_condition'] == null){
                                echo 'No Condition Provided';
                            } else {
                                echo $row['product_condition'];
                            }
                            echo '</td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-solid fa-truck"></i>
                            </td>
                            <td> Delivery Method </td>
                            <td>' . $row['delivery_method'] . ' </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                            </td>
                            <td> Item Swap </td>
                            <td>';
            if ($row['is_swapable'] == true) {
                echo 'Item Swap Available';
            } else {
                echo 'Item Swap Not Available';
            }
            echo '</td>
                    </tr>
                    <tr>
                            <td> 
                                <i class="fa-solid fa-user"></i>
                            </td>
                            <td> Posted By </td>
                    </tr>
                    <tr>
                            <td>
                                <i class="fa-solid fa-boxes-stacked"></i>
                            </td>
                            <td> Stock Avaliable </td>
                            <td>' . $row['product_stock'] . ' </td>
                        </tr>
                </table>
            </div>

        <div>   
            <p class="buy"><strong>ADD TO CART</strong></p>
        </div>
    </div>';
        }
    }
        catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}

/**
 * Used to check if the column is_featured True (1) or False (0) if true echo information to the page 
 * @return void
 */
function getFeaturedItems()
{

    include __DIR__ . '/../private/database_connection.php';
    include 'objects/Listings.php';

    try {
        $conn = new PDO($dsn, $username, $password, $options);
        $sql = "SELECT product_id,product_name, product_desc, price, product_image_link, is_featured FROM products WHERE is_featured = 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $Listing = [];

        foreach($rows as $row){

        }

        foreach ($Listing as $row) {
            echo '<div class="image-box">
                            <img src=" images\productimages' . $row["product_image_link"] . '" width="290" height="240" alt="' . $row["product_name"] . '">
                            <h3>' . $row["product_name"] . '</h3> 
                            <p>' . $row["product_desc"] . '</p>
                            <div class="buy">
                                <div class="price"><h3>€' . number_format($row["price"], 2) . '</h3></div>
                                <div class="buy-button">
                                    <a href="..\itemListing.php?id=' . $row["product_id"] . '">
                                        <button><h3>Buy</h3></button>
                                    </a>
                                </div>
                            </div>
                        </div>';
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
};


function getProductsforSearchbar()
{
    include __DIR__ . '/../private/database_connection.php';
    $sql = 'SELECT product_name, product_id FROM products';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<li class="product"><a href="..\itemListing.php?id=' . $row["product_id"] . '"></a>' . $row["Product_name"] . "</li>";
        }
    }
    ;
}

?>