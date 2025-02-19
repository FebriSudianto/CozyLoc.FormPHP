<?php 
$judul_hero = "Hai Cozy People";
$deskripsi_hero = "Selamat datang di website resmi CozyLoc";
$logo_cozyloc = "cozy loc.jpg";
$judul_about = "Tentang Kami";
$deskripsi_about = "CozyLoc merupakan tempat dimana kaos tidak hanya memiliki harga tetapi memiliki makna. Tentunya kami menyediakan layanan terbaik untuk kenyamanan Anda.";
$logo_tulisan = "cozy loc tulisan.jpg";
$judul_contact = "Hubungi Kami";
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cozy Loc</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        nav {
            background: #333;
            padding: 15px;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 18px;
        }
        .hero, #about, #contact, .extra-section {
            background: #f4f4f4;
            padding: 50px 20px;
        }
        .form-section {
            background: #ddd;
            padding: 50px 20px;
        }
        form input, form textarea, form button {
            display: block;
            width: 80%;
            margin: 10px auto;
            padding: 10px;
        }
        footer {
            background: #333;
            color: white;
            padding: 20px;
            margin-top: 20px;
        }
        .logo {
            width: 150px;
            margin-bottom: 20px;
        }
    </style>
    <script>
        function ubahTeks() {
            document.getElementById("ubahParagraf").innerText = "Satu hal yang perlu diingat, tidak hanya membeli produknya saja, tetapi resapi juga makna nya";
        }
    </script>
</head>
<body>
    <nav>
        <a href="#home">Home</a>
        <a href="#about">Tentang</a>
        <a href="#contact">Kontak</a>
    </nav>

    <section id="home" class="hero">
        <img src="<?php echo $logo_cozyloc; ?>" alt="Cozy Loc Logo" class="logo">
        <h1><?php echo $judul_hero; ?></h1>
        <p><?php echo $deskripsi_hero; ?></p>
    </section>

    <section id="about">
        <img src="<?php echo $logo_cozyloc; ?>" alt="Cozy Loc Logo" class="logo">
        <h2><?php echo $judul_about; ?></h2>
        <p><?php echo $deskripsi_about; ?></p>
    </section>

    <section class="extra-section">
        <img src="<?php echo $logo_tulisan; ?>" alt="Cozy Loc Logo" class="logo">
        <p id="ubahParagraf">CozyLoc hanya sebuah usaha yang menjual sebuah pakaian, tetapi terdapat hal - hal yang akan kami berikan. Tentunya terdapat clue ketika klik tombol dibawah ini</p>
        <button onclick="ubahTeks()">Clue</button>
    </section>

    <section id="contact" class="form-section">
      <h2><?php echo $judul_contact; ?></h2>
      <form>
      <form action="proses.php" method="POST">
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
            <input type="text" name="alamat" placeholder="Alamat" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="telepon" placeholder="Nomor Telepon" required>
            <button type="submit">Kirim</button>
        </form>
  </section>

    

    <footer>
        <p>&copy; 2025 CozyLoc. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>