<?php
class Listing
{
    private string $productID;

    private string $listingTitle;
    private string $listingDesc;
    private float $listingPrice;
    private string $listingDate;
    private string $imagePath;

    public function __construct(string $productID, string $listingTitle, string $listingDesc, float $listingPrice, string $imagePath)
    {
        $this->productID = $productID;
        $this->listingTitle = $listingTitle;
        $this->listingDesc = $listingDesc;
        $this->listingPrice = $listingPrice;
        $this->imagePath = $imagePath;
    }

    // Getters

    public function getProductID(): string
    {
        return $this->productID;
    }
    public function getListingTitle(): string
    {
        return $this->listingTitle;
    }

    public function getListingDesc(): string
    {
        return $this->listingDesc;
    }

    public function getListingPrice(): float
    {
        return $this->listingPrice;
    }


    public function getListingDate(): string
    {
        return $this->listingDate;
    }

    public function getImagePath(): string
    {
        return $this->imagePath;
    }

    // Setters

    public function setProductID(string $productID): void
    {
        $this->productID = $productID;
    }
    public function setListingTitle(string $listingTitle): void
    {
        $this->listingTitle = $listingTitle;
    }

    public function setListingDesc(string $listingDesc): void
    {
        $this->listingDesc = $listingDesc;
    }

    public function setListingPrice(float $listingPrice): void
    {
        $this->listingPrice = $listingPrice;
    }


    public function setImagePath(string $imagePath): void
    {
        $this->imagePath = $imagePath;

    }

}
?>