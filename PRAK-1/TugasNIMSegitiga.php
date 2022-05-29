<!DOCTYPE html>
<html>
    <head>
        <title>
            2010817210028 - Oling Anugrah Fajar Pratama
        </title>
    </head>
    <body>
    <form action="" method="post">
        <input type="text" name="nim">
        <input type="submit" value="Print Segitiga">
    </form>
    <?php
    error_reporting(0);
    $input = $_POST ['nim'];
    ?>
    <h2>NIM :<?php echo $input ?></h2>
    <h3>Segitiga NIM</h3>
    <?php
    $output = (str_split($input));

        for($i=0; $i<=count($output) -1; $i++){   
            for($j=0; $j<=$i; $j++){   
                echo $output[$j]; 
            }  
            echo '<br>';   
        }  
        for($i=count($output) -1; $i>=0; $i--){   
            for($j=0; $j<=$i; $j++){  
                echo $output [$j];   
            }   
            echo '<br>';   
        }   
        ?>  
    </body>
</html> 