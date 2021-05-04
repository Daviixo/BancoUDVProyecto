<?php 
$_SERVER= "174.138.46.182";
$username= "root";
$password= "DavincianosA*2021a";
$database= "bancoaplicaciones";

$conex = mysqli_connect($_SERVER,"root",$password,"bancoaplicaciones");

try{
    $conn= new PDO("mysql:host=$_SERVER;dbname=$database",$username,$password);
   // echo "Connected to $database successfully.";
}catch(PDOException $e){
    die("connected failed:".$e->getMessage());
}

?>