<?php
include 'config.php';
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Add User</title></head>
<body>
<h1>Add User</h1>
<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" value="Save">
</form>
</body>
</html>
