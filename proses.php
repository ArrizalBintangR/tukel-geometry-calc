<a href="index.php">BACK HERE</a>
<?php
if (isset($_POST['count'])) {
    $bentuk = $_POST['bentuk'];

    switch ($bentuk) {
        case 1: // Lingkaran
            $jari2 = $_POST['jari2'];
            $luas = hitungLuasLingkaran($jari2);
            $keliling = hitungKelilingLingkaran($jari2);
            echo "Luas Lingkaran: " . $luas;
            echo "Luas Lingkaran: " . $keliling;
            break;

        case 2: // Segitiga Siku-Siku
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];
            $sisi = $_POST['sisi'];
            $luas = hitungLuasSegitiga($alas, $tinggi);
            $keliling = hitungKelilingSegitiga($sisi);
            echo "Luas Segitiga Siku-Siku: " . $luas;
            echo "Keliling Segitiga Siku-Siku: " . $keliling;
            break;

        case 3: // Bujur Sangkar
            $sisi = $_POST['sisi'];
            $luas = hitungLuasPersegi($sisi);
            $keliling = hitungKelilingPersegi($sisi);
            echo "Luas Bujur Sangkar: " . $luas;
            echo "Keliling Bujur Sangkar: " . $keliling;
            break;

        case 4: // Persegi Panjang
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $luas = hitungLuasPersegiPanjang($panjang, $lebar);
            $keliling = hitungLuasPersegiPanjang($panjang, $lebar);
            echo "Luas Persegi Panjang: " . $luas;
            echo "Keliling Persegi Panjang: " . $keliling;
            break;

        case 5: // Jajaran Genjang
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];
            $sisi1 = $_POST['sisi1'];
            $sisi2 = $_POST['sisi2'];
            $luas = hitungLuasJajaranGenjang($alas, $tinggi);
            $keliling = hitungKelilingJajaranGenjang($sisi1, $sisi2);
            echo "Luas Jajaran Genjang: " . $luas;
            echo "Keliling Jajaran Genjang: " . $keliling;
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

function hitungKelilingLingkaran($jari2)
{
    return 2 * 3.14 * $jari2;
}

function hitungLuasSegitiga($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}

function hitungKelilingSegitiga($sisi)
{
    return $sisi + $sisi + $sisi;
}

function hitungLuasPersegi($sisi)
{
    return $sisi * $sisi;
}

function hitungKelilingPersegi($sisi)
{
    return 4 * $sisi;
}

function hitungLuasPersegiPanjang($panjang, $lebar)
{
    return $panjang * $lebar;
}

function hitungKelilingPersegiPanjang($panjang, $lebar)
{
    return 2 * ($panjang + $lebar);
}

function hitungLuasJajaranGenjang($alas, $tinggi)
{
    return $alas * $tinggi;
}

function hitungKelilingJajaranGenjang($sisi1, $sisi2)
{
    return $sisi1 + $sisi2 + $sisi1 + $sisi2;
}
