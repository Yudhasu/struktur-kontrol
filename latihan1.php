<html>
<head>
	<title>Latihan1</title>
<body>
<?php
$minimal_belanja = 100000;
$total_belanja = 120000;

if ($total_belanja > $minimal_belanja) {
    $diskon = 0.1 * $total_belanja;
    $total_bayar = $total_belanja - $diskon;
} else {
    $total_bayar = $total_belanja;
}

echo "Total bayar: " . $total_bayar;
?>
</body>
</html>
