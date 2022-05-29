<?php 
    function connect(){
        try{
            $dbConnect = new PDO(
                'mysql:host=localhost;dbname=web-5','root','',
                array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true)
            );
        } catch(PDOException $e){
            print "Connection Problem : ". $e ->getMessage()."<br/>";
            die();
        }
        return $dbConnect;
    }

    $connect = mysqli_connect('localhost', 'root', '', 'web-6');
?>