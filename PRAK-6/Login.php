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


    // session_start();
    // include 'Koneksi.php';
    // $member = $_POST['nomor_member'];
    // $pass = $_POST['password'];

    // $command = connect()->prepare ("SELECT * FROM member WHERE nomor_member = :member");
    // $command -> bindParam('Member', $member, PDO::PARAM_STR);
    // $command -> execute();

    // $data = $command->fetch();
    // if($data){
    //     if(password_verify($pass, $data["password"])){
    //         $_SESSION["nomor_member"] = $data["member"];
    //         $_SESSION["nama_member"] = $hasil['nama'];
    //         header("Location: Main.php");  
    //     } else echo "test";
    // } else {
    //     echo "Nomor Member atau Password yang Anda masukan salah";
    //     header("refresh:3; url=FormLogin.php");
    // }
?>

