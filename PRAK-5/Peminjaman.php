<?php
require('./Model.php');
if(isset($_GET['id_peminjaman'])){
    hapusPeminjaman($_GET['id_peminjaman']);
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
    <title>Peminjaman</title>
</head>
<body>
    <table>
        <tr>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
        </tr>
        <?= show("peminjaman") ?>
    </table> <br>
    <a href="FormPeminjaman.php"><button>Tambah Peminjaman</button></a>
</body>
</html>