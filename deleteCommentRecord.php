<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    button a{
        color: black;
        text-decoration: none;
        border: 1px;
        height: 2rem;
    }
    button{
        height: 3rem;
        width: 7rem;
    }
</style>
</head>
<body>
    <h1>Delete comment Record</h1>
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
        if(isset ($_POST['Delete'])){
            $id=$_POST['id'];
        $sql="DELETE FROM comment WHERE id='$id'";
        if(mysqli_query($conn,$sql)){
    
        echo "Record deleted successfully";
         }else {
            echo "Error deleting record: " . mysqli_error($conn);
      
         }
        /*  mysqli_close($conn); */
 
}
}
    ?>
    <form method="post">
        <label for="id">Enter Record id to be deleted</label>
        <input type="number" name="id" required><br><br>
        <input type="submit" name="Delete">
    </form>

<?php
    // Display existing records
    $sql = 'SELECT id, name, email, address, phone, cus_comment FROM comment';
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<h2>Existing Records</h2>';
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Name</th><th>Email</th><th>Address</th><th>Phone</th><th>Comment</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['address'] . '</td>';
            echo '<td>' . $row['phone'] . '</td>';
            echo '<td>' . $row['cus_comment'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No records found.';
    }

    mysqli_close($conn);
    ?>
     <br><br><button><a href="adminpage.html">Back </a></button>
</body>
</html>