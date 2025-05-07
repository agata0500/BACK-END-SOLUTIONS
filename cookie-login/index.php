<?php
// logout 
if (isset($_GET['logout'])) {
    setcookie('loggedin', '', time() - 3600); // Expire cookie
    header('Location: index.php');
    exit;
}

$loginSuccess = false;
$errorMessage = '';

// Check for cookie
if (isset($_COOKIE['loggedin']) && $_COOKIE['loggedin'] === 'true') {
    $loginSuccess = true;
}

//login form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Load credentials
    $fileContent = file_get_contents('credentials.txt');
    $credentials = explode(',', trim($fileContent)); // [username, password]

    $enteredUsername = $_POST['username'] ?? '';
    $enteredPassword = $_POST['password'] ?? '';

    //login
    if ($enteredUsername === $credentials[0] && $enteredPassword === $credentials[1]) {
        setcookie('loggedin', 'true', time() + 360); 
        $loginSuccess = true;
        header('Location: index.php'); //resubmission
        exit;
    } else {
        $errorMessage = 'Username and/or password incorrect. Try again.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login with Cookie</title>
    <style>
        body { font-family: Arial; padding: 40px; max-width: 600px; margin: auto; }
        form { display: flex; flex-direction: column; gap: 10px; max-width: 300px; }
        .error { color: red; margin-top: 10px; }
        .dashboard { margin-top: 20px; }
    </style>
</head>
<body>

<?php if ($loginSuccess): ?>
    <h1>Dashboard</h1>
    <p>You are logged in.</p>
    <a href="index.php?logout=true">Logout</a>
<?php else: ?>
    <h1>Login</h1>
    <?php if ($errorMessage): ?>
        <p class="error"><?= htmlspecialchars($errorMessage) ?></p>
    <?php endif; ?>
    <form method="POST" action="index.php">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Login</button>
    </form>
<?php endif; ?>

</body>
</html>
