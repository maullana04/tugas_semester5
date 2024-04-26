<?php
// beli_produk.php

// Lakukan validasi sesuai kebutuhan, misalnya:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['produk_id'])) {
        $produkID = $_POST['produk_id'];
        
        // Lakukan proses pembelian, misalnya dengan menambahkan data pembelian ke database atau mengirimkan pesanan ke penyedia layanan pembayaran
        // Setelah proses pembelian selesai, kirimkan respons ke klien
       echo json_encode(array('success' => true, 'message' => 'Pembelian produk berhasil'));
       header("location: data_barang.php");
        
        // Simulasi bahwa pembelian berhasil
        $pembelianBerhasil = true;

        if ($pembelianBerhasil) {
            // Jika pembelian berhasil, kirimkan pesan sukses
            echo json_encode(array('success' => true, 'message' => 'Pembelian produk berhasil'));
            // Tambahkan logika untuk diarahkan ke halaman data_barang.php atau halaman lain yang sesuai
          header("location: data_barang.php");
        } else {
            // Jika pembelian gagal, kirimkan pesan gagal
            echo json_encode(array('success' => false, 'message' => 'Pembelian produk gagal'));
        }
    } else {
        // Jika ID produk tidak tersedia, kirimkan pesan error
        echo json_encode(array('success' => false, 'message' => 'ID produk tidak tersedia'));
    }
} else {
    // Jika metode request bukan POST, kirimkan respons dengan pesan error
    echo json_encode(array('success' => false, 'message' => 'Metode request tidak valid'));
}
?>

