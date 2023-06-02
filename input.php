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
            echo "<title>COBLOS PAK MAYADI, HIDUP PAK MAYADI</title>";
            break;
    }
    ?>
</head>

<body>
    <div class="container">
        <a href="index.php">BACK TO MAIN PAGE</a>
        <div>
            <?php switch ($bentuk):
                case 1: ?>
                    <label>Lingkaran</label>
                    <form method="post" action="proses.php">
                        <label>jari-jari</label>
                        <input type="text" name="jari2" />
                        <br>
                        <input type="hidden" name="bentuk" value="1">
                        <input type="submit" name="count" value="Count" />
                    </form>
                    <?php break; ?>
                <?php
                case 2: ?>
                    <label>SEGITIGA SIKU-SIKU</label>
                    <form method="post" action="proses.php">
                        <label>ALAS</label>
                        <input type="text" name="alas" />
                        <br>
                        <label for="">TINGGI</label>
                        <input type="text" name="tinggi" />
                        <br>
                        <input type="hidden" name="bentuk" value="2">
                        <input type="submit" name="count" value="Count" />
                    </form>
                    <?php break; ?>
                <?php
                case 3: ?>
                    <label>BUJUR SANGKAR</label>
                    <form method="post" action="proses.php">
                        <label>SISI</label>
                        <input type="text" name="sisi" />
                        <br>
                        <input type="hidden" name="bentuk" value="3">
                        <input type="submit" name="count" value="Count" />
                    </form>
                    <?php break; ?>
                <?php
                case 4: ?>
                    <label>PERSEGI PANJANG</label>
                    <form method="post" action="proses.php">
                        <label>PANJANG</label>
                        <input type="text" name="panjang" />
                        <br>
                        <label for="">LEBAR</label>
                        <input type="text" name="lebar" />
                        <br>
                        <input type="hidden" name="bentuk" value="4">
                        <input type="submit" name="count" value="Count" />
                    </form>
                    <?php break; ?>
                <?php
                case 5: ?>
                    <label>JAJARAN GENJANG</label>
                    <form method="post" action="proses.php">
                        <label>ALAS</label>
                        <input type="text" name="alas" />
                        <br>
                        <label for="">TINGGI</label>
                        <input type="text" name="tinggi" />
                        <br>
                        <input type="hidden" name="bentuk" value="5">
                        <input type="submit" name="count" value="Count" />
                    </form>
                    <?php break; ?>
            <?php endswitch; ?>
        </div>
        <div>
            <?php if (isset($luas)) : ?>
                <p>Luas: <?php echo $luas; ?></p>
            <?php endif; ?>
        </div>

    </div>
</body>

</html>