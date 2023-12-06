<!-- tiket.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Pemesanan Tiket Kereta</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Pemesanan Tiket Kereta</h2>
        <form action="process.php" method="post">
            <label for="nama_kereta">Nama Kereta:</label>
            <select name="nama_kereta" id="nama_kereta" required onchange="updateHarga()">
                <option value="" disabled selected>Pilih Kereta</option>
                <option value="Argo Bromo Anggrek">Argo Bromo Anggrek</option>
                <option value="Gajayana">Gajayana</option>
                <option value="Turangga">Turangga</option>
            </select>

            <label for="harga_kereta">Harga Tiket Kereta (IDR):</label>
            <input type="text" name="harga_kereta" id="harga_kereta" readonly required>

            <label for="jumlah_tiket">Jumlah Tiket:</label>
            <input type="number" name="jumlah_tiket" id="jumlah_tiket" required>

            <label for="kelas">Kelas:</label>
            <select name="kelas" id="kelas" required onchange="updateHarga()">
                <option value="" disabled selected>Pilih Kelas</option>
                <option value="ekonomi">Ekonomi</option>
                <option value="bisnis">Bisnis</option>
            </select>

            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>

            <label for="umur">Umur:</label>
            <input type="text" name="umur" id="umur" required>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select name="jenis_kelamin" id="jenis_kelamin" required>
                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" required>

            <button type="submit">Pesan Tiket</button>
            <a href="index.php">Kembali ke Halaman Utama</a>
        </form>
    </div>

    <script>
        function updateHarga() {
            const hargaKeretaSelect = document.getElementById("nama_kereta");
            const hargaKeretaInput = document.getElementById("harga_kereta");
            const kelasSelect = document.getElementById("kelas");
            
            const selectedKereta = hargaKeretaSelect.value;
            const selectedKelas = kelasSelect.value;
            
            const hargaKereta = {
                "Argo Bromo Anggrek": {
                    "ekonomi": 100000,
                    "bisnis": 150000
                },
                "Gajayana": {
                    "ekonomi": 120000,
                    "bisnis": 180000
                },
                "Turangga": {
                    "ekonomi": 80000,
                    "bisnis": 120000
                }
            };
            
            hargaKeretaInput.value = hargaKereta[selectedKereta][selectedKelas];
        }
    </script>
</body>
</html>
