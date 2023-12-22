<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Makanan</title>
    <!-- link font awesome cdn   -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
}

label {
    display: block;
    margin: 20px 0 10px;
    font-size: 18px;
}

#recipeInput {
    width: 80%;
    padding: 10px;
    margin-bottom: 10px;
    font-size: 16px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
}

button:hover {
    background-color: #45a049;
}

#recipes-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-top: 20px;
}

.recipe-card {
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 10px;
    padding: 15px;
    width: 30%;
    border-radius: 5px;
}

.recipe-card img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
}

.recipe-card h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.recipe-card p {
    font-size: 16px;
    color: #555;
}

@media screen and (max-width: 768px) {
    #recipes-container {
        flex-direction: column;
        align-items: center;
    }

    .recipe-card {
        width: 80%;
    }
}
</style>
<body>
<section class="header">

<a href="home.html" class="logo">
   <img src="../image/logo.png" alt="">
</a>

<nav class="navbar">
   <a href="../home.html">Home</a>
   <a href="../package.html">Menu Sehat</a>
   <a href="http://localhost/project/hitungkalori/index.php">Hitung Kalori</a>
   <a href="../formlogin.html">Login</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>
</section>
    <label for="recipeInput">Masukkan Resep:</label>
    <input type="text" id="recipeInput" placeholder="Contoh: mushroom risotto">
    <button onclick="searchRecipe()">Cari Resep</button>
     
    <div id="recipes-container"></div>
    <section class="footer">
<div class="box-container">

   <div class="box">
      <h3>Main Link</h3>
      <a href="home.html"> <i class="fas fa-angle-right"></i> Home</a>
      <a href="package.html"> <i class="fas fa-angle-right"></i> Menu Sehat</a>
      <a href="http://localhost/project/hitungkalori/index.php">Hitung Kalori</a>
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
