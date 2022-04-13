<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = (int)$_POST["nilai"];
}
if (isset($_POST['tambah'])) {
    $nilai += 1;
}

if (isset($_POST['kurang'])) {
    $nilai -= 1;
}

?>
<!DOCTYPE html>
<html>
<head></head>
<body>
    <?php
    if (empty($nilai)) : ?>
        <form action="" method="post">
            Jumlah Bintang: <input type="text" name="nilai">
            <button type="submit" name="masuk">Masukkan Nilai</button>
        </form>
    <?php
    endif;
    if (!empty($nilai)) :?>
        jumlah bintang = <?= $nilai; ?> <br>
        <?php
        for ($i = 0; $i < $nilai; $i++) {
            echo '<img src="star-images-9441.png" widht="60px" height="60px">';
        }?>
        <form action="" method="post">
            <input type="text" name="nilai" value="<?= $nilai ?>" hidden>
            <button type="submit" name="tambah" value="tambah">tambah</button>
            <button type="submit" name="kurang" value="kurang">kurang</button>
        </form>
    <?php endif; ?>
</body>
</html>