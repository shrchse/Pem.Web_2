<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        function inputSort($myArray){
            for ($i = 0; $i < count($myArray); $i++){
                $input = $myArray[$i];
                $j = $i - 1;
                while ($j >= 0 && $myArray[$j] > $input) {
                    $myArray[$j + 1] = $myArray[$j];
                    $j--;
                }
                $myArray[$j + 1] = $input;
            }
            return $myArray;
        }
        ?>
        <form action="" method="post">
            Nama 1 : <input type="text" name="name_1"> <br>
            Nama 2 : <input type="text" name="name_2"> <br>
            Nama 3 : <input type="text" name="name_3"> <br>
            <input type="submit" value="Urutkan">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $output = array();
            $output[] = $_POST['name_1'];
            $output[] = $_POST['name_2'];
            $output[] = $_POST['name_3'];
            foreach(inputSort($output) as $each){
                echo $each;
                echo "<br>";
            }
        }
        ?>
    </body>
</html>