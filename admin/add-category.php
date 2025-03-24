<?php
require "connection_db.php";
?>
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $categoryName = $_POST['catName'];
        $sql="INSERT INTO menucategory (Cat_Name) VALUES (?)";
        $stmt= $conn->prepare($sql);
        $stmt->bind_Param("s", $categoryName);
        if( $stmt->execute() ){
            echo json_encode(["status" => "success", "message" => "Categoria a fost adăugată!"]);
        }
        else{
            echo json_encode(["status" => "error", "message" => "A apărut o eroare la adăugarea categoriei."]);
        }
    
    }
?>