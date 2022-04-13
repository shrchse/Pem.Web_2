<!DOCTYPE html>
<html>
    <body>
        <form method="POST">
            <input type="text" name="string">
            <button type="submit" name="submit">submit</button>
        </form>
        <?php 
        if(isset($_POST['submit'])) : 
        $string = $_POST['string'];
        $split_string = str_split($string);
        $split_count = count($split_string);
        $i = 0;
        do{
            for ($j = 1; $j < $split_count; $j++){
                if ($j == 1){
                    echo strtoupper($split_string[$i]);
                }
                echo strtolower($split_string[$i]);
            }
            $i++;
        } while ($i < $split_count);
        endif;
        ?> 
    </body>
</html>