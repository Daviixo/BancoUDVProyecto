<?php 

require "database.php";
$input = json_decode(file_get_contents('php://input'), true);
$message='';
$dpiTest=$_POST['dpi_usuario'];
$result='';
$temp='';
$finalResult='';

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

    echo '<script type="text/javascript">console.log("'.$dpiTest.'")</script>';

    if($stmt->execute()){
        $message= 'Successfully created new user';
        echo '<script>alert("Successfully created new user")</script>';

        
    }else {
        $message='Sorry thre must have been an issue creating your password';
        echo $message;
    }
}

    $sql = "SELECT id_DetalleUsuario FROM Detalle_Usuario WHERE dpi_usuario = " .$dpiTest;
    $result = $conn->prepare($sql);
    $result->bindParam(':id_DetalleUsuario', $temp);
    $result->execute();
    $result->bindValue(':id_DetalleUsario', $finalResult); 

    if($result->execute()){
        $message= 'Query from ID was successful';
        echo "<script>console.log('ID from query is: " . $finalResult . "' );</script>";

        
    }else {
        $message='There was an error, please try again.';
        echo $message;
    }

    //$sql = "INSERT INTO Usuario (email_usuario,password,id_DetalleUsuario
    //VALUES(:email_usuario,:password,id_DetalleUsuario)";
    

?>