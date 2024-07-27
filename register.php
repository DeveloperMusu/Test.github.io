<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Dummy users array for example (replace with database logic)
    // Here you would add the new user to your database

    // Send notification email
    $to = 'enderzmb@gmail.com';
    $subject = 'New User Registration';
    $message = "New user registered with username: $username and email: $email";
    $headers = 'From: your-email@example.com' . "\r\n" .
               'Reply-To: your-email@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    header('Location: success.php'); // Redirect to a success page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1>Register</h1>
            <form method="POST">
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
