<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['street'] = $_POST['street'] ?? '';
    $_SESSION['number'] = $_POST['number'] ?? '';
    $_SESSION['city'] = $_POST['city'] ?? '';
    $_SESSION['zipcode'] = $_POST['zipcode'] ?? '';
    header('Location: registration-overview.php');
    exit;
}

//logic (GET param "edit")
$focusField = $_GET['edit'] ?? '';
function autoFocus($field) {
    global $focusField;
    return ($focusField === $field) ? 'autofocus' : '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Part 2: Address</title>
</head>
<body>
<h2>Registration Details</h2>
<p>Email: <?= htmlspecialchars($_SESSION['email'] ?? '') ?></p>
<p>Nickname: <?= htmlspecialchars($_SESSION['nickname'] ?? '') ?></p>

<h2>Part 2: Address</h2>
<form method="POST" action="registration-address.php">
    <label>Street<br>
        <input type="text" name="street" required value="<?= $_SESSION['street'] ?? '' ?>" <?= autoFocus('street') ?>>
    </label><br><br>

    <label>Number<br>
        <input type="text" name="number" required value="<?= $_SESSION['number'] ?? '' ?>" <?= autoFocus('number') ?>>
    </label><br><br>

    <label>City<br>
        <input type="text" name="city" required value="<?= $_SESSION['city'] ?? '' ?>" <?= autoFocus('city') ?>>
    </label><br><br>

    <label>Zipcode<br>
        <input type="text" name="zipcode" required value="<?= $_SESSION['zipcode'] ?? '' ?>" <?= autoFocus('zipcode') ?>>
    </label><br><br>

    <button type="submit">Next</button>
</form>
</body>
</html>
