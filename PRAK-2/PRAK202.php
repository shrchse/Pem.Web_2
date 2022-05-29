<?php
    $nameError = $nimError = $GenError = "";
    $name = $nim = $Gen = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["nama"])){
            $nameError = "Nama tidak boleh kosong";
        } else {
            $name = $_POST["nama"];
        }

        if(empty($_POST["NIM"])){
            $nimError = "NIM tidak boleh kosong";
        } else {
            $nim = $_POST["NIM"];
        }

        if(empty($_POST["gender"])){
            $GenError = "Jenis kelamin tidak boleh kosong";
        } else {
            $Gen = $_POST["gender"];
        }
    }
?>
<!DOCTYPE html>
<html>
    <style>
        .error {
            color: red;
        }
    </style>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
    Nama : <input type="text" name="nama" value="<?php echo $name ?>">
    <span class="error"> * <?php echo $nameError; ?></span> <br>
    NIM  : <input type="text" name="NIM" value="<?php echo $nim ?>">
    <span class="error"> * <?php echo $nimError; ?> </span> <br>
    Jenis Kelamin :
        <span class="error"> * <?php echo $GenError;?></span> <br>
        <input type="radio" id="lakilaki" name="gender" value="Laki-Laki">Laki-Laki<br>
        <input type="radio" id="perempuan" name="gender" value="Perempuan">Perempuan <br>  
    <input type="submit" name="Submit" value="Submit"> <br>
    </form>

    <?php
    if(!empty($name) && !empty($nim) && !empty($Gen)){
        echo $name;
        echo "<br>";
        echo $nim;
        echo "<br>";
        echo $Gen;
    }
    ?>
</html>