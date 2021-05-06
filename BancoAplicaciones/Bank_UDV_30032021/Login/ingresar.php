<?php 
session_start();
$inc = include("database.php");
$pass=$_POST['password'];
$email_usuario=$_POST['email_usuario'];
$contador=0;
if (isset($pass)){
  //header("Location: Login.php");
  echo '<script language="javascript">alert(" Usuario y contraseña son necesarios para acceder");window.location.href="login.php"</script>';
 
}

if ($inc) {
	$consulta = "SELECT * FROM usuarios ";
	$resultado = mysqli_query($conex, $consulta);
	
  if ($resultado) { // si el resultado es igual a true
		while ($row = $resultado->fetch_array()) { // hacemos un array con los datos que obtenemos de la consulta
	    $id = $row['id'];
	    $nombre = $row['nombre'];
      $telefono = $row['telefono'];
      $email = $row['email'];
      $password = $row['password'];
      // verificar contraseña cifrada y validacion de correo 
      if(password_verify($pass, $password )&&($email_usuario==$email)){
        $contador++;
        $_SESSION['username']=$email_usuario;
      }  
    }
    
    if ($contador>0){
    
    header("Location: ../index-1.php");
    }
    
    if($contador<=0){
      echo '<script language="javascript">alert("Usuario o contraseña no son correctos");window.location.href="Login.php"</script>';
    }
	}
}

?>
