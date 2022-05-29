<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="" method="POST">
        Nilai : <input type="text" name="bil" > <br>
        <input type="submit" value="Konversi">
        </form>
        <h2>
        <?php
        error_reporting(0);
            $bilangan = $_POST['bil'];
            if ($bilangan < 0 || $bilangan > 999){
                echo "Hasil : Anda Menginput Melebihi Limit Bilangan";
            } else if ($bilangan == 0){
                echo "Hasil : Nol";
            } else if ($bilangan >= 1 && $bilangan < 10){
                echo "Hasil : Satuan";
            } else if ($bilangan > 10 && $bilangan < 20){
                echo "Hasil : Belasan";
            } else if ($bilangan == 10 || $bilangan >= 20 && $bilangan < 100){
                echo "Hasil : Puluhan";
            } else if ($bilangan >= 100){
                echo "Hasil : Ratusan";
            }
        ?>
        </h2>
    </body>
</html>