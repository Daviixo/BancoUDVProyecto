<?php

    echo $_GET['creditid'];
    echo $_GET['amounttopay'];

    function updateHistorialPago($finalid,$finalamount){
        
        $_SERVER = "localhost";
        $username = "usuario";
        $password = "DavincianosA*2021a";
        $database = "bancoaplicaciones";
        $today = date("F j, Y, g:i a");
        $credit_id = $_GET['creditid'];
        $credit_amount = $_GET['amounttopay'];

        $icreditid = (int)$credit_id;
        $icreditamount = (int)$credit_amount; 

        var_dump($icreditid);
        var_dump($icreditamount);

        $action = "Credit payment";
        $email = $_SESSION['username'];

        // if(isset($credit_id) && isset($credit_amount)){
        //     echo "ID y amount van NULL";
        //     exit();
        // }

        echo $credit_id + ' > Credit ID\n';
        echo $credit_amount + ' > Credit amount';

        //$final_credit_id = strval($credit_id);
        //$final_credit_amount = strval($credit_amount);

        //$conex = mysqli_connect($_SERVER, $username, $password, $database);

        try {
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $conn = new PDO("mysql:host=$_SERVER;dbname=$database", $username, $password, $opciones);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected to $database successfully.";
        } catch (PDOException $e) {
            die("connected failed:" . $e->getMessage());
        }

        try {

            $sql = "INSERT INTO historial (user,credit_id,action_taken,credit_amount,date_time) 
            VALUES (:user,:credit_id,:action_taken,:credit_amount,:date_time)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':user', $email);
            $stmt->bindParam(':credit_id', $icreditid);
            $stmt->bindParam(':action_taken', $action);
            $stmt->bindParam(':credit_amount', $icreditamount);
            $stmt->bindParam(':date_time', $today);
            $result = $stmt->execute();
            if ($result) {
                $message = 'insert into historial';
                echo $message;
                var_dump($result);
            }
        } catch (PDOException $e) {
            echo 'Error: ' + $e->getMessage();
        }
    }

    updateHistorialPago($_GET['creditid'],$_GET['amounttopay']);

?>