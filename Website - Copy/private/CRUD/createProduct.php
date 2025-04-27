<?php require __DIR__ . '../../../public/templates/navbar.php'; ?>

<html>
    <head>
        <link rel='stylesheet' type='text/css' media='screen' href='css/navbar.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/footer.css'>
        <link rel="icon" type="image" href="images/favicon.ico">
    </head>
</html>
<h2>Create a new Product</h2>
<form method="POST">
    <label for="productName">Product Name:</label>
    <input type="text" name="productName" id="productName" required>
    <br>
    <br>
    
    <label for="productPrice">Product Price: </label>
    <input type="text" name="productPrice" id="productPrice" required>
    <br>
    <br>

    <label for="productDesc">Product Description: </label>
    <input type="text" name="productDesc" id="productDesc" required>
    <br>
    <br>
    
    <label for="productImages">Product Image</label>
    <input type="file" name="productImages" id="productImages" required>

    <br>
    <br>
    
    <label for="productCategory">Category</label>
    <select for="productCategory" name="productCategory">
        <option value="Books"> Books </option>
        <option value="Toys"> Toys </option>
        <option value="Clothing"> Clothing </option>
        <option value="Plants"> Plants </option>
        <option value="Indoor_Furniture"> Indoor Furniture </option>
        <option value="Outdoor_Furniture"> Outdoor Furniture </option>
   </select>
    <br>
    <br>
    
    <label for="location">Location</label>
    <input type="text" name="location" id="location">

    <br>
   <br>

    <label for="deliveryMethod"> Delivery Method</label>
    <select for="deliveryMethod" name="deliveryMethod">
        <option value="Home_Dropoff"> Home Dropoff </option>
        <option value="Collection"> Collection </option>
        <option value="Post"> Post </option>
   </select>

   <br>
   <br>
    
    <input type="submit" name="submit" value="Submit">
</form>
<br>
<br>

<a href="../../public/index.php">Back to home</a>

<?php require __DIR__ . '../../../public/templates/footer.php'; ?>
