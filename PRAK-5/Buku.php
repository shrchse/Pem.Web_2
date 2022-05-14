<?php
require('./Model.php');
if(isset($_GET['id_buku'])){
    hapusBuku($_GET['id_buku']);
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
    <title>Buku</title>
</head>
<body>
    <table>
        <tr>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
        </tr>
        <?= show("buku") ?>
    </table> <br>
    <a href="FormBuku.php"><button>Tambah Buku</button></a>
</body>
</html>