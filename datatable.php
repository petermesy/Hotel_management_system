<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'databas';



$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die('Could not connect to MySQL server: ' . mysqli_error());
}
else
{ 

$sql='SELECT id, name,email,address,phone,cus_comment FROM comment';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    /* echo'<ul>'; */
    echo '<table border="1">';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Name</th>';
    echo '<th>Email</th>';
    echo '<th>Address</th>';
    echo '<th>Phone</th>';
    echo '<th>Comment</th>';
    echo '</tr>';
    while($row=mysqli_fetch_assoc($result)){
        /* echo'<li> id:'.$row['id'].',name:'.$row['name'].',email:'.$row['email'].',phone:'
        .$row['phone'].',address:'.$row['address'].'cus_comment:'.$row['cus_comment'].'<li>'; */
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
}
else
 {echo 'No records found.';
}
mysqli_close($conn);
}
?>
