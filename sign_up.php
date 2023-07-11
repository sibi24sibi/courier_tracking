<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    $conn = new mysqli('localhost','root','','signup');
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }else{
        $hashed_password = password_hash($password,PASSWORD_DEFAULT);
        $stmt = $conn->prepare("insert into registration(first_name,last_name,email,phone,password) value(?,?,?,?,?)");
        $stmt->bind_param("sssis",$first_name,$last_name,$email,$phone,$hashed_password);
        $stmt->execute();
        echo"<h2>Registration Successful</h2>";
        header("Location:../index.php");
        $stmt->close();
        $conn->close();
    }
    
    
?>