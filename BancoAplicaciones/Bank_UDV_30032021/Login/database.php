<?php 
$_SERVER= "localhost";
$username= "root";
$password= "";
$database= "bancoaplicaciones";

$conex = mysqli_connect("localhost","root","","bancoaplicaciones");

try{
    $conn= new PDO("mysql:host=$_SERVER;dbname=$database",$username,$password);
   // echo "Connected to $database successfully.";
}catch(PDOException $e){
    die("connected failed:".$e->getMessage());
}

?>