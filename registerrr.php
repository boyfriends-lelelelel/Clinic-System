<?php
$message = "";
&nbsp;
&nbsp;

include 'connect.php';

    // Collect form data
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $role = $_POST['role'];
&nbsp;
&nbsp;

    // Validate input
    if (!empty($email) && !empty($password) && !empty($role)) {
        // Prepare SQL statement
        $stmt = $mysqli->prepare("SELECT user_id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
&nbsp;
&nbsp;

        // Check if email exists
        if ($stmt->num_rows > 0) {
            // User exists, now verify password
            // Here you should fetch the hashed password and validate it
&nbsp;
&nbsp;

            // Dummy password validation (use password_hash() for hashing in real cases)
            $stmt->close();
            // Assuming password is correct for demonstration
            echo "Login successful!";
            // Redirect based on role
            if ($role == 'doctor') {
                header("Location: doctor.html");
            } else {
                header("Location: dashboard.html");
            }
        } else {
            $message = "No account found with that email.";
        }
        $stmt->close();
    } else {
        $message = "Please fill in all fields.";
    }
&nbsp;
&nbsp;

    $mysqli->close();
}
?>
&nbsp;
&nbsp;

<!-- Show message if any -->
<?php if (!empty($message)): ?>
    <p><?php echo $message; ?></p>
<?php endif; ?>