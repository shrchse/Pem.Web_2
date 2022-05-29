<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="" method="post">
            username : <input type="text" name="username"> <br>
            password : <input type="password" name="password"> <br>
            <button type="submit" name="submit">Kirim</button>
        </form>

        <?php
            if(isset($_POST["submit"])) {
                echo $_POST["username"];
            }
        ?>
    </body>
</html>