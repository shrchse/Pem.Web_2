<!DOCTYPE html>
<html>
    <head>
        <title>Prak 302</title>
    </head>
    <body>
        <form action="" method="post">
        Tinggi : <input type="text" name="input"> <br>
        Alamat Gambar : <input type="url" name="url" > <br>
        <input type="submit" name="submit" value="Cetak">
        </form>
<?php if(isset($_POST['submit'])) : 
    $input = $_POST['input'];
    $url_out = base64_encode(file_get_contents($_POST['url']));
    $i = 0;
    while ($i < $input){
        $j = 0;
        while ($j < $i){
            echo "&nbsp &nbsp &nbsp";
            $j++;
        }
        $j = 0;
        while ($j < $input-$i){
            echo '<img src ="data:image/png;base64, '.$url_out.'"
            widht = "20px" height = "20px">';
            $j++;
        }
        $i++;
        echo "<br>";
    }
    endif;
?>
    </body>
</html>