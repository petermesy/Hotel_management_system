<?php 
$hostname ='localhost';
$username = "root";
$password = "";
$db_name = "databas";

if(isset ($_POST['submit']))
{
    $conn =  mysqli_connect($hostname,$username,$password,$db_name);
    if(!$conn){
        die("Database connection failed!");

    }
    else{

        
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $numberRoom = $_POST['numberRoom'];
    $roomType = $_POST['roomType'];
    $date=$_POST['datein'];
    $date2=$_POST['dateout'];
    
    $query = "INSERT INTO booking (Full_name, email, phone, city,num ,roomType,
     numberRoom, datein, dateout) VALUES ('$name', '$email', '$phone',
    '$address', '$number','$roomType', '$numberRoom', '$date','$date2')";
    if (mysqli_query($conn, $query)) {
        mysqli_close($conn);

        ?>
 <h1 style="color: green; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px; text-align:center">
        <?php echo "Your message has been submitted successfully!";?>
    </h1>
        <a href="index.html" style=" width: 100%; text-align: center; margin-left: 47%;">Back to home</a> <?php
        exit();
    } else {
        ?><h1 style="color: red; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 
             20px; text-align:center"> <?php echo "unknown error occured!";?></h1> <?php
    }

            
    }
    }





?>






$FIrst_name = $_POST['FIrstName'];
        $Last_name = $_POST['LastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $subject = $_POST['subject'];
        $degree_level = $_POST['degreeLevel'];
    
    
        $query = "INSERT INTO instructor (FIrst_name, Last_name, email, phone,
        address,degree_level) VALUES ('$FIrst_name','$Last_name', '$email', 
       '$phone','$address','$subject','$degree_level')";
       if (mysqli_query($conn, $query)) {