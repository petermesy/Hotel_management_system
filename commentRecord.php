<?php
$hostname ='localhost';
$username = "root";
$password = "";
$db_name = "databas";

$conn =  mysqli_connect($hostname,$username,$password,$db_name);
    if(!$conn){
        die("Database connection failed!");

    }else
    {
   //display existing recordsDis
    $sql = 'SELECT id, name, email, address, phone, cus_comment FROM comment';
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<h2>Comment Records</h2>';
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

    mysqli_close($conn);}
    ?>

<html>
    <head>
        <title>back home</title>
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
    <br><br><button><a href="adminpage.html">Back </a></button>
    </body>
    </html>   