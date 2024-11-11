<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html"); // Redirect ke halaman login jika tidak terautentikasi
    exit();
}

echo "<h1>Welcome, " . $_SESSION['email'] . "!</h1>";
echo "<p>Ini adalah halaman dashboard yang hanya dapat diakses setelah login.</p>";
?>
