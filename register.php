<?php 

include 'connect.php';

//signup
if (isset($_POST['create']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkEmail="SELECT * From users where Username='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0)
    {
        echo "Username Already Exists!";
    }
    else
    {
        $insertQuery="INSERT INTO users (Username, PasswordHash)
                        VALUES ('$email','$password')";
            if($conn->query($insertQuery)==TRUE)
            {
                header("Location: index.php");
            }
            else 
            {
                echo "Error: ".$conn->error;
            }
    }

}

//login
if (isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users WHERE Username='$email' and PasswordHash='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0) 
    {
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location: dashboard.php");
        exit();
    }

    else
    {
        echo "Not Found, Incorrect Email or Password";
    }
}
?>