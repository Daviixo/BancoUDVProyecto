<?php 
session_start();
$inc = include("database.php");
$pass=$_POST['password'];
$email_usuario=$_POST['email_usuario'];
$contador=0;
if (isset($pass)){
  //header("Location: Login.php");
  echo '<script language="javascript">alert("User and/or password are incorrect. Please try again!");window.location.href="Login.php"</script>';
 
}

if ($inc) {
	$consulta = "SELECT * FROM Usuario LEFT JOIN Detalle_Usuario ON Detalle_Usuario.id_DetalleUsuario = Usuario.id_DetalleUsuario;";
	$resultado = mysqli_query($conex, $consulta);
	
  if ($resultado) { // si el resultado es igual a true
		while ($row = $resultado->fetch_array()) { // hacemos un array con los datos que obtenemos de la consulta
      $email = $row['email_usuario'];
      $password = $row['password'];
      $dpi = $row['dpi_usuario'];
      // verificar contraseña cifrada y validacion de correo 
      $_SESSION['dpi_usuario'] = $dpi;
      if(password_verify($pass, $password )&&($email_usuario==$email)){
        echo '<script language="javascript">alert("Login successfully!");window.location.href="Login.php"</script>';
        $contador++;
        $_SESSION['username']=$email_usuario;
      }  
    }
    
    if ($contador>0){
    
    header("Location: ../index-1.php");
    echo '<script language="javascript">alert("Entro a CONTADOR>0!");window.location.href="Login.php"</script>';
    }
    
    if($contador<=0){
      echo '<script language="javascript">alert("(CONTADOR<=0) Usuario o contraseña no son correctos");window.location.href="Login.php"</script>';
    }
	}
}

?>
