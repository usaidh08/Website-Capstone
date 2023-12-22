<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Kalori</title>
    <link rel="stylesheet" href="result.css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    $activity = $_POST["activity"];
    $health = $_POST["health"];

    // Hitung BMR
    if ($gender == "male") {
        $bmr = 10 * $weight + 6.25 * $height - 5 * $age + 5;
    } else {
        $bmr = 10 * $weight + 6.25 * $height - 5 * $age - 161;
    }

    // Hitung TDEE berdasarkan tingkat aktivitas
    switch ($activity) {
        case "sedentary":
            $tdee = $bmr * 1.2;
            break;
        case "moderate":
            $tdee = $bmr * 1.55;
            break;
        case "active":
            $tdee = $bmr * 1.9;
            break;
        default:
            $tdee = $bmr; // Default jika tingkat aktivitas tidak terdefinisi
            break;
    }

    // Sesuaikan kalori berdasarkan kondisi kesehatan
    switch ($health) {
        case "underweight":
            $adjustedCalories = $tdee * 1.1; // Tambah 10% dari TDEE
            break;
        case "overweight":
            $adjustedCalories = $tdee * 0.9; // Kurangi 10% dari TDEE
            break;
        default:
            $adjustedCalories = $tdee; // TDEE tetap untuk kondisi normal
            break;
    }
    
    // Tampilkan hasilnya
    echo '<div class="result-container">';
    echo '<h2>Hasil Perhitungan</h2>';
    echo "<p>Usia: $age tahun</p>";
    echo "<p>Jenis Kelamin: $gender</p>";
    echo "<p>Berat Badan: $weight kg</p>";
    echo "<p>Tinggi Badan: $height cm</p>";
    echo "<p>Tingkat Aktivitas: $activity</p>";
    echo "<p>Kondisi Kesehatan: $health</p>";
    echo "<p>BMR: $bmr</p>";
    echo "<p>TDEE: $tdee</p>";
    echo "<p>Kebutuhan Kalori Harian: $adjustedCalories</p>";
    echo '</div>';
}
?>

</body>
</html>
