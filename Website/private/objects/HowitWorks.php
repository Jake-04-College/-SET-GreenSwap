<?php

class HowitWorks
{
    private string $itemName;
    private string $itemDesc;
    private string $itemImagePath;

     public function __construct(string $itemName, string $itemDesc, string $itemImagePath) {
        $this->itemName = $itemName;
        $this->itemDesc = $itemDesc;
        $this->itemImagePath = $itemImagePath;

    }

    // Getters 
    public function getItemName(): string
    {
        return $this->itemName;
    }

    public function getItemDesc(): string
    {
        return $this->itemDesc;
    }

    public function getItemImagePath(): string
    {
        return $this->itemImagePath;
    }

    // Setters
    public function setItemName(string $itemName): void
    {
        $this->itemName = $itemName;
    }

    public function setItemDesc(string $itemDesc): void
    {
        $this->itemDesc = $itemDesc;
    }

    public function setItemImagePath(string $itemImagePath): void
    {
        $this->itemImagePath = $itemImagePath;
    }
}
?>
