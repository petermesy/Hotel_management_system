<?php
$hostname ='localhost';
$username = "root";
$password = "";
$db_name = "databas";

$conn =  mysqli_connect($hostname,$username,$password,$db_name);
    if(!$conn){
        die("Database connection failed!");

        
    }else
    { echo "<h1>Book Records</h1>";
     ?>
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
    <button><a href="index.html">Back To Home</a></button>
    </body>
    </html>
     <?php

            // Display existing records
    $sql = 'SELECT id, Full_name, email, city, phone, roomType, numberRoom, num, datein, dateout  FROM booking';
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 1) {
        echo '<h2>Existing Records</h2>';
        echo '<table border="1">';
        echo '<tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Room Type</th>
              <th>Number Room</th>
              <th>Number of guests</th>
              <th>datein</th>
              <th>dateout</th>
              </tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['Full_name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['city'] . '</td>';
            echo '<td>' . $row['phone'] . '</td>';
            echo '<td>' . $row['roomType'] . '</td>';
            echo '<td>' . $row['numberRoom'] . '</td>';
            echo '<td>' . $row['num'] . '</td>';
            echo '<td>' . $row['datein'] . '</td>';
            echo '<td>' . $row['dateout'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No records found.';
    }

    mysqli_close($conn);

    }

 
    
    ?>

