<?php
include("conexion.php");
$nombre   = $_POST["nombre"];
$appaterno   = $_POST["appaterno"];
$apmaterno   = $_POST["apmaterno"];
$sexo   = $_POST["sexo"];
$email = $_POST["email"];
$password   = $_POST["password"];

//Login
if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conn,"SELECT * FROM login WHERE email = '$email' AND password='$password'");
	$nr = mysqli_num_rows($query);
	
	if($nr==1)
	{
		echo "<script> alert('Bienvenido $email'); window.location='principal.php' </script>";
	}else
	{
		echo "<script> alert('Usuario no existe'); window.location='index.php' </script>";
	}
}


//registro

//Registrar
if(isset($_POST["btnregistrar"]))
{
	$sqlgrabar = "INSERT INTO login(nombre,appaterno,apmaterno,sexo,email,password) values ('$nombre','$appaterno','$apmaterno','$sexo','$email','$password')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='principal.php' </script>";
	}else 
	{
		echo "Error: ".$sql."<br>".mysql_error($conn);
	}
}

?>