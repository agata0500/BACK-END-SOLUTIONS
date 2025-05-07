<?php
session_start();

//logout
if (isset($_GET['reset'])) {
    session_destroy();
    header('Location: register.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Overview Page</title>
</head>
<body>

<h2>Overview Page</h2>
<ul>
    <li>Email: <?= htmlspecialchars($_SESSION['email'] ?? '') ?> | <a href="register.php?edit=email">Edit</a></li>
    <li>Nickname: <?= htmlspecialchars($_SESSION['nickname'] ?? '') ?> | <a href="register.php?edit=nickname">Edit</a></li>
    <li>Street: <?= htmlspecialchars($_SESSION['street'] ?? '') ?> | <a href="registration-address.php?edit=street">Edit</a></li>
    <li>Number: <?= htmlspecialchars($_SESSION['number'] ?? '') ?> | <a href="registration-address.php?edit=number">Edit</a></li>
    <li>City: <?= htmlspecialchars($_SESSION['city'] ?? '') ?> | <a href="registration-address.php?edit=city">Edit</a></li>
    <li>Zipcode: <?= htmlspecialchars($_SESSION['zipcode'] ?? '') ?> | <a href="registration-address.php?edit=zipcode">Edit</a></li>
</ul>

<p><a href="registration-overview.php?reset=true">Clear Session</a></p>

</body>
</html>
