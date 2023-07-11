

<?php
session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $con = new mysqli("localhost","root","","signup");
    if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    } else {
        $stmt = $con->prepare("select * from registration where email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0 ) {
            $data = $stmt_result->fetch_assoc();
            if(password_verify($password,$data['password'])) 
            {
                echo "<h3>login sucessfully</h3>";
                $_SESSION["email"]="$email";
                header("Location:../index.php");
            } else {
                echo "<script>
                alert('password or login incorrect');
                </script>";
            }
        } else {
                echo "<script>
                alert('password or login incorrect');
                </script>";
        }
    } 
?>

