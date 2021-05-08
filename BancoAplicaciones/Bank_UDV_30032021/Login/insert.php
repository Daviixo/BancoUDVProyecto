<?php 

require "database.php";
$input = json_decode(file_get_contents('php://input'), true);
$message='';

if(!empty($input["nombre_usuario"]) && !empty($input["email_usuario"])  && !empty($input["dpi_usuario"])  && !empty($input["password"])){
    $sql = "INSERT INTO Usuario (nombre_usuario,primerApellido,segundoApellido,tercerApellido,email_usuario,dpi_usuario,fechaNacimiento, direccion, password) 
    VALUES (:nombre_usuario,:primerApellido, :segundoApellido,:tercerApellido,:email_usuario,:dpi_usuario,:fechaNacimiento,:direccion :password )";
    $stmt = $conn ->prepare($sql);
    $stmt->bindParam(':nombre_usuario',$input['nombre_usuario']);
    $stmt->bindParam(':primerApellido',$input['primerApellido']);
    $stmt->bindParam(':segundoApellido',$input['segundoApellido']);
    $stmt->bindParam(':tercerApellido',$input['tercerApellido']);
    $stmt->bindParam(':email_usuario',$input['email_usuario']);
    $stmt->bindParam(':alias_usuario',$input['dpi_usuario']);
    $stmt->bindParam(':fechaNacimiento',$input['fechaNacimiento']);
    $stmt->bindParam(':direccion',$input['direccion']);
    
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