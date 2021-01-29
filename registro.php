<!doctype html>
<html lang="en">
  <head>
    <title>Eco-Mex register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nuestros_estilos.css">
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>

<body>

    <?php include 'templates/header.php';?>
    <br>
    <h2 align="center">Registro</h2>

    
<br/>

<form action="login.php" method="POST">
<div class="container" style="background-color:#f1f1f1">
<table>
<tr>
<td> <h3>Nombre(s)</h3>
<input type="text" placeholder="ingrese su nombre" name="nombre" requiered>
</td>
<td><h3>Apellido Paterno</h3>
<input type="text" placeholder="ingrese su Ap. Paterno" name="appaterno" requiered>
</td>
<td><h3>Apelido Materno</h3>
<input type="text" placeholder="ingrese su Ap. Materno" name="apmaterno" requiered>
</td>
</tr>
<tr>
<td><h3>sexo</h3>
<p>
Hombre: <input type="radio" name="sexo" id="sexo" /><br />
Mujer: <input type="radio" name="sexo" id="sexo" /><br />
</p></td>
<td>correo
<input type="text" placeholder="Ingrese su correo" name="email" required></td>
<td><h3>contraseña</h3>
<input type="password" placeholder="Ingrese su contraseña" name="password" required>
</td>

</tr>
</table>
</div>
<button type="submit"  name="btnregistrar">REGISTRARME</button>

</form>




    <br>
    <?php include 'templates/footer.php';?>
  </body>
</html>