<?php
include 'config.php';
$id = $_GET['id'];
$user = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();

if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit User</title></head>
<body>
<h1>Edit User</h1>
<form method="post">
    Name: <input type="text" name="name" value="<?= $user['name'] ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= $user['email'] ?>" required><br><br>
    <input type="submit" value="Update">
</form>
</body>
</html>
