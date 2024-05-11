<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
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
       
    
       
        if(isset ($_POST['Login']))
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $sql="SELECT * FROM login WHERE username='$username' AND password='$password'" ;

            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                header('Location:adminpage.html');
                exit();
            }else{
                echo 'Inavalid username and password';
            }
        }
      
    }

    
    ?>
    <h1>Login as Admin</h1>
    <form  method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login" name ="Login">
    </form> 
</body>
</html>
