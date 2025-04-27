<?php
class User {
    private int $userID;
    private string $userName;
    private string $userFirstName;
    private string $userLastName;
    private string $userDateOfBirth;
    private string $userPassword;
    private string $userEmailAddress;

    // Constructor
    public function __construct($userID, $userName, $userFirstName, $userLastName, $userDateOfBirth, $userEmailAddress, $userPassword) {
        $this->userID = $userID;
        $this->userName = $userName;
        $this->userEmailAddress = $userEmailAddress;
        $this->userFirstName = $userFirstName;
        $this->userLastName = $userLastName;
        $this->userDateOfBirth = $userDateOfBirth;
        $this->userPassword = $userPassword;
        
    }

    // Getters
    public function getUserID(): int {
        return $this->userID;
    }

    public function getUserName(): string {
        return $this->userName;
    }

    public function getEmailAddress(): string {
        return $this->userEmailAddress;
    }

    public function getUserFirstName(): string {
        return $this->userFirstName;
    }

    public function getUserLastName(): string {
        return $this->userLastName;
    }

    public function getUserDateOfBirth(): string {
        return $this->userDateOfBirth;
    }

    public function getUserPassword(): string {
        return $this->userPassword;
    }

    // Setters
    public function setUserID($userID) {
        $this->userID = $userID;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function setEmailAddress($userEmailAddress) {
        $this->userEmailAddress = $userEmailAddress;
    }

    public function setUserFirstName($userFirstName) {
        $this->userFirstName = $userFirstName;
    }

    public function setUserLastName($userLastName) {
        $this->userLastName = $userLastName;
    }

    public function setUserDateOfBirth($userDateOfBirth) {
        $this->userDateOfBirth = $userDateOfBirth;
    }

    public function setUserPassword($userPassword) {
        $this->userPassword = password_hash($userPassword, PASSWORD_BCRYPT);
    }
}
?>
