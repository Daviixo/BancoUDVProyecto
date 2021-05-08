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

    $sql = "SELECT * FROM Detalle_Usuario";
    $resultado=mysqli_query($conex,$sql);

    if ($resultado) { // si el resultado es igual a true
        while ($row = $resultado->fetch_array()) { // hacemos un array con los datos que obtenemos de la consulta
            $id = $row['id_DetalleUsuario'];
            $nombre = $row['primerNombre'];
            $email = $row['email_usuario'];
            $password = $row['password'];
            // verificar contraseña cifrada y validacion de correo 
            if($email_usuario==$email){
              
              $contador++;

            }  
          }

          if ($contador>0){

            echo "<script>console.log('ID is: " . $id . "' );</script>";
            }

        }
      
    //$sql = "INSERT INTO Usuario (email_usuario,password,id_DetalleUsuario
    //VALUES(:email_usuario,:password,id_DetalleUsuario)";
    

?>