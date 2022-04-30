<!DOCTYPE html>
<html>
    <head>
        <style>
            table, tr, td{
                border: 1px solid;
                padding: 5px;
            }
            table {
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <form method="POST">
            Panjang : <input type="text" name="panjang"> <br>
            Lebar : <input type="text" name="lebar"> <br>
            Nilai : <input type="text" name="nilai"> <br>
            <button type="submit" name="button">Cetak</button>
        </form>
        <?php 
            if (isset($_POST['button'])){
                $panjang =(int) $_POST['panjang'];
                $lebar =(int) $_POST['lebar'];
                $dataArray = $_POST['nilai'];
                $eachData = explode(" ", $dataArray);
                echo "<br>";
                if($panjang * $lebar == sizeof($eachData)){
                ?> <table> <?php $x = 0;
                    for ($i = 1; $i <= $panjang; $i++){
                        echo "<tr>";
                        for ($j = 1; $j <= $lebar; $j++){
                            echo "<td> $eachData[$x]";
                            $x++;
                        }
                    }
                echo "</table>";
                } else {
                    echo "Panjang nilai tidak sesuai dengan ukuran matriks"; }
            }
        ?>
    </body>
</html>