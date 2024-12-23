<?php
session_start();

// Redirect to sign-up page if user is not logged in
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

if (!isset($_SESSION['user']) && isset($_COOKIE['username'])) {
    $_SESSION['user'] = [
        'username' => $_COOKIE['username']
    ];
}


// Fetch user data from session
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?= htmlspecialchars($user['username']) ?>!</h1>
    <p>Email: <?= htmlspecialchars($user['email']) ?></p>
    <p>Browser: <?= htmlspecialchars($user['browser']) ?></p>
    <p>IP Address: <?= htmlspecialchars($user['ip_address']) ?></p>
    <a href="logout.php">Logout</a>

    <script>
        // menyimpan data tambahan di browser storage
        const user = {
            username: "<?= htmlspecialchars($user['username']) ?>",
            email: "<?= htmlspecialchars($user['email']) ?>"
        };
        localStorage.setItem('user', JSON.stringify(user));

        const savedUser = JSON.parse(localStorage.getItem('user'));
        console.log('Saved User:', savedUser);
    </script>

</body>
</html>
