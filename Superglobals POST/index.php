<?php
// login 
$correctUsername = 'stijn';
$correctPassword = 'azerty';

$message = '';
$messageClass = '';

// submit
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correctUsername && $password === $correctPassword) {
        $message = 'Welcome';
        $messageClass = 'success';
    } else {
        $message = 'There was an error logging in, please try again';
        $messageClass = 'error';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Login</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required />
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />
    </div>
    <button type="submit">Login</button>
</form>

<?php if ($message): ?>
    <p class="message <?php echo $messageClass; ?>"><?php echo htmlspecialchars($message); ?></p>
<?php endif; ?>

</body>
</html>
