<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>SIGN UP</h1>
    <form method="post" enctype="multipart/form-data">
        username :   <input type="text" name="username" ><br><br>
        password :   <input type="password" name="password" ><br><br>
        confirm password : <input type="password" name="confirm password"><br><br>
        email : <input type="text" name="email"><br><br>
        phone : <input type="text" name="phone"><br><br>
        Upload Image : <input type ="file" name="image"/>
        <input type="submit" value="Sign Up" name="submit"/> 

        </form>
</body>
</html>

<?php
include("db.php");

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    

    
    if($password != $confirm_password)
    {
        echo "Password does not match.";
    }
    else
    {
        $image_name = $_FILES['image']['name'];
        $temp = $_FILES['image']['tmp_name'];

        move_uploaded_file($temp, "uploads/".$image_name);

        $sql = "INSERT INTO signup (username, password, email, phone, image)
        VALUES ('$username', '$password', '$email', '$phone', '$image_name')";

        if(mysqli_query($conn,$sql))
        {
            echo "Registration Successful";
        }
        else
        {
            echo "Error";
        }
    }
}
?>