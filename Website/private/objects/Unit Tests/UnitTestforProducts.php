<?php
require '../Listings.php';

class UnitTestforProducts
{

    public Listing $product;


    public function __construct()
    {
        $this->product = new Listing('1', "Plant Pot", "A Plant Pot", 2.99, "test");
    }



    public function runTests()
    {
        echo "Product ID: " . $this->product->getProductID() . "<br>";
        echo "Product Name: " . $this->product->getListingTitle() . "<br>";
        echo "Product Desc: " . $this->product->getListingDesc() . "<br>";
        echo "Product Price: " . $this->product->getListingPrice() . "<br>";
        echo "Product Image: " . $this->product->getImagePath() . "<br>";
    }
}

// Run the test
$test = new UnitTestforProducts();
$test->runTests();
