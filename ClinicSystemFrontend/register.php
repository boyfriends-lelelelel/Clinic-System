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

session_start();
include 'connect.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    $sql = "SELECT * FROM users WHERE email='$email' AND passwordHash='$password' AND role='$role'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];

        if ($role === 'doctor') {
            header("Location: dashdoctor.php");
        } elseif ($role === 'staff') {
            header("Location: dashstaff.php");
        } elseif ($role === 'patient') {
            header("Location: dashpatient.php");
        }
        exit();
    } else {
        echo "<script>alert('Invalid email, password, or role.'); window.location.href='login.php';</script>";
        exit();
    }
}

?>