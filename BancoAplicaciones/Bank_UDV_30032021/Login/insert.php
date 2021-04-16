<?php 

require "database.php";
$input = json_decode(file_get_contents('php://input'), true);
$message='';

if(!empty($input["nombre_usuario"]) && !empty($input["email_usuario"])  && !empty($input["alias_usuario"])  && !empty($input["password"])){
    $sql = "INSERT INTO users (nombre,telefono, email, password) VALUES (:nombre,:telefono, :email, :password )";
    $stmt = $conn ->prepare($sql);
    $stmt->bindParam(':nombre',$input['nombre_usuario']);
    $stmt->bindParam(':email',$input['email_usuario']);
   // $stmt->bindParam(':alias_usuario',$input['alias_usuario']);
    $stmt->bindParam(':telefono',$input['telefono']);
   // $stmt->bindParam(':nivel',$input['nivel']);
    $password= password_hash($input['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password',$password);

    if($stmt->execute()){
        $message= 'Successfully created new user';
        echo '<script>alert("Successfully created new user")</script>';
    
    }else {
        $message='Sorry thre must have been an issue creating your password';
        echo $message;
    }
}


?>