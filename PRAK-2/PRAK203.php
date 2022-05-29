<!DOCTYPE html>
<?php
error_reporting(0);
  if(isset($_POST["submit"])){
    $input = $_POST['in'];
    $suhu = $_POST['suhu'];
    $convert = $_POST['convert'];
  
    if($suhu == $convert){
      $temp = $input;
      if ($satuan = $suhu[0]);
    } else {
        if($suhu == "Celcius" && $convert == "Fahrenheit"){
          $temp = ((9/5)*$input)+32;
        } else if ($suhu == "Celcius" && $convert == "Rheamur"){
          $temp = (4/5)*$input;
        } else if ($suhu == "Celcius" && $convert == "Kelvin"){
          $temp = $input + 273;
        } else if ($suhu == "Fahrenheit" && $convert == "Celcius"){
          $temp = (5/9)*($input - 32);
        } else if ($suhu == "Fahrenheit" && $convert == "Rheamur"){
          $temp = 4/9 * ($input - 32);
        } else if ($suhu == "Fahrenheit" && $convert == "Kelvin"){
          $temp = 5/9 * ($input-32) + 273;
        } else if ($suhu == "Rheamur" && $convert == "Celcius"){
          $temp = (5/4) * $input;
        } else if ($suhu == "Rheamur" && $convert == "Fahrenheit"){
          $temp = (9/4)*$input +32;
        } else if ($suhu == "Rheamur" && $convert == "Kelvin"){
          $temp = (5/4)*$input +273;
        } else if ($suhu == "Kelvin" && $convert == "Celcius"){
          $temp = $input - 273;
        } else if ($suhu == "Kelvin" && $convert == "Fahrenheit"){
          $temp = 4/5 * ($input - 273);
        } else if ($suhu == "Kelvin" && $convert == "Rheamur"){
          $temp = 9/5 * ($input - 273)+32;
        } $hasil = $temp;
        $satuan = $convert[0];
      }
  }
?>
<html>
  <head></head>

  <body>
    <form action="" method="post">
    Nilai : <input type="Text" name="in" value=<?php echo $input?> > <br>
    Dari : <br>
    <input type="radio" name="suhu" value="Celcius"> Celcius <br>
    <input type="radio" name="suhu" value="Fahrenheit"> Fahrenheit <br>
    <input type="radio" name="suhu" value="Rheamur"> Rheamur <br>
    <input type="radio" name="suhu" value="Kelvin"> Kelvin <br>
    Ke : <br>
    <input type="radio" name="convert" value="Celcius"> Celcius <br>
    <input type="radio" name="convert" value="Fahrenheit"> Fahrenheit <br>
    <input type="radio" name="convert" value="Rheamur"> Rheamur <br>
    <input type="radio" name="convert" value="Kelvin"> Kelvin <br>

    <input type="submit" name="submit" value="Konversi">
    <h2>Hasil Konversi = <?php echo number_format($temp,1) ?>
    <?php echo "° $satuan" ?> </h2>
    </form>
  </body>
</html>