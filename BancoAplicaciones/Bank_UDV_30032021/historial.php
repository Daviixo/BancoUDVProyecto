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
            $stmt->bindParam(':user', $email,PDO::PARAM_STR);
            $stmt->bindParam(':credit_id', 1);
            $stmt->bindParam(':action_taken', $action,PDO::PARAM_STR);
            $stmt->bindParam(':credit_amount', 2);
            $stmt->bindParam(':date_time', $today,PDO::PARAM_STR);
            $result = $stmt->execute();
            var_dump($result);
            if ($result) {
                $message = 'insert into historial';
                echo $message;
                
            }
        } catch (PDOException $e) {
            echo 'Error: ' + $e->getMessage();
        }
    }
    
    updateHistorialPago($_GET['creditid'],$_GET['amounttopay']);
