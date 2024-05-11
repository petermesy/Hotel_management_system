<?php
$hostname ='localhost';
$username = "root";
$password = "";
$db_name = "databas";

    $conn =  mysqli_connect($hostname,$username,$password,$db_name);
    
    if (!$conn) {
        die('Could not connect to MySQL server: ');
    }
    else {
        $sql="DELETE FROM comment WHERE id=10";
        if(mysqli_query($conn,$sql)){
    
        echo "Record deleted successfully";
         }else {
            echo "Error deleting record: " . mysqli_error($conn);
      
         }
         mysqli_close($conn);
 
}
    
    ?>