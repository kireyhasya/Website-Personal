<!-- process.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_kereta = $_POST['nama_kereta'];
    $harga_kereta = $_POST['harga_kereta'];
    $kelas = $_POST['kelas'];
    $nama_penumpang = $_POST['nama'];
    $umur = $_POST['umur'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $jumlah_tiket = $_POST['jumlah_tiket'];

    $total_harga = $harga_kereta * $jumlah_tiket;

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

    // Insert data into the database
    $sql = "INSERT INTO pemesanan_tiket_kereta (nama_kereta, harga_kereta, kelas, nama_penumpang, umur, jenis_kelamin, alamat, jumlah_tiket, total_harga)
            VALUES ('$nama_kereta', $harga_kereta, '$kelas', '$nama_penumpang', $umur, '$jenis_kelamin', '$alamat', $jumlah_tiket, $total_harga)";

    if ($conn->query($sql) === TRUE) {
        // Redirect to invoice page
        header("Location: invoice.php?id=" . $conn->insert_id);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Maaf, ada kesalahan dalam pengiriman data.";
}
?>
