<?php session_start();
if(!isset($_SESSION['nomor_member'])){
    echo "<script>;
        location='ErrorPage.php'</script>";
}
require('./Model.php');
if(isset($_GET['id_buku'])){
    editBuku();
}
?>
<DOCTYPE html>
<html>
    <header>
        <style>
            body{
                background-color:aliceblue;
            }
            table{
                border: 1px solid;
                margin-left: auto;
                margin-right: auto;
                padding: 5%;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                border-radius: 15px;
            }
            input{
                width: 100%;
            }
            td{
                width: 500px;
            }
        </style>
    </header>
    <body>
        <section>
            <table>
                <td>
                    <h1>Form Buku</h1>
                    <form action="" method="POST">
                    <label>Judul Buku :</label> <br>
                    <input type="text" name="judul_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res[0]["judul_buku"] . "" : "value = '' "; ?> required> <br>
                    <label>Penulis : </label> <br>
                    <input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res[0]["penulis"] . "" : "value = '' "; ?> required> <br>
                    <label>Penerbit : </label> <br>
                    <input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res[0]["penerbit"] . "" : "value = '' "; ?> required> <br>
                    <label>Tahun Terbit : </label> <br>
                    <input type="text" name="tahun_terbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res[0]["tahun_terbit"] . "" : "value = '' "; ?> required> <br>
                    <br> <?php
                    if(isset($_GET['id_buku'])){
                        echo '<button type ="submit" name="update"> Update </button>';
                    } else {
                        echo '<button type ="submit" name ="submit"> Add </button>';
                    } ?>
                </td>
                </form>
            </table>
        </section>
    </body>
</html>
<?php
    if(isset($_POST['submit'])){
        tambahBuku($_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    }
    if(isset($_POST['update'])){
        updateBuku($_GET['id_buku'], $_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    }
?>
