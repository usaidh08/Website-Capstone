
<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$apiKey = 'whT0Z8BEpyAASz6eNVg2qw==avvaolDnFpLUb4Q9'; // Ganti dengan kunci API Anda
$query = isset($_GET['query']) ? $_GET['query'] : '';

if ($query !== '') {
    $url = "https://api.calorieninjas.com/v1/recipe?query=" . urlencode($query);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-Api-Key: ' . $apiKey]);

    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
} else {
    echo json_encode(['error' => 'Query parameter is required.']);
}
?>
