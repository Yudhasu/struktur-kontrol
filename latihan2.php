<html>
<head>
	<title>Latihan1</title>
<body>
<?php
$minimal_belanja = 100000;
$total_belanja = 90000;
$diskon = 0;

if ($total_belanja >= $minimal_belanja) {
    $diskon = 0.1 * $total_belanja;
}

$total_bayar = $total_belanja - $diskon;

if ($total_belanja >= $minimal_belanja) {
    echo "Total belanja: " . $total_belanja . "\n";
    echo "Anda mendapatkan diskon 10%\n";
    echo "Total bayar setelah diskon: " . $total_bayar . "\n";
} else {
    echo "Total belanja: " . $total_belanja . "\n";
    echo "Total bayar: " . $total_belanja . "\n";
    echo "Total belanja kurang dari minimal belanja\n";
}
?>
</body>
</html>