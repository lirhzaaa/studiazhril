<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center>
<table>

<H1>SEGITIGA🔺</H1>

<br>
<br>

    <form action="" method="post">
        <tr>
            <td><label for="username">Input nilai pertama :</label></td>
            <td><input type="number" name="sisi1" ></td>
        </tr>
        <tr>
            <td><label for="password">Input nilai kedua :</label></td>
            <td><input type="number" name="sisi2" ></td>
        </tr>
        <tr>
            <td><label for="password">Input nilai ketiga :</label></td>
            <td><input type="number" name="sisi3" ></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">INPUT</button></td>
        </tr>
    </form>
</table>


</center>

<?php
// Input sisi-sisi segitiga


if(isset($_POST["submit"])){


$sisi1 = $_POST['sisi1'];
$sisi2 = $_POST['sisi2'];
$sisi3 = $_POST['sisi3'];

// Pengecekan sifat-sifat segitiga
if ($sisi1 == 0 || $sisi2 == 0 || $sisi3 == 0) {
    echo "Error: Input tidak boleh bernilai 0";
  }
  // memeriksa apakah input membentuk segitiga
  else if (($sisi1 + $sisi2 > $sisi3) && ($sisi2 + $sisi3 > $sisi1) && ($sisi3 + $sisi1 > $sisi2)) {
    // memeriksa jenis segitiga
    if ($sisi1 == $sisi2 && $sisi2 == $sisi3) {
      echo "Segitiga sama sisi";
    } else if ($sisi1 == $sisi2 || $sisi2 == $sisi3 || $sisi3 == $sisi1) {
      echo "Segitiga sama kaki";
    } else {
      echo "Segitiga sembarang";
    }
  } else {
    echo "Error: Input tidak membentuk segitiga";
  }
}
?>
</body>
</html>
