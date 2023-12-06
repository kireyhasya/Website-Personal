<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Roonway</title> <!-- Judul diperbarui -->
  <link rel="stylesheet" href="landing-page/dist/CSS/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body id="home">
  <header>
    <!-- Navigasi -->
    <section class="navigation">
      <div class="container">
        <div class="box-navigation animate__animated animate__fadeInDown">
          <div class="box">
            <h1>Roonway</h1> <!-- Nama situs web diperbarui -->
          </div>
          <div class="box menu-navigation">
            <ul>
              <li>
                <i class="ri-home-3-line"></i>
                <a href="#home">Beranda</a>
              </li>
              <li>
                <i class="ri-article-line"></i>
                <a href="#about">Tentang</a>
              </li>
              <li>
                <i class="ri-dashboard-line"></i>
                <a href="#famous">Destinasi</a>
              </li>
            </ul>
          </div>
          <div class="box menu-bar">
            <i class="ri-menu-3-fill"></i>
          </div>
        </div>
      </div>
    </section>
    <!-- Navigasi -->

    <!-- Hero -->
    <section class="hero">
      <h1 class="animate__animated animate__pulse">Temukan Tiket Kereta Terbaik</h1>
    </section>
    <!-- Hero -->
  </header>

  <!-- Tentang -->
  <section class="about" id="about">
    <div class="container">
      <div class="box-about">
        <div class="box" data-aos="fade-right" data-aos-duration="1000">
          <h1>Dapatkan Tiket Kereta Termurah hanya di Roonway</h1> <!-- Konten diperbarui -->
          <p>
            Hemat uang: Temukan tiket kereta dengan harga terbaik di pasar. Pilih fleksibilitas: Berbagai opsi perjalanan dan maskapai tersedia. Lengkapkan perjalanan Anda: Sertakan akomodasi, transportasi darat, dan asuransi perjalanan. Layanan pelanggan terbaik: Dukungan 24/7 untuk memastikan perjalanan Anda lancar.
          </p>
          <a href="tiket.php" class="pesan-sekarang-button" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; margin-top: 10px;">Pesan Tiket</a>
        </div>
        <div class="box" data-aos="fade-left" data-aos-duration="1000">
          <img src="landing-page/image/kereta.png" alt="Gambar Kereta" />
        </div>
      </div>
    </div>
  </section>
  <!-- Tentang -->

  <!-- Destinasi -->
  <section class="famous" id="famous">
  <div class="container">
    <h1 style="text-align: center; color: white; padding-bottom:5%">Tempat Wisata di Semarang</h1>
    <div class="box-famous">
      <!-- Spot 1: Lawang Sewu -->
      <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
        <img src="landing-page/image/lawang.jpg" height="300px" width="400px" alt="Gambar Lawang Sewu" />
        <h1>Lawang Sewu</h1>
        <p>Lawang Sewu adalah bangunan bersejarah yang terkenal dengan pintu dan jendela khasnya yang banyak. Bangunan ini memiliki nilai sejarah dan arsitektur yang menarik.</p>
      </div>

      <!-- Spot 2: Tugu Muda -->
      <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
        <img src="landing-page/image/tugumuda.jpg" height="300px" width="100px" alt="Gambar Tugu Muda" />
        <h1>Tugu Muda</h1>
        <p>Tugu Muda adalah tugu peringatan yang menjadi simbol kemerdekaan Indonesia di Kota Semarang. </p>
      </div>

      <!-- Spot 3: Kota Lama Semarang -->
      <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
        <img src="landing-page/image/kotalama.jpg" height="300px" width="90px" alt="Gambar Kota Lama Semarang" />
        <h1>Kota Lama Semarang</h1>
        <p>Kota Lama adalah area bersejarah dengan bangunan-bangunan tua yang menggambarkan kehidupan masa lalu Kota Semarang.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Destinasi -->

  <!-- Footer -->
  <footer style="background-color: #000; color: #fff; padding: 40px 0; text-align: center;">
    <div style="max-width: 600px; margin: 0 auto;">
      <address style="font-style: normal; margin-top: 20px; font-size: 14px;">
        <p>Alamat: Jalan Semarang No. 123, Kota Semarang, 12345</p>
        <p>Email: info@roonway.co</p> <!-- Alamat email diperbarui -->
        <p>No. HP: +62 123 456 789</p>
      </address>
      <p style="font-size: 18px;">&copy; 2023 Roonway</p>
    </div>
  </footer>
  <!-- Footer -->

  <script src="./dist/js/script.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    const scriptURL = "https://script.google.com/macros/s/AKfycbxctX1ffFQmu4IuLDuuX-1k0bHEawmsOhnpxzllw87rd3Qk63cXO7DE76BJf3ZLHIJo/exec";
    const form = document.forms["web-form"];

    form.addEventListener("submit", (e) => {
      e.preventDefault();
      fetch(scriptURL, { method: "POST", body: new FormData(form) })
        .then((response) => console.log("Success!", response))
        .catch((error) => console.error("Error!", error.message));
    });
  </script>
</body>

</html>
