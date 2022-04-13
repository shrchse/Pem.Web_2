<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
            Batas Bawah : <input type="text" name="lower"> <br>
            Batas Atas : <input type="text" name="upper"> <br>
            <button type="submit" name="submit">Cetak</button>
        </form>
        
        <?php
        if(isset($_POST["submit"])) :
            $lower = $_POST['lower'];
            $upper = $_POST['upper'];
            do{
                $check = $lower+7;
                if($check % 5 != 0){
                echo "$lower ";
                $lower += 1;
                } else {
                    echo '<img src="star-images-9441.png" widht="12px" height="12px">';
                    $lower += 1;
                }
            } while ($lower <= $upper);
        endif;
        ?>
    </body>
</html>