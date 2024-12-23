<?php
require_once '../app/controllers/UserController.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // variabel inputan form
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);

    // validasi inputan dari form
    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        $_SESSION['error'] = 'All fields are required.';
        header('Location: index.php');
        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'Invalid email format.';
        header('Location: index.php');
        exit();
    }
    if (strlen($password) < 6) {
        $_SESSION['error'] = 'Password must be at least 6 characters long.';
        header('Location: index.php');
        exit();
    }
    if ($password !== $confirmPassword) {
        $_SESSION['error'] = 'Passwords do not match.';
        header('Location: index.php');
        exit();
    }

    // Hash password untuk mengamankan password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $ipAddress = $_SERVER['REMOTE_ADDR'];

    // UserController untuk menyimpan data pengguna
    $userController = new UserController();
    $isRegistered = $userController->registerUser($username, $email, $hashedPassword, $browser, $ipAddress);

    if ($isRegistered) {
        $_SESSION['success'] = 'Registration successful!';
    } else {
        $_SESSION['error'] = 'Failed to register. Please try again.';
    }

    header('Location: index.php');
    exit();
}

// setelah proses registrasi berhasil
if ($isRegistered){
    $_SESSION['user'] = [
        'username' => $username,
        'email' => $email,
        'browser' => $browser,
        'ip_address' => $ipAddress
    ];
    header('Location: dashboard.php')
}

// 
if ($isRegistered) {
    setcookie('username', $username, time() + (86400 * 30), "/"); // Cookie valid for 30 days
    header('Location: dashboard.php');
    exit();
}
