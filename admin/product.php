<?php
class Product{
    public $id;
    public $name;
    public $price;
    public $ingredients;
    public $quantity;
    public$imageURL;
    public $creationDate;
    public function __construct(){
        
    }

    public function addProduct($conn){ 
            $name = mysqli_real_escape_string($conn, $this->name);
            $price = mysqli_real_escape_string($conn, $this->price);
            $ingredients = mysqli_real_escape_string($conn, $this->ingredients);
            $quantity = mysqli_real_escape_string($conn, $this->quantity);
            $imageURL = mysqli_real_escape_string($conn, $this->imageURL);
            $creationDate = mysqli_real_escape_string($conn, $this->creationDate);
    
            $price = floatval($price);
    
            $sql = "INSERT INTO menu (Name, Price, Ingredients, Quantity, ImageURL, CreationDate)
                    VALUES ('$name', '$price', '$ingredients', '$quantity', '$imageURL', '$creationDate')";
    
            if (mysqli_query($conn, $sql)) {
                header("Location: products-administration.php");
                exit();
    
            } else {
                echo "Eroare: " . mysqli_error($conn);
            }
    }
}
?>