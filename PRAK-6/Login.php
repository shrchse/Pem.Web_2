<?php 
include 'Koneksi.php';
if(isset($_POST['login'])){
    $nm_input = $_POST['nomor_member'];
    $p_input = $_POST['password'];
    $query = "SELECT * FROM member WHERE nomor_member='$nm_input' AND password='$p_input'";
    $run = mysqli_query($connect, $query);
        if(mysqli_num_rows($run)>=1){
            $sql = mysqli_fetch_assoc($run);
            session_start();
            $_SESSION['nomor_member'] = $sql['nomor_member'];
            $_SESSION['password'] = $sql['password'];
            $_SESSION['nama_member'] = $sql['nama_member'];
            header("location: Main.php");
        } else {
            echo "User Number atau Password yang Anda masukan Tidak Sesuai";
            echo "Kembali ke halaman Login..";
            header("refresh:5; url=FormLogin.php");    
        }
}
?>

