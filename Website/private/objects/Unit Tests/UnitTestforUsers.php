<?php
require '../User.php';

class UnitTestforUsers
{

    public $user;

    public function __construct()
    {
        $this->user = new User(1, "TestCase123", "Test", "Case", "10-03-2004", "testcase123@gmail.com", "test123");
        $this->user->setUserPassword("testcase123");
    }



    public function runTests()
    {
        echo "User ID: " . $this->user->getUserID() . "<br>";
        echo "Username: " . $this->user->getUserName() . "<br>";
        echo "User Firstname: " . $this->user->getUserFirstName() . "<br>";
        echo "User Lastname: " . $this->user->getUserLastName() . "<br>";
        echo "User Email Address: " . $this->user->getEmailAddress() . "<br>";
        echo "User Date of Birth: " . $this->user->getUserDateOfBirth() . "<br>";
        echo "User Hashed Password: " . $this->user->getUserPassword() . "<br>";
    }
}

// Run the test
$test = new UnitTestforUsers();
$test->runTests();
