<!-- invoice.php -->
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tiket_kereta";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil ID pemesanan dari URL
$pemesanan_id = $_GET['id'];

// Ambil data pemesanan dari database
$sql = "SELECT * FROM pemesanan_tiket_kereta WHERE id = $pemesanan_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Invoice Pemesanan Tiket Kereta</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>Invoice Pemesanan Tiket Kereta</h2>
            <div class="invoice">
                <p><strong>Detail Pemesanan:</strong></p>
                <p><strong>Nama Kereta:</strong> <?php echo $data['nama_kereta']; ?></p>
                <p><strong>Harga Tiket Kereta (IDR):</strong> Rp <?php echo $data['harga_kereta']; ?></p>
                <p><strong>Jumlah Tiket:</strong> <?php echo $data['jumlah_tiket']; ?></p>
                <p><strong>Kelas:</strong> <?php echo $data['kelas']; ?></p>
                <p><strong>Nama Penumpang:</strong> <?php echo $data['nama_penumpang']; ?></p>
                <p><strong>Umur:</strong> <?php echo $data['umur']; ?> tahun</p>
                <p><strong>Jenis Kelamin:</strong> <?php echo $data['jenis_kelamin']; ?></p>
                <p><strong>Alamat:</strong> <?php echo $data['alamat']; ?></p>
                <p><strong>Total Harga:</strong> Rp <?php echo $data['total_harga']; ?></p>
                <p><strong>Waktu Pemesanan:</strong> <?php echo $data['waktu_pemesanan']; ?></p>
            </div>
            <a href="index.php">Kembali ke Halaman Utama</a>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "Data pemesanan tidak ditemukan.";
}

$conn->close();
?>
