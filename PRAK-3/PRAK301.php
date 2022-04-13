<!DOCTYPE html>
<html>
    <style>
        .ganjil{
            color: red;
        }
        .genap{
            color:green;
        }
    </style>
    <head>
        <title>Prak 301</title>
    </head>
    <body>
        <form action="" method="post">
        <input type="text" name="input">
        <input type="submit" value="submit">
        </form>
    </body>
</html>
    <?php
    if(isset($_POST['input'])){
        $number = $_POST['input'];
        $count = 0;

        while($count < $number){
            $count += 1;
            if(fmod($count, 2)){
                echo "<div class='ganjil'>Peserta Ke-$count</div> <br>";
            } else {
                echo "<div class='genap'> Peserta Ke-$count</div> <br>";
            }
        }
    }
    ?>