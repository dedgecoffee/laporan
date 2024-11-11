<?php
// Membaca file pesanan dan menampilkan isinya
if (file_exists("orders.txt")) {
    $orders = file_get_contents("orders.txt");
    echo "<h1>Daftar Pesanan</h1>";
    echo "<pre>" . $orders . "</pre>";
} else {
    echo "<p>Tidak ada pesanan.</p>";
}
?>
