<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Buku</title>
</head>
<body>
    <form action="" method="post">
        <label for="NoTransaksi">No Transaksi:</label>
        <input type="text" name="NoTransaksi"><br><br>

        <label for="namaPembeli">Nama Pembeli:</label>
        <input type="text" name="namaPembeli"><br><br>

        <label for="judulBuku">Judul Buku:</label>
        <input type="text" name="judulBuku"><br><br>

        <label for="jumlahBuku">Jumlah Buku:</label>
        <input type="number" name="jumlahBuku"><br><br>

        <label for="hargaBuku">Harga Buku:</label>
        <input type="number" name="hargaBuku"><br><br>

        <button type="submit">Hasil Transaksi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $NoTransaksi = $_POST["NoTransaksi"];
        $namaPembeli = $_POST["namaPembeli"];
        $judulBuku = $_POST["judulBuku"];
        $jumlahBuku = $_POST["jumlahBuku"];
        $hargaBuku = $_POST["hargaBuku"];

        $totalBelanja = $jumlahBuku * $hargaBuku;

        $diskonBelanja = $totalBelanja * 0.1;
        $diskonTransaksi = $totalBelanja * 0.05;

        $totalBayar = $totalBelanja - $diskonBelanja - $diskonTransaksi;
        ?>

        <h2>Detail Transaksi</h2>
        <div class="output">
            <p>No Transaksi : <?php echo $NoTransaksi; ?></p>
            <p>Nama Pembeli: <?php echo $namaPembeli; ?></p>
            <p>Harga : Rp.<?php echo number_format($hargaBuku, 0, ',', '.'); ?></p>
            <p>Diskon Belanja (10%) : Rp.<?php echo number_format($diskonBelanja, 0, ',', '.'); ?></p>
            <p>Diskon Transaksi (5%) : Rp.<?php echo number_format($diskonTransaksi, 0, ',', '.'); ?></p>
            <p>Total Bayar : Rp.<?php echo number_format($totalBayar, 0, ',', '.'); ?></p>
        </div>
    <?php 
} 
?>
</div>
</body>
</html>