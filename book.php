<?php 

$hostname = 'localhost';
$username = 'root';
$password = "";
$db_name = "databas";

if (isset($_POST['submit']))
{
    $conn = mysqli_connect($hostname,$username,$password,$db_name);
    if(!$conn){
        die("Connection failed");
    }
    else{

    $name = $_POST['yourName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $cus_comment = $_POST['comment'];

    $query = "INSERT INTO comment (name, email, phone, address, cus_comment) VALUES ('$name', '$email', 
    '$phone','$address', '$cus_comment')";
    if (mysqli_query($conn, $query)) {
        mysqli_close($conn);
         
        ?>
        <script>
            function myfunction(){
             document.getElementById("submit").innerHtml="Your message has been submitted successfully!";
            }
        </script>
        <h1 style="color: green; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman',
         serif; font-size: 20px; text-align:center">
          <?php echo "Your message has been submitted successfully!";?>
        </h1>
        <a href="index.html" style=" width: 100%; text-align: center; margin-left: 47%;">Back to home</a> <?php
        exit();
    } else {
        ?><h1 style="color: red; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px; text-align:center"> <?php echo "unknown error occured!";?></h1> <?php
    }

            
    }

    

}


?>