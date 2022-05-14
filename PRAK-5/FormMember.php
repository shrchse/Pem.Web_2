<?php require('./Model.php');
if(isset($_GET['id_member'])){
    editMember();
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
            <table>
                <td>
                <h1>Form Member</h1>
                <form action="" method="POST">
                <label>Nama :</label> <br>
                <input type="text" name="nama" <?php echo (isset($_GET['id_member'])) ? "value = " . $res[0]["nama_member"] . "" : "value = '' "; ?> required> <br>
                <label>Nomor Member : </label> <br>
                <input type="text" name="no_member" <?php echo (isset($_GET['id_member'])) ? "value = " . $res[0]["nomor_member"] . "" : "value = '' "; ?> required> <br>
                <label>Alamat : </label> <br>
                <textarea name="alamat" cols="30" rows="10" <?php echo (isset($_GET['id_member'])) ? "value = " . $res[0]["alamat"] . "" : "value = '' "; ?> required></textarea> <br>
                <label>Tanggal Daftar : </label> <br>
                <input type="datetime-local" name="tgl_daftar" <?php echo (isset($_GET['id_member'])) ? "value = ".date('Y-m-d\TH:i', strtotime($res[0]["tgl_mendaftar"]))."" : "value = '' "; ?> required> <br>
                <Label>Tanggal Terakhir Bayar : </Label> <br>
                <input type="date" name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ? "value = " . $res[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required> <br> <br>
                <br>
                <?php 
                    if(isset($_GET['id_member'])){
                        echo '<button type ="submit" name="update"> Update </button>';
                    } else {
                        echo '<button type ="submit" name ="submit"> Add </button>';
                    }
                ?>
                </form>
                </td>
            </table>
    </body>
</html>
<?php 
    if(isset($_POST['submit'])){
        $format = date_create($_POST['tgl_daftar']);
        $formated = date_format($format, "Y-m-d H:i:s");
        tambahMember($_POST['nama'], $_POST['no_member'], $_POST['alamat'], $formated, $_POST['tgl_terakhir_bayar']);
    } 
    if(isset($_POST['update'])){
        $tgl_daftar = date('Y-m-d H:i:s', strtotime($_POST['tgl_daftar']));
        updateMember($_GET['id_member'], $_POST['nama'], $_POST['no_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
?>