<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

       if(isset ($_POST['update']))
        {
            $id=$_POST['id'];
            $newName=$_POST['new_name'];
            $newEmail=$_POST['new_email'];
            $newPhone=$_POST['new_phone'];
            $newAddress=$_POST['new_address'];
  
            
            
            $sql= "UPDATE comment SET name='$newName' WHERE id=$id";
            if(mysqli_query($conn,$sql)){
                echo "Record update successfully!";
            }else{
                echo "Error updating record: " . mysqli_error($conn);
            }


            $sql= "UPDATE comment SET phone='$newPhone' WHERE id=$id";
            if(mysqli_query($conn,$sql)){
                echo "Record update successfully!";
            }else{
                echo "Error updating record: " . mysqli_error($conn);
            }


            $sql= "UPDATE comment SET  address='$newAddress' WHERE id=$id";
            if(mysqli_query($conn,$sql)){
                echo "Record update successfully!";
            }else{
                echo "Error updating record: " . mysqli_error($conn);
            }


            $sql= "UPDATE comment SET email=' $newEmail' WHERE id=$id";
            if(mysqli_query($conn,$sql)){
                echo "Record update successfully!";
            }else{
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }
    
    ?>
 <h1>Update Records</h1>
    <form method="POST">
        <label for="id">Record ID:</label>
        <input type="number" name="id" required>
        <br><br>
        <label for="new_name">New Name:</label>
        <input type="text" name="new_name" >
        <br>
        <br>
        <label for="new_name">New Email:</label>
        <input type="text" name="new_email" >
        <br>
        <br>
        <label for="new_name">New Phone:</label>
        <input type="text" name="new_phone" >
        <br>
        <br>
        <label for="new_name">New Address:</label>
        <input type="text" name="new_address" >
        <br>
       
        <input type="submit" value="Update" name="update">
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

</body>
</html>