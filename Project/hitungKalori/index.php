<?php
// Kode PHP di sini
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Kalori</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<!-- link font awesome cdn   -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

form {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

input,
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

select {
    appearance: none;
    background: url('https://imageurl.com/arrow-down.png') no-repeat right center / 15px 15px; /* ganti dengan URL gambar panah bawah */
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
</style>

<section class="header">

<a href="home.html" class="logo">
   <img src="../image/logo.png" alt="">
</a>

<nav class="navbar">
   <a href="../home.html">Home</a>
   <a href="../package.html">Menu Sehat</a>
   <a class="nav-link" href="http://localhost/project/hitungkalori/index.php">Hitung Kalori</a>
   <a href="../formlogin.html">Login</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<form action="proses.php" method="post">
    <label for="age">Usia:</label>
    <input type="number" name="age" required>

    <label for="gender">Jenis Kelamin:</label>
    <select name="gender" required>
        <option value="male">Laki-laki</option>
        <option value="female">Perempuan</option>
    </select>

    <label for="weight">Berat Badan (kg):</label>
    <input type="number" name="weight" required>

    <label for="height">Tinggi Badan (cm):</label>
    <input type="number" name="height" required>

    <label for="activity">Tingkat Aktivitas:</label>
    <select name="activity" required>
        <option value="sedentary">Sedentary</option>
        <option value="moderate">Moderat</option>
        <option value="active">Aktif</option>
    </select>

    <label for="health">Kondisi Kesehatan:</label>
    <select name="health" required>
        <option value="normal">Normal</option>
        <option value="underweight">Kurus</option>
        <option value="overweight">Gemuk</option>
    </select>

    <input type="submit" value="Hitung Kalori">
</form>
<section class="footer">
<div class="box-container">

   <div class="box">
      <h3>Main Link</h3>
      <a href="home.html"> <i class="fas fa-angle-right"></i> Home</a>
      <a href="package.html"> <i class="fas fa-angle-right"></i> Menu Sehat</a>
      <a href="../Project/hitungKalori/index.php"> <i class="fas fa-angle-right"></i> Hitung Kalori</a>
   </div>

   <div class="box">
      <h3>added Link</h3>
      <a href="#"> <i class="fas fa-angle-right"></i> Semua Pertanyaan</a>
      <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
      <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
   </div>

   <div class="box">
      <h3>Contacts</h3>
      <a href="#"> <i class="fas fa-phone"></i> +6281382491631</a>
      <a href="#"> <i class="fas fa-phone"></i> +6289684460487 </a>
      <a href="#"> <i class="fas fa-envelope"></i> HTEOfficial.co.id</a>
      <a href="#"> <i class="fas fa-map"></i> Kuningan, Indonesia</a>
   </div>

   <div class="box">
      <h3>Follow Us</h3>
      <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
      <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      <a href="#"> <i class="fab fa-linkedin"></i> MiChat </a>
   </div>
</div>

<div class="credit"> Copyright <span>JayaAbadi</span> 2023 </div>

</section>
 
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
