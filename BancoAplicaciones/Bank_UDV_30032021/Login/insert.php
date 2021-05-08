<?php 

require "database.php";
$input = json_decode(file_get_contents('php://input'), true);
$message='';

if(!empty($input["primerNombre"]) && !empty($input["email_usuario"])  && !empty($input["dpi_usuario"])  && !empty($input["password"])){
    $sql = "INSERT INTO Detalle_Usuario (primerNombre,segundoNombre,primerApellido,segundoApellido,tercerApellido,dpi_usuario,fecha_nacimiento, direccion) 
    VALUES (:primerNombre,:segundoNombre,:primerApellido,:segundoApellido,:tercerApellido,:dpi_usuario,:fecha_nacimiento,:direccion)";
    $stmt = $conn ->prepare($sql);
    $stmt->bindParam(':primerNombre',$input['primerNombre']);
    $stmt->bindParam(':segundoNombre',$input['segundoNombre']);
    $stmt->bindParam(':primerApellido',$input['primerApellido']);
    $stmt->bindParam(':segundoApellido',$input['segundoApellido']);
    $stmt->bindParam(':tercerApellido',$input['tercerApellido']);
    $stmt->bindParam(':dpi_usuario',$input['dpi_usuario']);
    $stmt->bindParam(':fecha_nacimiento',$input['fecha_nacimiento']);
    $stmt->bindParam(':direccion',$input['direccion']);

    if($stmt->execute()){
        $message= 'Successfully created new user';
        echo '<script>alert("Successfully created new user")</script>';

        $last_id = $conn->insert_id;
        
        echo '<script>alert("ID is:"' .$last_id '")</script>';

        echo "New record created successfully. Last inserted ID is: " . $last_id;
    
    }else {
        $message='Sorry thre must have been an issue creating your password';
        echo $message;
    }
}


?>