<?php session_start();
	include("Koneksi.php");
	if(isset($_SESSION['nomor_member'])){
		echo "<script>alert('Anda sudah login!');
			window.location='Main.php';</script>";
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="box">
            <div class="login">Login to Your Account</div>
            <form action="Login.php" method="POST">
                <label for="username">User Number</label>
                <input type="text" name="nomor_member" id="username" > <br><br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password"> <br><br>
                <button type="submit" name="login" >Sign In</button> <br> 
            </form>
        </div>    
    </body>
</html>