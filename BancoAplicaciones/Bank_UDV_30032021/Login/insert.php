<?php 

require "database.php";
$input = json_decode(file_get_contents('php://input'), true);
$message='';
$dpiTest=$_POST['dpi_usuario'];

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

    echo '<script type="text/javascript"> alert("'.$dpiTest.'")</script>';

    if($stmt->execute()){
        $message= 'Successfully created new user';
        echo '<script>alert("Successfully created new user")</script>';
        

        //$sql = "SELECT id_DetalleUsuario FROM Detalle_Usuario WHERE dpi_usuario = :dpi_usuario"; 
        
        echo $input['dpi_usuario'];

        //$sql = "INSERT INTO Usuario (email_usuario,password,id_DetalleUsuario)
        //VALUES (:email_usuario,:password,:id_DetalleUsuario)";
        
        //$password= password_hash($input['password'], PASSWORD_BCRYPT);
        //$stmt->bindParam(':password',$password);

        //ESTO DE AQUI ABAJO JODE TODO. NO TOCAR!!!!! <================= FUE ARMANDO... xD
        // $last_id = $conn->insert_id;
        // echo '<script>alert("ID is:"' .$last_id '")</script>';
        // echo "New record created successfully. Last inserted ID is: " . $last_id;
    
    }else {
        $message='Sorry thre must have been an issue creating your password';
        echo $message;
    }
}


?>