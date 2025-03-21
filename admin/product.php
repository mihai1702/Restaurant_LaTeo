<?php
class Product{
    public $id;
    public $name;
    public $price;
    public $ingredients;
    public $quantity;
    public$imageURL;
    public $creationDate;
    public $Categ_id;
    public function __construct(){
        
    }
    public function get_product($conn, $id){
        $sql="SELECT * FROM menu WHERE ID=$id";
        if($sql)
        {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                return $result->fetch_assoc();
            }
        }
        return false;
    }
    public function addProduct($conn){ 
            $price = floatval($this->price);
            $category=intval($this->Categ_id);
            $sql = "INSERT INTO menu (Name, Price, Ingredients, Quantity, ImageURL, CreationDate, Categ_ID)
                    VALUES ('$this->name', '$price', '$this->ingredients', '$this->quantity', '$this->imageURL', '$this->creationDate', '$category')";

    $this->sqlExecute($conn, $sql);
    }
    public function editProduct($conn, $id){
        $price = floatval($this->price);

        $sql = "UPDATE menu 
        SET Name='$this->name', Price='$price', Ingredients='$this->ingredients', Quantity='$this->quantity', ImageURL='$this->imageURL', CreationDate='$this->creationDate', Categ_ID='$this->Categ_id' 
        WHERE ID='$id'";
        $this->sqlExecute($conn, $sql);
    }

    public function sqlExecute($conn, $sql){
        if (mysqli_query($conn, $sql)) {
            header("Location: products-administration.php");
            exit();

        } else {
            echo "Eroare: " . mysqli_error($conn);
        }
    }
}