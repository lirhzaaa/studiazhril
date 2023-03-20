<?php
$bilangan1 = 5;
$bilangan2 = 1;
$bilangan3 = 8;
$bilangan4 = 3;


$terbesar = $bilangan1;
if ($bilangan2 > $terbesar) {
    $terbesar = $bilangan2;
}
if ($bilangan3 > $terbesar) {
    $terbesar = $bilangan3;
}
if ($bilangan4 > $terbesar) {
    $terbesar = $bilangan4;
}

echo "Bilangan Terbesar : " . $terbesar;
?>