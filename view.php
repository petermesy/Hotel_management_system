<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databas";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to select data
$sql = "SELECT id, name,phone, address,email, comment, FROM comment";
/* $result = $conn->query($sql); */
$result = mysqli_query($conn, $sql);

/* if ($result->num_rows > 0)  */
if (mysqli_num_rows($result) > 0){
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th></tr>";
    // Output data of each row
    
  /*   while ($row = $result->fetch_assoc()) */ 
  while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["name"] . " " . $row["email"] . "</td></tr>";
        echo "<tr>
        <td>" . $row["address"] ."</td>
        <td>" . $row["comment"] ."</td>
        <td>" . $row["phone"] ."</td>
            </tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
