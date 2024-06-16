<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama = $_POST['Nama_Pemesan'];
    $alamat = $_POST['Alamat_Pengiriman'];
    $nomor = $_POST['Nomor_Telepon'];
    $metode = $_POST[
        "BANK BRI" = (1483321126),
        "BANK BCA" = (3564451126),
        "BANK BSI" = (45844511278)
    ];
    $pilihan_buku = $_POST[
        "Buku Geografi",
        "Buku Matematika",
        "Buku Olahraga",
        "Buku Fisika";
    ];
    $jumlah = $_POST['Jumlah_Setiap_Buku'];
    $catatan = $_POST['Catatan Khusus'];
    $tanggal = $_POST['Tangga_Pengiriman_yang_Diinginkan'];
    $bukti = $_POST['Bukti_Pembayaran'];

    echo "<h1>Form Pemesanan Buku Online</h1>";
    echo "Nama: " .$nama."<br>";
    echo "Alamat: " .$alamat."<br>";
    echo "Nomor Telepon: " .$nomor."<br>";
    echo "Metode Pembayrana: " .$metode."<br>";
    echo "Pilihan Buku: ".$pilihan_buku."<br>";
    echo "Jumlah Buku: ".$jumlah."<br>";
    echo "Catatan Khusus: ".$catatan."<br>";
    echo "Tanggal Pengiriman: ".$tanggal."<br>";
    echo "Bukti Pembayaran: ".$bukti."<br>";
    ?>
</body>
</html>