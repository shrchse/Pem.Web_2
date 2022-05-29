<?php session_start();
if(!isset($_SESSION['nomor_member'])){
    echo "<script>;
        location='ErrorPage.php'</script>";
}
require('./Model.php');
if(isset($_GET['id_peminjaman'])){
    editPeminjaman();
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
                <h1>Form Peminjaman</h1>
                <form action="" method="POST" class="white">
                <label>Tanggal Peminjaman :</label> <br>
                <input type="date" name="tgl_peminjaman" <?php echo (isset($_GET['id_peminjaman'])) ?"value = " . $res[0]["tgl_peminjaman"] . "": "value = '' "; ?> required> <br>
                <label>Tanggal Pengembalian : </label> <br>
                <input type="date" name="tgl_pengembalian" <?php echo (isset($_GET['id_peminjaman'])) ?"value = " . $res[0]["tgl_pengembalian"] . "" : "value = '' "; ?> required> <br>
                <br>
                <?php
                if(isset($_GET['id_peminjaman'])){
                        echo '<button type ="submit" name="update"> Update </button>';
                    } else {
                        echo '<button type ="submit" name ="submit"> Add </button>';
                    } ?>               
                </form>
                </td>
            </table>
        </section>
    </body>
</html>
<?php
    if(isset($_POST['submit'])){
        tambahPeminjaman($_POST['tgl_peminjaman'], $_POST['tgl_pengembalian']);
    }
    if(isset($_POST['update'])){
        updatePeminjaman($_GET['id_peminjaman'], $_POST['tgl_peminjaman'], $_POST['tgl_pengembalian']);
    }
?>
