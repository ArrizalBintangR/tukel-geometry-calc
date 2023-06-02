<?php
if (isset($_POST['count'])) {
    $bentuk = $_POST['bentuk'];

    switch ($bentuk) {
        case 1: // Lingkaran
            $jari2 = $_POST['jari2'];
            $luas = hitungLuasLingkaran($jari2);
            echo "Luas Lingkaran: " . $luas;
            break;

        case 2: // Segitiga Siku-Siku
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];
            $luas = hitungLuasSegitiga($alas, $tinggi);
            echo "Luas Segitiga Siku-Siku: " . $luas;
            break;

        case 3: // Bujur Sangkar
            $sisi = $_POST['sisi'];
            $luas = hitungLuasPersegi($sisi);
            echo "Luas Bujur Sangkar: " . $luas;
            break;

        case 4: // Persegi Panjang
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $luas = hitungLuasPersegiPanjang($panjang, $lebar);
            echo "Luas Persegi Panjang: " . $luas;
            break;

        case 5: // Jajaran Genjang
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];
            $luas = hitungLuasJajaranGenjang($alas, $tinggi);
            echo "Luas Jajaran Genjang: " . $luas;
            break;

        default:
            echo "Bentuk tidak valid";
            break;
    }
}

function hitungLuasLingkaran($jari2)
{
    return 3.14 * $jari2 * $jari2;
}

function hitungLuasSegitiga($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}

function hitungLuasPersegi($sisi)
{
    return $sisi * $sisi;
}

function hitungLuasPersegiPanjang($panjang, $lebar)
{
    return $panjang * $lebar;
}

function hitungLuasJajaranGenjang($alas, $tinggi)
{
    return $alas * $tinggi;
}
