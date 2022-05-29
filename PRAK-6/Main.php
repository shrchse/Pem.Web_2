<?php session_start();
if(!isset($_SESSION['nomor_member'])){
    echo "<script>;
        location='ErrorPage.php'</script>";
}
$name = $_SESSION['nama_member']?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-color:azure;
            }
            table{
                border: 1px solid white;
                margin-left: auto;
                margin-right: auto;
                padding: 200px;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                border-radius: 15px;
                background-color: aliceblue;
                background-image: url(bg.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            input{
                width: 100%;
            }
            td{
                width: 100px;
                height: 100px;
                border: 1px solid beige;
                background-color: white;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                border-radius: 4px;
                padding-right: 50px;
                padding-left: 50px;
                text-align: center;
            }
            button{
                background-color: white;
                border: white;
            }
            h1{
                text-align: center;
            }
            .btn-cls{
                border: 0.5px solid black;
                border-radius: 6px;
                padding: 5px;
                margin-left: 30px;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            .btn-cls:hover{
                border: 0.5px solid black;
                padding: 5px;
                margin-left: 30px;
                background-color: red;
                color: azure;
            }
        </style>
    </head>
    <body>
     <table>
     <th><h1 style="color:white;">Modul 5 Praktikum WEB II</h1></th>
     <td><a href="Buku.php"><button><h1>Daftar Buku</h1></button></a></td>
     <td><a href="Member.php"><button><h1>Daftar Member</h1></button></a></td>
     <td><a href="Peminjaman.php"><button><h1>Jadwal Peminjaman</h1></button></a></td>
     </table>
    <h2>Selamat Datang <?php echo htmlspecialchars($name);?>
    <a href="Logout.php"><button class="btn-cls" type="submit">Logout</button></a></h2>

    </body>
</html>