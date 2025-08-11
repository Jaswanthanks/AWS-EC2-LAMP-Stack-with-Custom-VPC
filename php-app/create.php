<?php
include 'config.php';
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $conn->query("INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Contact</title></head>
<body>
<h1>Add Contact</h1>
<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Message: <textarea name="message"></textarea><br><br>
    <input type="submit" value="Save">
</form>
</body>
</html>
