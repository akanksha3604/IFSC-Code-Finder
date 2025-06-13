<?php
if (isset($_GET['bank']) && isset($_GET['branch']) && isset($_GET['city'])) {
    $bank = urlencode($_GET['bank']);
    $branch = urlencode($_GET['branch']);
    $city = urlencode($_GET['city']);

    $url = "https://ifsc.razorpay.com/$bank/$city/$branch";
    $response = @file_get_contents($url);

    echo "<!DOCTYPE html>
    <html>
    <head>
        <title>Search Result</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
    <h1>Search Result</h1>
    <a href='index.php' target='_blank'>Back to Home</a><br><br>";

    if ($response) {
        $data = json_decode($response, true);
        echo '<pre>' . print_r($data, true) . '</pre>';
    } else {
        echo '<p>❌ No results found. Please check your inputs.</p>';
    }

    echo "</body></html>";
} else {
    echo "❌ Required fields missing.";
}
?>
