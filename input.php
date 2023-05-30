<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $bentuk = $_GET['bentuk'];
    switch ($bentuk) {
        case 1:
        echo "<title>LINGKARAN</title>";
        break;

        case 2:
        echo "<title>SEGITIGA SIKU-SIKU</title>";
        break;

        case 3:
        echo "<title>BUJUR SANGKAR</title>";
        break;

        case 4:
        echo "<title>PERSEGI PANJANG</title>";
        break;

        case 5:
        echo "<title>JAJARAN GENJANG</title>";
        break;        
        
        default:
        echo "<title>ARRIZAL GANTENKZ PALID NO DEBAD</title>";
        break;
    } 
    ?>
</head>
<body>
<?php
    $bentuk = $_GET['bentuk'];
    switch ($bentuk) {
        case 1:
        echo "<title>LINGKARAN</title>";
        break;

        case 2:
        echo "<title>SEGITIGA SIKU-SIKU</title>";
        break;

        case 3:
        echo "<title>BUJUR SANGKAR</title>";
        break;

        case 4:
        echo "<title>PERSEGI PANJANG</title>";
        break;

        case 5:
        echo "<title>JAJARAN GENJANG</title>";
        break;        
        
        default:
        echo "<title>ARRIZAL GANTENKZ PALID NO DEBAD</title>";
        break;
    } 
    ?>
</body>
</html>