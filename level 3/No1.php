<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>

<H2>INPUT</H2>
    <form action="" method="post">
        <tr>
            <td><label for="username">Masukkan Bilangan 1 </label></td>
            <td><input type="number" name="bilangan1" ></td>
        </tr>
        <tr>
            <td><label for="password">Masukkan Bilangan 2 </label></td>
            <td><input type="number" name="bilangan2" ></td>
        </tr>
        <tr>
            <td><label for="password">Masukkkan Bilangan 3</label></td>
            <td><input type="number" name="bilangan3" ></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Input</button></td>
        </tr>
    </form>
</table>





<?php

if(isset($_POST["submit"])){


    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
    $bilangan3 = $_POST['bilangan3'];

// Menyimpan bilangan ke dalam array
$bilangan = array($bilangan1, $bilangan2, $bilangan3);

// Mengurutkan array dari nilai terkecil ke terbesar
sort($bilangan);

// Mencetak bilangan secara urut
echo "Bilangan urut: ";
foreach ($bilangan as $b) {
    echo $b . " ";
}
}
?>

</body>
</html>