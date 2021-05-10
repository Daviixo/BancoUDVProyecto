<?php

    echo $_GET['creditid'];
    echo $_GET['amounttopay'];

    function updateHistorialPago($finalid,$finalamount){
        
        $_SERVER = "localhost";
        $username = "usuario";
        $password = "DavincianosA*2021a";
        $database = "bancoaplicaciones";
        $today = date("F j, Y, g:i a");
        $credit_id = $finalid;
        $credit_amount = $finalamount;

        $icreditid = (int)$finalid;
        $icreditamount = (int)$finalamount; 

        $action = "Credit payment";
        $email = $_SESSION['username'];

        // if(isset($credit_id) && isset($credit_amount)){
        //     echo "ID y amount van NULL";
        //     exit();
        // }

        echo $credit_id + " > Credit ID";
        echo $credit_amount + " > Credit amount";

        //$final_credit_id = strval($credit_id);
        //$final_credit_amount = strval($credit_amount);

        //$conex = mysqli_connect($_SERVER, $username, $password, $database);

        try {
            $conn = new PDO("mysql:host=$_SERVER;dbname=$database", $username, $password);
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

            if ($stmt->execute()) {
                $message = 'insert into historial';
                echo $message + " - Credit ID: " + $credit_id;
            }
        } catch (PDOException $e) {
            echo 'Error: ' + $e->getMessage();
        }
    }

    updateHistorialPago($_GET['creditid'],$_GET['amounttopay']);

?>