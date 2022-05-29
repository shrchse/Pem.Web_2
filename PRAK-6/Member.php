<?php session_start();
if(!isset($_SESSION['nomor_member'])){
    echo "<script>;
        location='ErrorPage.php'</script>";
}
require('./Model.php');
if(isset($_GET['id_member'])){
    hapusMember($_GET['id_member']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
            body{
                background-color:aliceblue;
            }
            table{
                border: 1px solid;
                margin-left: auto;
                margin-right: auto;
                padding: 2%;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                border-radius: 15px;
            }
            input{
                width: 100%;
            }
            td{
                border: 1px solid black;
                width: 500px;
            }
    </style>
    <title>Member</title>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Nomor Member</th>
            <th>Alamat</th>
            <th>Tanggal Daftar</th>
            <th>Tanggal Bayar</th>
        </tr>
        <?= show("member") ?>
    </table> <br>
    <a href="FormMember.php"><button>Tambah Data</button></a>
</body>
</html>