<?php
// Mendapatkan data yang dikirimkan melalui form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $alamat = $_POST['alamat'];

    // Menyimpan data pesanan ke dalam file (atau bisa menggunakan database)
    $orderData = "Nama: " . $nama . "\n";
    $orderData .= "Produk: " . $produk . "\n";
    $orderData .= "Jumlah: " . $jumlah . "\n";
    $orderData .= "Alamat: " . $alamat . "\n\n";

    // Menyimpan ke file text (order.txt) sebagai contoh
    file_put_contents("orders.txt", $orderData, FILE_APPEND);

    // Memberikan konfirmasi kepada pengguna
    echo "<h2>Pesanan Anda telah diterima</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Produk: $produk</p>";
    echo "<p>Jumlah: $jumlah</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<a href='index.html'>Kembali ke Form Pemesanan</a>";
}
?>
