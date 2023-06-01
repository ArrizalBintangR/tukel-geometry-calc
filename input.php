<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
    <a href="index.php">BACK TO MAIN PAGE</a>
    <div class="container">
        <div>
            <?php switch ($bentuk):
                case 1: ?>
                    <label>Lingkaran</label>
                    <form method="post">
                        <label>jari-jari</label>
                        <input type="text" name="jari2" />
                        <br>
                        <input type="submit" name="count" value="count" />
                    </form>
                    <br>
                    <label>BERIKUT LUAS LINGKARAN YANG ANDA CARI</label>
                    <?php
                    if (isset($_POST['count'])) {
                        // echo "This is Button1 that is selected";
                    }
                    ?>
                    <?php break; ?>
                <?php
                case 2: ?>
        </div>
        <label>SEGITIGA SIKU-SIKU</label>
        <form method="post">
            <label>ALAS</label>
            <input type="text" name="alas" />
            <br>
            <label for="">TINGGI</label>
            <input type="text" name="tinggi" />
            <br>
            <input type="submit" name="count" value="count" />
        </form>
        <br>
        <label>BERIKUT LUAS YANG ANDA CARI</label>
        <?php
                    if (isset($_POST['count'])) {
                        // echo "This is Button1 that is selected";
                    }
        ?>
        <div>
            <?php break; ?>
        <?php
                case 3: ?>
        </div>
        <label>BUJUR SANGKAR</label>
        <form method="post">
            <label>SISI</label>
            <input type="text" name="sisi" />
            <br>
            <input type="submit" name="count" value="count" />
        </form>
        <br>
        <label>BERIKUT LUAS YANG ANDA CARI</label>
        <?php
                    if (isset($_POST['count'])) {
                        // echo "This is Button1 that is selected";
                    }
        ?>
        <div>
            <?php break; ?>
        <?php
                case 4: ?>
        </div>
        <label>PERSEGI PANJANG</label>
        <form method="post">
            <label>PANJANG</label>
            <input type="text" name="panjang" />
            <br>
            <label for="">LEBAR</label>
            <input type="text" name="lebar" />
            <br>
            <input type="submit" name="count" value="count" />
        </form>
        <br>
        <label>BERIKUT LUAS YANG ANDA CARI</label>
        <?php
                    if (isset($_POST['count'])) {
                        // echo "This is Button1 that is selected";
                    }
        ?>
        <div>
            <?php break; ?>
        <?php
                case 5: ?>
        </div>
        <label>JAJARAN GENJANG</label>
        <form method="post">
            <label>ALAS</label>
            <input type="text" name="ALAS" />
            <br>
            <label for="">TINGGI</label>
            <input type="text" name="TINGGI" />
            <br>
            <input type="submit" name="count" value="count" />
        </form>
        <br>
        <label>BERIKUT LUAS YANG ANDA CARI</label>
        <?php
                    if (isset($_POST['count'])) {
                        // echo "This is Button1 that is selected";
                    }
        ?>
        <div>
            <?php break; ?>
    <?php endswitch; ?>
        </div>
    </div>
</body>

</html>