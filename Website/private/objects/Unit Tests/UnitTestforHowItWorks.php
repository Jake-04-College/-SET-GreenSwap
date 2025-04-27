<?php
require '../HowitWorks.php';

class UnitTestforHowItWorks
{

    public HowitWorks $listing;


    public function __construct()
    {
        $this->listing = new HowitWorks("Find What You Want To Buy", "Scroll around and what what you like", "test");
    }



    public function runTests()
    {
        echo "Title: " . $this->listing->getItemName() . "<br>";
        echo "Desc: " . $this->listing->getItemDesc() . "<br>";
        echo "Image: " . $this->listing->getItemImagePath() . "<br>";

    }
}

// Run the test
$test = new UnitTestforHowItWorks();
$test->runTests();