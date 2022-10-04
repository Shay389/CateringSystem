<?php  
include_once '../scripts/db.php'; 
if (isset($_POST['Submit'])){

    $name = $_POST['name'];
    $code = $_POST['code'];
    $price = $_POST['price'];
    

   

    $sql = "INSERT INTO snacks (name, code, price) VALUES ('$name', '$code', '$price')";

    $query = mysqli_query($conn, $sql);

    if($query){
        echo 'Added ';
    }else{
        echo mysqli_error($conn);
    }


}
?>