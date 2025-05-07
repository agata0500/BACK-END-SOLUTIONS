<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['email'] = $_POST['email'] ?? '';
    $_SESSION['nickname'] = $_POST['nickname'] ?? '';
    header('Location: registration-address.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Part 1: Registration</title>
</head>
<body>
<h2>Part 1: Registration Details</h2>
<form method="POST" action="registration-address.php">
    <label>Email<br>
        <input type="email" name="email" required value="<?= $_SESSION['email'] ?? '' ?>">
    </label><br><br>

    <label>Nickname<br>
        <input type="text" name="nickname" required value="<?= $_SESSION['nickname'] ?? '' ?>">
    </label><br><br>

    <button type="submit">Next</button>
</form>
</body>
</html>
