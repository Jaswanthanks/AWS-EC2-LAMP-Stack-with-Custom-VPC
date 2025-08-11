<?php
include 'config.php';
$id = $_GET['id'];
$contact = $conn->query("SELECT * FROM contacts WHERE id=$id")->fetch_assoc();

if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $conn->query("UPDATE contacts SET name='$name', email='$email', message='$message' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Contact</title></head>
<body>
<h1>Edit Contact</h1>
<form method="post">
    Name: <input type="text" name="name" value="<?= $contact['name'] ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= $contact['email'] ?>" required><br><br>
    Message: <textarea name="message"><?= $contact['message'] ?></textarea><br><br>
    <input type="submit" value="Update">
</form>
</body>
</html>
