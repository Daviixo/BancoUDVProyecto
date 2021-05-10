<?php

    function updateHistorialPago($finalid,$finalamount){
        
        try {

            $_SERVER = "localhost";
            $username = "usuario";
            $password = "DavincianosA*2021a";
            $database = "bancoaplicaciones";
            $today = date("F j, Y, g:i a");
            $credit_id = $_GET['creditid'];
            $credit_amount = $_GET['amounttopay'];
    
            $action = "Credit payment";
            $email = $_SESSION['username'];
    
            var_dump($credit_id);
            var_dump($credit_amount);
    
            echo $credit_id + ' > Credit ID\n';
            echo $credit_amount + ' > Credit amount';
    
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $conn = new PDO("mysql:host=$_SERVER;dbname=$database", $username, $password, $opciones);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connected to $database successfully.";
            echo "---\n";
            var_dump($credit_id);
            var_dump($credit_amount);

            $sql = "INSERT INTO historial (user,credit_id,action_taken,credit_amount,date_time) 
            VALUES (:user,:credit_id,:action_taken,:credit_amount,:date_time)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':user', $email);
            $stmt->bindParam(':credit_id', $credit_id);
            $stmt->bindParam(':action_taken', $action);
            $stmt->bindParam(':credit_amount', $credit_amount);
            $stmt->bindParam(':date_time', $today);
            $stmt->execute();
 
            if ($stmt->execute()) {
                
                $message = 'insert into historial';
                echo $message;
                
            }print $stmt->errorCode();
        } catch (PDOException $e) {
            echo 'Error: ' + $e->getMessage();
        }
    }
    
    //updateHistorialPago($_GET['creditid'],$_GET['amounttopay']);
    updateHistorialPago('1','2');
?>  