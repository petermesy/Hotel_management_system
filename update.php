<?php 
$hostname ='localhost';
$username = "root";
$password = "";
$db_name = "databas";


$conn =  mysqli_connect($hostname,$username,$password,$db_name);
    if(!$conn){
        die("Database connection failed!");

    }
    else{
       $sql ="UPDATE comment SET address='arbaminch' WHERE id=1  ";
       if($conn->query($sql)===true){
        echo "Record updated successfully";
       }else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
    }

?>